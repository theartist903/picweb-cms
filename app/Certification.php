<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    protected $table = 'doctor_certification';
    protected $primaryKey = 'id';
    protected $fillable = ['doctor_id' , 'title'];
    public $timestamps = false;
}
