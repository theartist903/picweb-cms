<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = ['news_image' , 'news_image_description', 'news_details' , 'news_image_1' , 'news_image_2' , 'news_image_3' , 'news_image_4', 'news_last_description','featured_news','covid_news'];
    protected $primaryKey = 'id';
}
