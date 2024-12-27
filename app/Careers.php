<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Careers extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'careers';
    protected $fillable = ['description' ,'type' , 'file' , 'advertisement_date' , 'closing_date' , 'active'];
    public $timestamps = false;
}
