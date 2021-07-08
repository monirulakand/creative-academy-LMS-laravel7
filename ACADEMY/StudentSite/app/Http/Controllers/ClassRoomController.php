<?php

namespace App\Http\Controllers;
use App\Model\PurchaseModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ClassRoomController extends Controller
{

    function ClassRoomPage(){
        $phn="";
        if(Session::has('token')==true){
            $phn=Session::get('token');
        }
        $ClassRoomCourse=PurchaseModel::Where('phn','=',$phn)->where('status','=','active')->get();
        return view('Classroom.classRoom',['ClassRoomCourse'=>$ClassRoomCourse]);
    }

}
