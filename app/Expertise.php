<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    protected $table = 'doctor_expertise';
    protected $primaryKey = 'id';
    protected $fillable = ['doctor_id' , 'title'];
    public $timestamps = false;


}
