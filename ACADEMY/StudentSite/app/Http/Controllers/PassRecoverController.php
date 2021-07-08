<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\StudentListModel;
class PassRecoverController extends Controller
{
    function onRecover(Request $req) {
        $phone= $req->input('mobile');
        $result= StudentListModel::where(['phn' => $phone])->get();
        $count= StudentListModel::where(['phn' => $phone])->count();
        if($count==0){
            return "AccountNotExist";
        }
        else if($result==true && $count>0){
            $name=$result[0]->name;
            $email=$result[0]->email;
            $password=$result[0]->pass;
            $phone=$result[0]->phn;
        }
        else{
            return 0;
        }
    }

}
