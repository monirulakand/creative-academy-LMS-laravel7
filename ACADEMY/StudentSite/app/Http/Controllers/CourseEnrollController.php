<?php

namespace App\Http\Controllers;

use App\Model\ClassCompletedModel;
use App\Model\MoreSeriesModel;
use App\Model\PurchaseModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CourseEnrollController extends Controller
{
    function CourseEnrollPage(Request $request){
       $id=$request->id;

        $result=MoreSeriesModel::where(['id'=>$id])->get();

        return view('Page.courseEnrollPage',[
            'result'=>$result
        ]);
    }


    function onPurchase(Request $req){
        $img=$req->input('img');
        $title=$req->input('title');
        $code=$req->input('code');
        $phn="";
        if(Session::has('token')==true){
            $phn=Session::get('token');
        }
        $count=PurchaseModel::where('phn','=',$phn)->where('code','=',$code)->count();

        if($count>0){
            return 2;
        }
        else{
            $payment_type=$req->input('payment_type');
            $trxID=$req->input('trxID');
            $payment_mobile=$req->input('payment_mobile');
            $status="panding";
            $result=PurchaseModel::insert([
                'img'=>$img,
                'title'=>$title,
                'code'=>$code,
                'phn'=>$phn,
                'payment_type'=>$payment_type,
                'trxID'=>$trxID,
                'payment_mobile'=>$payment_mobile,
                'status'=>$status
            ]);

            if($result==true){
                return 1;
            }
            else{
                return 0;
            }
        }

    }
}
