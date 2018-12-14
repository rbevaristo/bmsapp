@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Roles</h1>
    </div>
</div>
<div class="row">
    <div class='col-lg-4 col-lg-offset-4'>
        @include('inc.message')
        <h1><i class='fa fa-key'></i> Add Role</h1>
        <hr>
    
        {{ Form::open(array('url' => 'Roles')) }}
    
        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>
    
        <h5><b>Assign Permissions</b></h5>
    
        <div class='form-group'>
            @foreach ($permissions as $permission)
                {{ Form::checkbox('permissions[]',  $permission->id ) }}
                {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>
    
            @endforeach
        </div>
    
        {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}
    
        {{ Form::close() }}
    
    </div>
</div>
@endsection