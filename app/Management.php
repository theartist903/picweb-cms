<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    protected $table = 'management';
    protected $primaryKey = 'id';
    protected $fillable = ['type', 'management_name' , 'level'];
    public $timestamps = false;
}
