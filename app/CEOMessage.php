<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CEOMessage extends Model
{
    protected $table = 'message';
    protected $primaryKey = 'id';
    protected $fillable = ['msg_title' , 'msg_pic' , 'msg_description'];
    public $timestamps = false;
}
