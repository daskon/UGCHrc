<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Violations;

class ComplainsController extends Controller
{
    public function create()
    {
       $violation = Violations::all();

       return view('complains.create',compact('violation'));
    }
}
