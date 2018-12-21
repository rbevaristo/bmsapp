@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="btn-group pull-right">
            <a href="{{ route('roles.create') }}" class="btn btn-xs btn-success">
                <i class="fa fa-wrench"></i>
                <span class="hidden-xs">Add Role</span>
            </a>
            <a href="{{ route('permissions.create') }}" class="btn btn-xs btn-default">
                <i class="fa fa-key"></i>
                <span class="hidden-xs">Permissions</span>
            </a>
            <a href="{{ route('users.index') }}" class="btn btn-xs btn-default">
                <i class="fa fa-user-plus"></i> 
                <span class="hidden-xs">Users</span>
            </a>
        </div>
    </div>
    <hr>
    <div class="col-lg-12">
        <div class="list-group">
            @foreach ($roles as $role)
            <div class="list-group-item">
                <div class="btn-group" id="users-list">
                    <button class="btn" width="250">{{ $role->name }}</button>
                    <button class="btn">
                        @foreach($role->permissions()->pluck('name') as $permission)
                        <span class="badge badge-success pull-left">
                            {{ $permission }}
                        </span>
                        @endforeach
                    </button>
                </div>
                <div class="btn-group pull-right" role="group" aria-label="">
                    {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id] ]) !!}
                    <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-pencil-square-o"></i><span class="hidden-xs"> Edit</span></a>
                    <button type="submit" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> <span class="hidden-xs">Delete</span></button>
                    {!! Form::close() !!}
                </div>
            </div>
            @endforeach
        </div>    
    </div>
</div>
@endsection