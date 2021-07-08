<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\StudentListModel;

class StudentInfoController extends Controller
{
    function StudentIndex(){
        return view('StudentList');
    }

    function getStudentData(){
        $result=json_decode(StudentListModel::orderBy('id','desc')->get());
        return $result;
    }


    function StudentDelete(Request $req){
        $id=$req->input('id');
        $result=StudentListModel::where('id','=',$id)->delete();

        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }


    function getStudentDetails(Request $req){
        $id=$req->input('id');
        $result=StudentListModel::where('id','=',$id)->get();
        return $result;
    }


    function StudentUpdate(Request $req){
        $id=$req->input('id');
        $status=$req->input('status');

        $result=StudentListModel::where('id','=',$id)->update([
            'status'=>$status,
        ]);

        if ($result==true){
            return 1;
        }
        else{
            return 0;
        }

    }

}
