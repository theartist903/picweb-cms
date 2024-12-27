<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserNav extends Model
{
    protected $table = 'user_nav';
    protected $fillable = ['NAV_ID' , 'USER_ID'];
    public $timestamps = false;

    public function nav()
    {
        return $this->belongsTo(AdminNav::class , 'NAV_ID' , 'ID');
    }

    public function user()
    {
        return $this->belongsTo(Logins::class , 'USER_ID' , 'ID');
    }
}
