<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Violations;
use App\StudentComplains;
use Illuminate\Support\Facades\Auth;

class ComplainsController extends Controller
{
    public function showForm()
    {
        $violation = Violations::all();
        return view('complains.create',compact('violation'));
    }

    public function store(Request $request)
    {
      $this->validate($request, [
          'case_number' => 'required',
          'complain_subject' => 'bail|required|max:30',
          'contact_person' => 'required',
          'nic_number' => 'bail:required|max:10',
          'address' => 'required',
          'complained_date' => 'required',
          'contact_number' => 'required|numeric|max:11',
          'response_before' => 'required',
          'complain' => 'required',
          'attachement' => 'required|attachement|mimes:jpeg,png,jpg,pdf.docx,doc|max:2048'
      ]);
      
      $complain = new StudentComplains([
          'user_id' => Auth::user()->id,
          'case_number' => $request->input('case_number'),
          'complain_subject' => $request->input('complain_subject'),
          'priority' => $request->input('priority'),
          'contact_person' => $request->input('contact_person'),
          'nic_number' => $request->input('nic_number'),
          'address' => $request->input('address'),
          'complained_date' => $request->input('complained_date'),
          'contact_number' => $request->input('contact_number'),
          'response_before' => $request->input('response_before'),
          'v_id' => $request->input('violation'),
          'complain' => $request->input('complain'), 
      ]);

      $complain->save();

      return redirect()->back()->with("status","Your message has been received");
    }

}
