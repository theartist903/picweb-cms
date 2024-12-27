<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FrontContentSection extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'front_content_section';
    protected $fillable = ['content_level' , 'content_pic' , 'content_description'];
    public $timestamps = false;
}