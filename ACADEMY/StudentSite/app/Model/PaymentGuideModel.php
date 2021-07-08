<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PaymentGuideModel extends Model
{
    protected $table = 'payment_guide';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
