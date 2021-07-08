<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TeacherModel extends Model
{
    public $table='teacher';
    public $primaryKey='Teacher_Id';
    public $incrementing=true;
    public $keyType='int';
    public $timestamps=false;
}
