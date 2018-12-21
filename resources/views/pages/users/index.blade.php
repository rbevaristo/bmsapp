@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="btn-group pull-right">
            <a href="{{ route('users.create') }}" class="btn btn-xs btn-success">
                <i class="fa fa-user-plus"></i> 
                <span class="hidden-xs">Add User</span>
            </a>
            <a href="{{ route('roles.index') }}" class="btn btn-xs btn-default">
                <i class="fa fa-wrench"></i>
                <span class="hidden-xs">Roles</span>
            </a>
            <a href="{{ route('permissions.index') }}" class="btn btn-xs btn-default">
                <i class="fa fa-key"></i>
                <span class="hidden-xs">Permissions</span>
            </a>
        </div>
    </div>
    <hr>
    <div class="col-lg-12">
        <div class="list-group">
            @foreach ($users as $user)
            <div class="list-group-item">
                <div class="btn-group" id="users-list">
                    <a href="#" class="btn btn-link"><strong>{{ $user->firstname }} {{ $user->lastname }}</strong></a>
                    <button class="btn hidden-xs">{{ $user->email }}</button>
                    <button class="btn hidden-xs">{{ $user->created_at->format('F d, Y h:ia') }}</button>
                    <button class="btn">
                        @foreach($user->roles()->pluck('name') as $role)
                        <span class="badge badge-success pull-left">
                            {{ $role }}
                        </span>
                        @endforeach
                    </button>
                </div>
                <div class="btn-group pull-right" role="group" aria-label="">
                    {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ]) !!}
                    <a href="{{ route('user.edit', $user->slug) }}" class="btn btn-xs btn-primary"><i class="fa fa-pencil-square-o"></i><span class="hidden-xs"> Edit</span></a>
                    <button type="submit" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> <span class="hidden-xs">Delete</span></button>
                    {!! Form::close() !!}
                </div>
            </div>
            @endforeach
        </div>    
    </div>
</div>
@endsection