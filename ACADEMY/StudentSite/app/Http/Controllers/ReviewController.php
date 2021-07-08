<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ReviewModel;

class ReviewController extends Controller
{
    function AllReview(){
        $Review= ReviewModel::all();
        return view('Page.review',[
            'Review'=>$Review
        ]);
    }

    function ReviewIndex(){
        return view('Classroom.review');
    }


    function ReviewAdd(Request $req){
        $name =$req->input('name');
        $des=$req->input('des');

        $photoPath=$req->file('image')->store('public');
        $photoName=(explode('/',$photoPath))[1];

        $host=$_SERVER['HTTP_HOST'];
        $image="http://".$host."/storage/".$photoName;

        $result= ReviewModel::insert([
            'name'=>$name,
            'des'=>$des,
            'image'=>$image
            ]);

        if($result==true){
          return 1;
        }
        else{
         return 0;
        }
   }

}
