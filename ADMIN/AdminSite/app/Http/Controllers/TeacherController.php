<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\TeacherModel;

class TeacherController extends Controller
{
    function TeacherIndex(){
        return view('TeacherList');
    }

    function getTeacherData(){
        $result=json_decode(TeacherModel::orderBy('Teacher_Id','desc')->get());
        return $result;
    }


    function TeacherDelete(Request $req){
        $Teacher_Id=$req->input('Teacher_Id');
        $result=TeacherModel::where('Teacher_Id','=',$Teacher_Id)->delete();

        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }

    function getTeacherDetails(Request $req){
        $Teacher_Id=$req->input('Teacher_Id');
        $result=TeacherModel::where('Teacher_Id','=',$Teacher_Id)->get();
        return $result;
    }


    function TeacherUpdate(Request $req){
        $Teacher_Id=$req->input('Teacher_Id');
        $Teacher_Name=$req->input('Teacher_Name');
        $Teacher_Details=$req->input('Teacher_Details');
        $Teacher_Email=$req->input('Teacher_Email');
        $Teacher_Phone=$req->input('Teacher_Phone');


        $result=TeacherModel::where('Teacher_Id','=',$Teacher_Id)->update([
            'Teacher_Name'=>$Teacher_Name,
            'Teacher_Details'=>$Teacher_Details,
            'Teacher_Email'=>$Teacher_Email,
            'Teacher_Phone'=>$Teacher_Phone
        ]);

        if ($result==true){
            return 1;
        }
        else{
            return 0;
        }

    }


    function TeacherAdd(Request $req){
        $Teacher_Name=$req->input('Teacher_Name');
        $Teacher_Details=$req->input('Teacher_Details');
        $Teacher_Email=$req->input('Teacher_Email');
        $Teacher_Phone=$req->input('Teacher_Phone');
        $password=$req->input('password');

        $result= TeacherModel::insert([
            'Teacher_Name'=>$Teacher_Name,
            'Teacher_Details'=>$Teacher_Details,
            'Teacher_Email'=>$Teacher_Email,
            'Teacher_Phone'=>$Teacher_Phone,
            'password'=>$password
        ]);

        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }

}
