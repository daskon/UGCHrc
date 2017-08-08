
@extends('layouts.main')

@section('content')

    <div class="panel panel-default">
        <table class="table">

                <tr>
                    <td class="middle">
                        <div class="media">
                            <div class="col-lg-10">
                               {{--  @if(count($errors))
                                    <div class="alert alert-danger">
                                        <ul> --}}
                                            {{-- @foreach($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach --}}
                                        </ul>
                                    </div>
                                 {{-- @endif
                                    @if(Session::has('flash_message'))
                                        <div class="alert alert-success">
                                            {{ Session::get('flash_message') }}
                                        </div>
                                 @endif --}}
                            </div>
                            <div class="media-body">

                                <form class="form-horizontal" method="POST" action="{{ url('/new_complain') }}">
                                 {!! csrf_field() !!}

                                <div class="form-group{{ $errors->has('case_number') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Case No</label>

                                    <div class="col-md-6">
                                        <input id="case_number" type="text" class="form-control" name="case_number" value="{{ old('case_number') }}" required autofocus>

                                        @if ($errors->has('case_number'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('case_number') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('complain_subject') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Complain Subject</label>

                                    <div class="col-md-6">
                                        <input id="complain_subject" type="text" class="form-control" name="complain_subject" value="{{ old('complain_subject') }}" required autofocus>

                                        @if ($errors->has('complain_subject'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('complain_subject') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('priority') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Priority</label>

                                    <div class="col-md-6">
                                    
                                        <select id="priority" type="" class="form-control" name="priority">
                                        <option value="">Select Priority</option>
                                        <option value="low">Low</option>
                                        <option value="medium">Medium</option>
                                        <option value="high">High</option>
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
                                        <input id="contact_person" type="text" class="form-control" name="contact_person" value="{{ old('contact_person') }}" required autofocus>

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
                                        <input id="nic_number" type="text" class="form-control" name="nic_number" value="{{ old('nic_number') }}" required autofocus>

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
                                            required autofocus
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
                                        <input id="complained_date" type="date" class="form-control" name="complained_date" value="{{ old('complained_date') }}" required autofocus>

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
                                        <input id="contact_number" type="text" class="form-control" name="contact_number" value="{{ old('contact_number') }}" required autofocus>

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
                                        <input id="response_before" type="date" class="form-control" name="response_before" value="{{ old('response_before') }}" required autofocus>

                                        @if ($errors->has('response_before'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('response_before') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8"><h4><b>Basis of Human Rights Violations:</b></h4></div><br/>
                                </div>
                                aaad
                                <div class="row">
                                    <div class="col-md-3">{!! Form::label('', 'Complain in brief:') !!}</div>
                                    <div class="col-md-5">{!! Form::textarea('complain',null, ['size'=>'50x5']) !!}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        {!! Form::submit('Save',['class' => 'btn btn-primary form-control']) !!}
                                    </div>
                                </div>
                                {!! Form::close() !!}

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