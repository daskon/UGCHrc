<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Violations;

class ComplainsController extends Controller
{
    public function showForm()
    {
        $violation = Violations::all();
        return view('complains.create',compact('violation'));
    }

    public function store(Request $request)
    {

      $rules = [
          'case_number' => 'required',
          'complain_subject' => 'bail|required|max:30',
          'contact_person' => 'required',
          'nic_number' => 'bail:required|max:10',
          'address' => 'required',
          'complained_date' => 'required',
          'contact_number' => 'required|numeric|max:11',
          'response_before' => 'required',
          'complain' => 'required',
          'attachement' => 'required'
      ];

      $this->validate($request, $rules);
      
      return back()->with("status","Your message has been received");
    }

}
