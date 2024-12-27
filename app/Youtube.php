<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Youtube extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'youtube_videos';
    protected $fillable = ['title' , 'video' , 'active'];
    public $timestamps = false;

}
