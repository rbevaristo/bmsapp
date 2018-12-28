@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-9 col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                List of Employees
            </div>
            <div class="panel-body">
                <div class="list-group">
                    @foreach($employees as $employee)
                    <a href="#" class="list-group-item list-group-item-action">
                        {{ $employee->fullname }}
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                
            </div>
            <div class="panel-body">
                
            </div>
        </div>
    </div>
</div>
@endsection