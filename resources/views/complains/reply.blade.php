@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reply to complains | 
                <a href="{{ url('/home') }}">Back</a></div>
<div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-body">
                    @if ($caseno->isEmpty())
                        <p>You have no any complains to view.</p>
                    @else
                        <table class="table">
                            <tbody>
                            @foreach ($caseno as $case)
                                <tr>
                                    <td>
                                       {{ $case->complain_subject }}
                                    </td>
                                    <td>
                                      @if ($case->priority == 1)
                                        Low
                                      @elseif($case->priority == 2)
                                        Medium
                                      @else 
                                        High
                                      @endif
                                    </td>
                                    <td>
                                     
                                    </td>
                                    <td>
                                      
                                    </td>
                                    <td>
                                      
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