<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LoginFailModel extends Model
{
    protected $table = 'login_fail';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
