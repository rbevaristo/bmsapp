@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Users</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <h1><i class="fa fa-users"></i> User Administration <a href="{{ route('Roles.index') }}" class="btn btn-default pull-right">Roles</a>
        <a href="{{ route('Permissions.index') }}" class="btn btn-default pull-right">Permissions</a></h1>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
    
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Date/Time Added</th>
                        <th>User Roles</th>
                        <th>Operations</th>
                    </tr>
                </thead>
    
                <tbody>
                    @foreach ($users as $user)
                    <tr>
    
                        <td>{{ $user->firstname }} {{ $user->lastname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                        <td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
                        <td>
                        <a href="{{ route('Users.edit', $user->id) }}" class="btn btn-sm btn-primary pull-left" style="margin-right: 3px;">Edit</a>
    
                        {!! Form::open(['method' => 'DELETE', 'route' => ['Users.destroy', $user->id] ]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger pull-left']) !!}
                        {!! Form::close() !!}
    
                        </td>
                    </tr>
                    @endforeach
                </tbody>
    
            </table>
        </div>
    
        <a href="{{ route('Users.create') }}" class="btn btn-success">Add User</a>
    
    </div>
</div>
@endsection