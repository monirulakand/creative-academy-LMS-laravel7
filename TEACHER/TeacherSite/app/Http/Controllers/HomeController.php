<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ClassListModel;
use App\Model\FileDocModel;
use App\Model\ContactModel;
use App\Model\ReviewModel;

class HomeController extends Controller
{

        function HomeIndex(){

            $TotalClassList=ClassListModel::count();
            $TotalFileDocument=FileDocModel::count();
            $TotalContactList=ContactModel::count();
            $TotalReview=ReviewModel::count();

            return view('Home',[
                  'TotalClassList'=>$TotalClassList,
                  'TotalFileDocument'=>$TotalFileDocument,
                  'TotalContactList'=>$TotalContactList,
                  'TotalReview'=>$TotalReview
            ]);
        }

}
