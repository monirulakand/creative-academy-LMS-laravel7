<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PurchaseModel extends Model
{
    protected $table ='purchase';
    protected $primaryKey ='id';
    public $incrementing =true;
    protected $keyType ='int';
    public $timestamps =false;
}
