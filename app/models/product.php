<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'product';
    public $timestamps = false;
    public function image()
    {
        return $this->hasMany('App\models\images', 'product_id', 'id');
    }
}
