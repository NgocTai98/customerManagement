<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    protected $table = 'pro_image';
    public $timestamps = false;
    public function product()
    {
        return $this->belongsTo('App\models\product', 'product_id', 'id');
    }
}
