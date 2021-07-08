<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\MoreSeriesModel;

class CourseController extends Controller
{
    function CoursesPage(){
        $courses= MoreSeriesModel::all();
        return view('Page.courses',[
            'courses'=>$courses
        ]);
    }
}
