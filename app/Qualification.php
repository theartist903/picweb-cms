<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    protected $table = 'doctor_qualification';
    protected $primaryKey = 'id';
    protected $fillable = ['doctor_id' , 'title'];
    public $timestamps = false;
}
