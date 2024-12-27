<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BOG extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'bog';
    protected $fillable = ['bog_name' , 'bog_image','bog_title'];
    public $timestamps = false;
}
