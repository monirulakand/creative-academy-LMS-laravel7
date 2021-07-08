<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\MoreSeriesModel;

class CourseController extends Controller
{
    function courseIndex(){
        return view('Courses');
    }

    function getCourseData(){
        $result=json_decode(MoreSeriesModel::orderBy('id','desc')->get());
        return $result;
    }


    function CourseDelete(Request $req){
        $id=$req->input('id');
        $result=MoreSeriesModel::where('id','=',$id)->delete();

        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }

    function getCourseDetails(Request $req){
        $id=$req->input('id');
        $result=MoreSeriesModel::where('id','=',$id)->get();
        return $result;
    }


    function courseUpdate(Request $req){
        $id=$req->input('id');
        $img=$req->input('img');
        $title=$req->input('title');
        $des=$req->input('des');
        $code=$req->input('code');
        $fee=$req->input('fee');
        $totalClass=$req->input('totalClass');
        $totalStudent=$req->input('totalStudent');

        $result=MoreSeriesModel::where('id','=',$id)->update([
            'img'=>$img,
            'title'=>$title,
            'des'=>$des,
            'code'=>$code,
            'fee'=>$fee,
            'totalClass'=>$totalClass,
            'totalStudent'=>$totalStudent
        ]);

        if ($result==true){
            return 1;
        }
        else{
            return 0;
        }

    }


    function CourseAdd(Request $req){
        $title=$req->input('title');
        $des=$req->input('des');
        $code=$req->input('code');
        $fee=$req->input('fee');
        $totalClass=$req->input('totalClass');
        $totalStudent=$req->input('totalStudent');

        $photoPath=$req->file('img')->store('public');
        $photoName=(explode('/',$photoPath))[1];

        $host=$_SERVER['HTTP_HOST'];
        $img="http://".$host."/storage/".$photoName;

        $result= MoreSeriesModel::insert([
            'img'=>$img,
            'title'=>$title,
            'des'=>$des,
            'code'=>$code,
            'fee'=>$fee,
            'totalClass'=>$totalClass,
            'totalStudent'=>$totalStudent
        ]);

        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }
}
