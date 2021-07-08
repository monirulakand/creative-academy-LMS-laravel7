<?php

namespace App\Http\Controllers;

use App\Model\StudentListModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
class ProfileController extends Controller
{
    function  ProfilePage(){
        return view('Classroom.profile');
    }

    function  ProfileDetail(){
        if(Session::has('token')==true){
            $phn=Session::get('token');
            $Detail=StudentListModel::where('phn','=',$phn)->get();
            return $Detail;
        }
        else if(Cookie::has('token')==true){
            $phn=Cookie::get('token');
             $Detail=StudentListModel::where('phn','=',$phn)->get();
            return $Detail;
        }

    }
}
