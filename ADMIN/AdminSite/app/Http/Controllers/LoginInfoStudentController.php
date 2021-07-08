<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\LoginSuccessModel;

class LoginInfoStudentController extends Controller
{
    function LoginInfoStudentIndex(){
        return view('LoginInfoStudent');
    }

    function getLoginInfoStudentData(){
        $result=json_decode(LoginSuccessModel::orderBy('id','desc')->get());
        return $result;
    }

}
