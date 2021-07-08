<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use  App\Model\PaymentGuideModel;
use  App\Model\StudentListModel;
use  App\Model\ClassListModel;
use App\Model\MoreSeriesModel;
use App\Model\VisitorModel;

class HomeController extends Controller
{
    function HomePage(){
        $PaymentGuide=PaymentGuideModel::all();
        $TotalClass=ClassListModel::count();
        $TotalStudent=StudentListModel::count();
        $moreSeries=MoreSeriesModel::all();

        $ip=$_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Asia/Dhaka");
        $visitTime= date("h:i:sa");
        $visitDate= date("d-m-Y");

        VisitorModel::insert(['ip_address'=>$ip,'visit_time'=>$visitTime,'visit_date'=>$visitDate]);

        return view('Page.home',[
            'PaymentGuide'=>$PaymentGuide,
            'TotalClass'=>$TotalClass,
            'TotalStudent'=>$TotalStudent,
            'moreSeries'=>$moreSeries,
        ]);
    }
}
