<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenders extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'tenders';
    protected $fillable = ['tender_num','tender_name' ,'tender_type' , 'procurement_entity' , 'tender_description' , 'tender_eoi' ,'tender_eoi_2', 'tender_evaluation' , 'sbd', 'advertisement_date' , 'closing_date' , 'financial_remarks','active'];
    public $timestamps = false;
}
