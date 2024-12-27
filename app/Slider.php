<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'sliders';
    protected $fillable = ['slider_image' , 'slider_text'];
    public $timestamps = false;
}
