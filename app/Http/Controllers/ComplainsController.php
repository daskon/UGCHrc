<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Violations;
use App\StudentComplains;
use App\District;
use App\ComplainReplys;
use Illuminate\Support\Facades\Auth;

class ComplainsController extends Controller
{
    public function showForm()
    {
        $violation = Violations::all();
        $district = District::all();

        return view('complains.create',compact('violation','district'));
    }

    public function store(Request $request)
    {
      $this->validate($request, [
          'case_number' => 'required',
          'complain_subject' => 'bail|required|max:50',
          'complainer_name' => 'required|max:50',
          'priority' => 'required',
          'contact_person' => 'required',
          'nic_number' => 'bail:required|max:10',
          'address' => 'required',
          'complained_date' => 'required',
          'contact_number' => 'required|numeric|min:10',
          'response_before' => 'required',
          'complain' => 'required',
          'district' => 'required'
      ]);
      
       $docName = time().'.'.$request->attachement->getClientOriginalExtension();

       $path = $request->attachement->move(public_path('documents'), $docName);

      $complain = new StudentComplains([
          'user_id' => Auth::user()->id,
          'case_number' => $request->input('case_number'),
          'complain_subject' => $request->input('complain_subject'),
          'complainer_name' => $request->input('complainer_name'),
          'priority' => $request->input('priority'),
          'contact_person' => $request->input('contact_person'),
          'nic_number' => $request->input('nic_number'),
          'address' => $request->input('address'),
          'complained_date' => $request->input('complained_date'),
          'contact_number' => $request->input('contact_number'),
          'response_before' => $request->input('response_before'),
          'v_id' => $request->input('violation'),
          'complain' => $request->input('complain'), 
          'district' => $request->input('district'),
          'attachement' => $docName
      ]);

      $complain->save();

      return redirect()->back()->with("status","Your complain has been recorded");
    }

    public function displayComplains(){

       $complain = StudentComplains::all();

       return view('complains.display',compact('complain'));
    }  

    public function replyToComplain($case_number){

        $caseno = StudentComplains::where('case_number', $case_number)->firstOrFail();

        $type = Violations::where('id',$caseno->v_id)->firstOrFail();

        return view('complains.reply', compact('caseno','type'));
    }

    public function responseComplain(Request $request){

       $this->validate([$request,
           'response' => 'required|max:200'
       ]);

       $reply = new ComplainReplys([
           'user_id_reply' => Auth::user()->id,
           'case_number_reply' => $request->input('case_number_reply'),
           'response' => $request->input('response'),
           'response_date' => date('Y-m-d')
       ]);

       return redirect()->back()->with("status","Your response has been recorded");
    }
}
