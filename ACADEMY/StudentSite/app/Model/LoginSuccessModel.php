<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LoginSuccessModel extends Model
{
    protected $table = 'login_info';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
