<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ReviewModel;

class ReviewController extends Controller
{
    function ReviewIndex(){
        return view('Review');
    }

    function getReviewData(){
        $result=json_decode(ReviewModel::orderBy('id','desc')->get());
        return $result;
    }


    function ReviewDelete(Request $req){
        $id=$req->input('id');
        $result=ReviewModel::where('id','=',$id)->delete();

        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }

    function getReviewDetails(Request $req){
        $id=$req->input('id');
        $result=ReviewModel::where('id','=',$id)->get();
        return $result;
    }


    function ReviewUpdate(Request $req){
        $id=$req->input('id');
        $name=$req->input('name');
        $des=$req->input('des');
        $image=$req->input('image');

        $result=ReviewModel::where('id','=',$id)->update([
            'name'=>$name,
            'des'=>$des,
            'image'=>$image,
        ]);

        if ($result==true){
            return 1;
        }
        else{
            return 0;
        }

    }

}
