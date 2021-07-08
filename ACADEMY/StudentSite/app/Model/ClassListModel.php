<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ClassListModel extends Model
{
    protected $table = 'class_list';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
