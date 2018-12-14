@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Permissions</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <h1><i class="fa fa-key"></i>Available Permissions
            <a href="{{ route('Users.index') }}" class="btn btn-default pull-right">Users</a>
            <a href="{{ route('Roles.index') }}" class="btn btn-default pull-right">Roles</a>
            <a href="{{ route('Permissions.create') }}" class="btn btn-success pull-right">Add Permission</a>
        </h1>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
    
                <thead>
                    <tr>
                        <th>Permissions</th>
                        <th>Operation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permissions as $permission)
                    <tr>
                        <td>{{ $permission->name }}</td> 
                        <td>
                        <a href="{{ route('Permissions.edit', $permission->id) }}" class="btn btn-sm btn-primary pull-left" style="margin-right: 3px;">Edit</a>
                        {{-- <a href="{{ URL::to('permissions/'.$permission->id.'/edit') }}" class="btn btn-sm btn-danger pull-left" style="margin-right: 3px;">Delete</a> --}}
    
                        {!! Form::open(['method' => 'DELETE', 'route' => ['Permissions.destroy', $permission->id] ]) !!}
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