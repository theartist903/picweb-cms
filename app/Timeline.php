<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['title' , 'description' , 'image' , 'created_at'];
    protected $table = 'timeline';
    public $timestamps = false;
}
