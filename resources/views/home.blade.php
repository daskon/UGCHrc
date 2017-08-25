@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">UGC HRM</div>

                <div class="panel-body">
                    <div><a href="{{ url('admin/new_complain') }}">Add Complain</a></div>
                    <div><a href="{{ url('admin/view_complain') }}">View Complain</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
