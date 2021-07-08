<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class StudentListModel extends Model
{
    public $table = 'student_list';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $keyType = 'int';
    public $timestamps = false;
}
