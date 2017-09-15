@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Reply to complains</b> | 
                <a href="{{ url('/home') }}">Back</a></div>
        <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
            <div class="panel-heading">
                    {{ $caseno->case_number }} - {{ $caseno->complain_subject }}
                </div>
                <div class="panel-body">
                   <div class="case-info">
                        <p>Complain : {{ $caseno->complain }}</p>
                        <p> Categry: {{ $type->vtype }} </p>
                        <p>
                        @if ($caseno->status == 1)
                            Status: <span class="label label-danger">Pending</span>
                        @else
                            Status: <span class="label label-success">{{ $ticket->status }}</span>
                        @endif
                        </p>
                        <p>Created on: {{ $caseno->created_at }}</p>
                        <p>Response before: {{ $caseno->response_before }}</p>
                        <p>
                           <b> Attachement : </b> <br/>
                           <a href="{{ public_path('documents/'.$caseno->attachement) }}">{{$caseno->attachement}}</a>
                        </p>
                    </div>
                    <hr>
                    <div class="comment-form">
                        <form action="{{ url('admin/response_complain') }}" method="POST" class="form">
                            {!! csrf_field() !!}

                            <input type="hidden" name="case_number_reply" id="case_number_reply" value="{{ $caseno->case_number }}">

                            <div class="form-group{{ $errors->has('response') ? ' has-error' : '' }}">
                                <textarea rows="10" id="response" class="form-control" name="response"></textarea>

                                @if ($errors->has('response'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('response') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Reply</button>
                            </div>
                        </form>
                    </div>     
                </div>
            </div>
          </div>
       </div>
            </div>
        </div>
    </div>
</div>
@endsection