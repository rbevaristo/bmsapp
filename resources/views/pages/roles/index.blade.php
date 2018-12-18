@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1><i class="fa fa-key"></i> Roles
    
            <a href="{{ route('users.index') }}" class="btn btn-default pull-right">Users</a>
            <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">Permissions</a>
            <a href="{{ route('roles.create') }}" class="btn btn-success pull-right">Add Role</a>
        </h1>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Role</th>
                        <th>Permissions</th>
                        <th>Operation</th>
                    </tr>
                </thead>
    
                <tbody>
                    @foreach ($roles as $role)
                    <tr>
    
                        <td width="250">{{ $role->name }}</td>
    
                        <td width="500">{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>{{-- Retrieve array of permissions associated to a role and convert to string --}}
                        <td width="100">
                        <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-sm btn-primary pull-left" style="margin-right: 3px;">Edit</a>
    
                        {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id] ]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger pull-left']) !!}
                        {!! Form::close() !!}
    
                        </td>
                    </tr>
                    @endforeach
                </tbody>
    
            </table>
        </div>
    
    
    </div>
</div>
@endsection