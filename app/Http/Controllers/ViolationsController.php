<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViolationsController extends Controller
{
    public function show()
    {
        return view('complains.create');
    }
}
