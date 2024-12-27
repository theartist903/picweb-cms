<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementSection extends Model
{
    protected $table = 'management_section';
    protected $primaryKey = 'id';
    protected $fillable = ['management_id' , 'header' , 'description' , 'hod'];
    public $timestamps = false;

    public function management()
    {
        return $this->belongsTo(Management::class , 'management_id' , 'id');
    }

    public function service()
    {
        return $this->hasMany(SectionServices::class , 'management_section_id' , 'id');
    }

    public function team()
    {
        return $this->hasMany(SectionTeam::class , 'management_section_id' , 'id');
    }
}
