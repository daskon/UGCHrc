<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComplainReplys extends Model
{
    protected $fillable = [ 'user_id_reply','case_number_reply','response','response_date' ];
}
