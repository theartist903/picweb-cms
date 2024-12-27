<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectionTeam extends Model
{
    protected $table = 'section_team';
    protected $primaryKey = 'id';
    protected $fillable = ['management_section_id' , 'member' , 'team_member' , 'member_designation' , 'member_email'];
    public $timestamps = false;
}
