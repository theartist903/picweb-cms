<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Controllers extends Model
{
    protected $table = 't_b_controller';
    protected $primaryKey = 'ID';
    protected $fillable = ["f_ControllerID" , "f_ControllerSN" , "f_IP" , "f_DoorsNames"];
    public $timestamps = false;
}
