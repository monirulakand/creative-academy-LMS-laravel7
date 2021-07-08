<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MoreSeriesModel extends Model
{
    public $table = 'more_series';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $keyType = 'int';
    public $timestamps = false;
}
