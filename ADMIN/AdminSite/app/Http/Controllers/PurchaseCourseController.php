<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\PurchaseModel;

class PurchaseCourseController extends Controller
{
    function PurchaseCourseIndex(){
        return view('PurchaseCourse');
    }

    function getPurchaseCourseData(){
        $result=json_decode(PurchaseModel::orderBy('id','desc')->get());
        return $result;
    }


    function PurchaseCourseDelete(Request $req){
        $id=$req->input('id');
        $result=PurchaseModel::where('id','=',$id)->delete();

        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }


    function getPurchaseCourseDetails(Request $req){
        $id=$req->input('id');
        $result=PurchaseModel::where('id','=',$id)->get();
        return $result;
    }


    function PurchaseCourseUpdate(Request $req){
        $id=$req->input('id');
        $status=$req->input('status');

        $result=PurchaseModel::where('id','=',$id)->update([
            'status'=>$status,
        ]);

        if ($result==true){
            return 1;
        }
        else{
            return 0;
        }

    }
}
