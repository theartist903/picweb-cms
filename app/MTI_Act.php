<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MTI_Act extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'mti_acts';
    protected $fillable = ['description' , 'file' , 'advertisement_date' , 'active'];
    public $timestamps = false;
}
