<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComplainsController extends Controller
{
    public function create()
    {
       return view('complains.create');
    }
}
