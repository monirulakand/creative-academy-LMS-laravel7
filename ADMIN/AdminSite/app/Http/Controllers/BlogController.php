<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\BlogModel;

class BlogController extends Controller
{
    function BlogIndex(){
        return view('Blog');
    }

    function getBlogData(){
        $result=json_decode(BlogModel::orderBy('id','desc')->get());
        return $result;
    }


    function BlogDelete(Request $req){
        $id=$req->input('id');
        $result=BlogModel::where('id','=',$id)->delete();

        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }

    function getBlogDetails(Request $req){
        $id=$req->input('id');
        $result=BlogModel::where('id','=',$id)->get();
        return $result;
    }


    function BlogUpdate(Request $req){
        $id=$req->input('id');
        $title=$req->input('title');
        $des=$req->input('des');
        $date=$req->input('date');

        $result=BlogModel::where('id','=',$id)->update([
            'title'=>$title,
            'des'=>$des,
            'date'=>$date
        ]);

        if ($result==true){
            return 1;
        }
        else{
            return 0;
        }

    }


    function BlogAdd(Request $req){
        $title=$req->input('title');
        $des=$req->input('des');
        $date=$req->input('date');

        $result= BlogModel::insert([
            'title'=>$title,
            'des'=>$des,
            'date'=>$date
        ]);

        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }
}
