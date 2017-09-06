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
                                                <button class="btn btn-warning btn-detail open_modal" value="{{$complains->case_number}}">Edit</button>
                                                </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                   </div>
                  </div>

        <!--popup table-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Product</h4>
            </div>
            <div class="modal-body">
            <form id="frmComplain" name="frmComplain" class="form-horizontal" novalidate="">
                <div class="form-group error">
                 <label for="subject" class="col-sm-3 control-label">Complain Subject</label>
                   <div class="col-sm-9">
                    <input type="text" class="form-control has-error" id="subject" name="subject" placeholder="Complain Subject" value="">
                   </div>
                   </div>
                 <div class="form-group">
                 <label for="name" class="col-sm-3 control-label">Compliner Name</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Compliner Name" value="">
                    </div>
                </div>
            </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="btn-save" value="add">Save changes</button>
            <input type="hidden" id="case_number" name="case_number" value="0">
            </div>
        </div>
      </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection