@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="btn-group pull-right">
            <a href="{{ route('permissions.create') }}" class="btn btn-xs btn-success">
                <i class="fa fa-key"></i>
                <span class="hidden-xs">Add Permission</span>
            </a>
            <a href="{{ route('users.index') }}" class="btn btn-xs btn-default">
                <i class="fa fa-user-plus"></i> 
                <span class="hidden-xs">Users</span>
            </a>
            <a href="{{ route('roles.index') }}" class="btn btn-xs btn-default">
                <i class="fa fa-wrench"></i>
                <span class="hidden-xs">Roles</span>
            </a>
        </div>
    </div>
    <hr>
    <div class="col-lg-12">
        <div class="list-group">
            @foreach ($permissions as $permission)
            <div class="list-group-item">
                {{ $permission->name }}
                <div class="btn-group pull-right" role="group" aria-label="">
                    {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]) !!}
                    <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-pencil-square-o"></i><span class="hidden-xs"> Edit</span></a>
                    <button type="submit" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> <span class="hidden-xs">Delete</span></button>
                    {!! Form::close() !!}
                </div>
            </div>
            @endforeach
        </div>    
    </div>
</div>
@endsection