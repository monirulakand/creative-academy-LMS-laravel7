<?php

namespace App\Http\Controllers;

use App\Model\ReviewModel;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    function ReviewIndex(){
        return view('Review');
    }

    function getReviewData(){
        $result=json_decode(ReviewModel::orderBy('id','desc')->get());
        return $result;
    }
}
