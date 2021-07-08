<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\FileDocModel;
class FilesController extends Controller
{

    function  FilesPage(){
        return view('Classroom.files');
    }

    function  FileList(){
        $FileList=FileDocModel::all();
        return $FileList;
    }
}
