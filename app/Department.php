<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';
    protected $fillable = ['name'];
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function doctor()
    {
        return $this->hasMany(Doctors::class , 'dept_id' , 'id');
    }
}
