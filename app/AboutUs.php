<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'aboutus';
    protected $fillable = ['banner_image','details','image_1','image_2','image_3','details_2','image_4','image_5','image_6','details_3','image_7','image_8','image_9'];
    public $timestamps = false;
}
