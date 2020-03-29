<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    //
    protected $table ='slider';
    protected $primaryKey='sliderId';
    public $timestamps = false;
}
