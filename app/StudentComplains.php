<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentComplains extends Model
{
    protected $fillable = [
        'case_number','complain_subject','priority','contact_person','nic_number',
        'address','complained_date','contact_no','response_before','complain','attachement'
    ];
}
