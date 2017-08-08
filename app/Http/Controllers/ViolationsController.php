<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Violations;

class ViolationsController extends Controller
{
    public function show()
    {
        $violations = new Violations::all();

        return view('complains.create',compact('violations'));
    }
}
