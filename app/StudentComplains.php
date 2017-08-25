<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentComplains extends Model
{
    protected $fillable = [
        'user_id', 'case_number','complain_subject','priority','contact_person','nic_number',
        'address','complained_date','contact_number','response_before', 'v_id', 'complain','attachement'
    ];
}
