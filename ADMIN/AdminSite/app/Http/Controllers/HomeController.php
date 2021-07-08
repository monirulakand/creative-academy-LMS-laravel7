<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\VisitorModel;
use App\Model\MoreSeriesModel;
use App\Model\StudentListModel;
use App\Model\TeacherModel;
use App\Model\BlogModel;
use App\Model\ContactModel;
use App\Model\ReviewModel;

class HomeController extends Controller
{

        function HomeIndex(){
            $TotalVisitor=VisitorModel::count();
            $TotalCourse=MoreSeriesModel::count();
            $TotalStudent=StudentListModel::count();
            $TotalTeacher=TeacherModel::count();
            $TotalBlog=BlogModel::count();
            $TotalContact=ContactModel::count();
            $TotalReview=ReviewModel::count();

            return view('Home',[
                  'TotalVisitor'=>$TotalVisitor,
                  'TotalCourse'=>$TotalCourse,
                  'TotalStudent'=>$TotalStudent,
                  'TotalTeacher'=>$TotalTeacher,
                  'TotalBlog'=>$TotalBlog,
                  'TotalContact'=>$TotalContact,
                  'TotalReview'=>$TotalReview,
            ]);
        }


}
