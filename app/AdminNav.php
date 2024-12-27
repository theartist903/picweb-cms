<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminNav extends Model
{
    protected $primaryKey = 'ID';
    protected $table = 'admin_nav';
    protected $fillable = ['TITLE','PATH','ACTIVE'];
    public $timestamps = false;
}
