<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ClassListModel;

class ClassListController extends Controller
{
    function ClassListIndex(){
        return view('ClassList');
    }

    function getClassListData(){
        $result=json_decode(ClassListModel::orderBy('id','desc')->get());
        return $result;
    }

    function ClassListDelete(Request $req){
        $id=$req->input('id');
        $result=ClassListModel::where('id','=',$id)->delete();

        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }

    function getClassListDetails(Request $req){
        $id=$req->input('id');
        $result=ClassListModel::where('id','=',$id)->get();
        return $result;
    }


    function ClassListUpdate(Request $req){
        $id=$req->input('id');
        $serial_no=$req->input('serial_no');
        $topic=$req->input('topic');
        $title=$req->input('title');
        $source=$req->input('source');
        $video_link=$req->input('video_link');
        $category=$req->input('category');

        $result=ClassListModel::where('id','=',$id)->update([
            'serial_no'=>$serial_no,
            'topic'=>$topic,
            'title'=>$title,
            'source'=>$source,
            'video_link'=>$video_link,
            'category'=>$category,
        ]);

        if ($result==true){
            return 1;
        }
        else{
            return 0;
        }

    }


    function ClassListAdd(Request $req){
        $serial_no=$req->input('serial_no');
        $topic=$req->input('topic');
        $title=$req->input('title');
        $source=$req->input('source');
        $video_link=$req->input('video_link');
        $category=$req->input('category');

        $result= ClassListModel::insert([
            'serial_no'=>$serial_no,
            'topic'=>$topic,
            'title'=>$title,
            'source'=>$source,
            'video_link'=>$video_link,
            'category'=>$category,
        ]);

        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }
}
