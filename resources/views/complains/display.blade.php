@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">List of open complains | 
                <a href="{{ url('/home') }}">Back</a></div>
<div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-body">
                    @if ($complain->isEmpty())
                        <p>You have no any complains to view.</p>
                    @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Case Number</th>
                                    <th>Received From</th>
                                    <th>Complain</th>
                                    <th>Response Before</th>
                                    <th>Status</th>
                                    <th>Privilage</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($complain as $complains)
                                <tr>
                                    <td>
                                      <a href="{{ url('admin/reply_complain/'. $complains->case_number) }}">
                                        {{ $complains->case_number }}
                                      </a>
                                    </td>
                                    <td>
                                      @if ($complains->received == 0)
                                       Secatry Office
                                      @endif
                                    </td>
                                    <td>
                                        {{ $complains->complain_subject }}
                                     </a>
                                    </td>
                                    <td>
                                      {{ $complains->response_before }}
                                    </td>
                                    <td>
                                      @if ($complains->status == 1)
                                        <span class="label label-danger">Pending</span>
                                      @else
                                        <span class="label label-success">Resolved</span>
                                      @endif
                                    </td>
                                    <td>
                                       <button type="submit" class="btn btn-info btn-sm">Edit</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
            </div>
        </div>
    </div>
</div>
@endsection