<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'doctors';
    protected $fillable = ['doctor_image' , 'name' , 'title' , 'description' , 'timing' , 'dept_id' , 'speciality'];
    public $timestamps = false;

    public function dept()
    {
        return $this->belongsTo(Department::class , 'dept_id' , 'id');
    }

    public function expertise()
    {
        return $this->hasMany(Expertise::class , 'doctor_id' , 'id');
    }
    public function qualification()
    {
        return $this->hasMany(Qualification::class , 'doctor_id' , 'id');
    }
    public function certification()
    {
        return $this->hasMany(Certification::class , 'doctor_id' , 'id');
    }


}
