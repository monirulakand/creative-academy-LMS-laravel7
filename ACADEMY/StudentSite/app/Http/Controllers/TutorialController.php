<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Model\ClassListModel;

class TutorialController extends Controller
{
    
    function TutorialByCourseCode(Request $request){
        $code= $request->code;
        $CourseClasses=ClassListModel::where('code','=',$code)->get();
        return view('Classroom.courseClass',[
            'CourseClasses'=>$CourseClasses
        ]);
    }

    function courseVideos(Request $request){
        $code= $request->code;
        $CourseCode=ClassListModel::where('code','=',$code)->get();
        return $CourseCode;
    }

}
