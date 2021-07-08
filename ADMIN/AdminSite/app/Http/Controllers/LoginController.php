<?php

namespace App\Http\Controllers;

use App\Model\AdministratorModel;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    function LoginPage(){
        return view('Login');
    }

    function onLogout(Request $request){
        $request->session()->flush();
        return redirect('/Login');
    }


    function onLogin(Request $request){
        $email= $request->input('email');
        $password= $request->input('password');
        $countValue=AdministratorModel::where('email',$email)->where('password',$password)->count();

        if($countValue==1){
            $request->session()->put('email',$email);
            return 1;
        }
        else{
            return 0;
        }

    }
}
