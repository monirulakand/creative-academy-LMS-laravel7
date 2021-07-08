<?php
namespace App\Http\Controllers;
use App\Model\StudentListModel;
use Illuminate\Http\Request;
use App\Model\LoginFailModel;
use App\Model\LoginSuccessModel;
use Illuminate\Support\Facades\Cookie;
class LoginController extends Controller
{
    function LoginPage(){
        return view('Page.login');
    }

    function onLogin(Request $req){
        $phn= $req->input('phn');
        $pass= $req->input('pass');
        $checkStatus= $req->input('checkStatus');

        $ip=$_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Asia/Dhaka");
        $logTime= date("h:i:sa");
        $logDate= date("d-m-Y");

        $count= StudentListModel::where('phn','=',$phn)->where('pass','=',$pass)->count();
        $result= StudentListModel::where('phn','=',$phn)->where('pass','=',$pass)->get();

        if($count==0){
            LoginFailModel::insert([
                'mobile'=>$phn,
                'ip_address'=>$ip,
                'logtime'=>$logTime,
                'logdate'=>$logDate,
            ]);
            return 0;
        }
        else if($count==1 && $result[0]->status=="pending"){
            LoginFailModel::insert([
                'mobile'=>$phn,
                'ip_address'=>$ip,
                'logtime'=>$logTime,
                'logdate'=>$logDate,
            ]);
            return "pending";
        }

        else if($count==1 && $result[0]->status=="active"){
            LoginSuccessModel::insert([
                'mobile'=>$phn,
                'ip_address'=>$ip,
                'logtime'=>$logTime,
                'logdate'=>$logDate,
            ]);
            if($checkStatus=="check"){
                Cookie::queue('token', $phn, 4320);
                Cookie::queue('name', $result[0]->name, 4320);
                return 1;
            }
            else{
                $req->session()->put('token',$phn);
                $req->session()->put('name',$result[0]->name);
                return 1;
            }
        }
        else{
            return "error";
        }

    }
}
