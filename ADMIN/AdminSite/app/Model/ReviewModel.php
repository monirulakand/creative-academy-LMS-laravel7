<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ReviewModel extends Model
{
    public $table = 'review';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $keyType = 'int';
    public $timestamps = false;
}
