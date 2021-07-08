<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\TeacherModel;

class TeacherLoginController extends Controller
{
    function LoginIndex(){
        return view('Login');
    }

    function onLogout(Request $request){
        $request->session()->flush();
        return redirect('/Login');
    }


    function onLogin(Request $request){
        $Teacher_Email= $request->input('Teacher_Email');
        $password= $request->input('password');
        $countValue=TeacherModel::where('Teacher_Email','=',$Teacher_Email)->where('password','=',$password)->count();

        if($countValue==1){
            $request->session()->put('Teacher_Email',$Teacher_Email);
            return 1;
        }
        else{
            return 0;
        }

    }
}
