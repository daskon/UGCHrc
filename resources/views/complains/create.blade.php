
@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <table class="table">

                <tr>
                    <td class="middle">
                        <div class="media">
                            <div>
                                 @if (session('status'))
                                    <div class="alert alert-success">
                                    {{ session('status') }}
                            </div>
                                @endif
                            </div>
                            <div class="media-body">

                            <form class="form-horizontal" method="POST" action="{{ url('new_complain') }}" file="true">
                                 {{csrf_field()}}

                                <div class="form-group{{ $errors->has('case_number') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Case No</label>

                                    <div class="col-md-6">
                                        <input id="case_number" type="text" class="form-control" name="case_number" value="{{ old('case_number') }}" autofocus>
                                            <span class="help-block">
                                                <strong>{{ $errors->first('case_number') }}</strong>
                                            </span>
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('complain_subject') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Complain Subject</label>

                                    <div class="col-md-6">
                                        <input id="complain_subject" type="text" class="form-control" name="complain_subject" value="{{ old('complain_subject') }}" >
                                            <span class="help-block">
                                                <strong>{{ $errors->first('complain_subject') }}</strong>
                                            </span>
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('priority') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Priority</label>

                                    <div class="col-md-6">
                                        <select id="priority" class="form-control" name="priority">
                                            <option value="">Select Priority</option>
                                            <option value="1">Low</option>
                                            <option value="2">Medium</option>
                                            <option value="3">High</option>
                                        </select>
                                        @if ($errors->has('priority'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('priority') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('contact_person') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Contact Person</label>

                                    <div class="col-md-6">
                                        <input id="contact_person" type="text" class="form-control" name="contact_person" value="{{ old('contact_person') }}" >

                                        @if ($errors->has('contact_person'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('contact_person') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('nic_number') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">NIC No</label>

                                    <div class="col-md-6">
                                        <input id="nic_number" type="text" class="form-control" name="nic_number" value="{{ old('nic_number') }}">

                                        @if ($errors->has('nic_number'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('nic_number') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Address</label>

                                    <div class="col-md-6">
                                        <textarea 
                                            id="address" 
                                            class="form-control" 
                                            name="address" 
                                            value="{{ old('address') }}" 
                                            cols="5" rows="4">
                                        </textarea>

                                        @if ($errors->has('address'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="form-group{{ $errors->has('complained_date') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Complained Date</label>

                                    <div class="col-md-6">
                                        <input id="complained_date" type="date" class="form-control" name="complained_date" value="{{ old('complained_date') }}" >

                                        @if ($errors->has('complained_date'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('complained_date') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('contact_number') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Contact No</label>

                                    <div class="col-md-6">
                                        <input id="contact_number" type="text" class="form-control" name="contact_number" value="{{ old('contact_number') }}" >

                                        @if ($errors->has('contact_number'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('contact_number') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('response_before') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Response Before</label>

                                    <div class="col-md-6">
                                        <input id="response_before" type="date" class="form-control" name="response_before" value="{{ old('response_before') }}" >

                                        @if ($errors->has('response_before'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('response_before') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('violation') ? ' has-error' : '' }}">
                                <label for="violation" class="col-md-4 control-label">Basis of Human Rights Violations:</label>

                                <div class="col-md-6">
                                        <select id="violation" type="violation" class="form-control" name="violation">
                                            <option value="">Select Violation Type</option>
                                            @foreach ($violation as $violations)
                                            <option value="{{ $violations->id }}">{{ $violations->vtype }}</option>
                                            @endforeach
                                        </select>

                                        @if ($errors->has('violation'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('violation') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('complain') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Complain</label>

                                    <div class="col-md-6">
                                        <textarea 
                                            id="complain" 
                                            class="form-control" 
                                            name="complain" 
                                            value="{{ old('complain') }}" 
                                            cols="5" rows="4">
                                        </textarea>
                                        @if ($errors->has('complain'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('complain') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('attachement') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Attachement</label>

                                    <div class="col-md-6">
                                        <input
                                            type="file" 
                                            id="attachement" 
                                            class="form-control" 
                                            name="attachement" 
                                            value="{{ old('attachement') }}">

                                        @if ($errors->has('attachement'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('attachement') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                 <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>

                            </div>
                        </div>
                    </td>
                    <td width="100" class="middle">
                      {{--  <div>
                            <a href="#" class="btn btn-circle btn-default btn-xs" title="Edit">
                                <i class="glyphicon glyphicon-edit"></i>
                            </a>
                            <a href="#" class="btn btn-circle btn-danger btn-xs" title="Edit">
                                <i class="glyphicon glyphicon-remove"></i>
                            </a>
                        </div>--}}
                    </td>
                </tr>

        </table>
    </div>

    <div class="text-center">
        <nav>

        </nav>
    </div>

@endsection