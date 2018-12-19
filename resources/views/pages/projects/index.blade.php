@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                List of Projects
                <span class="pull-right">
                    <a href="{{ route('projects.create') }}" class="btn btn-xs btn-primary"><i class="fa fa-plus"></i> Project</a>
                    <a href="{{ route('clients.create') }}" class="btn btn-xs btn-default"><i class="fa fa-plus"></i> Client</a>
                </span>
            </div>
            <div class="panel-body">
                
            </div>
        </div>
    </div>
</div>
@endsection