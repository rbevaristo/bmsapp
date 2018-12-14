@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Users</h1>
    </div>
</div>
<div class="row">
    <div class='col-lg-4 col-lg-offset-4'>

        <h1><i class='fa fa-user-plus'></i> Add User</h1>
        <hr>
    
        {{ Form::open(array('url' => 'Users')) }}
    
        <div class="form-group">
            {{ Form::label('firstname', 'FirstName') }}
            {{ Form::text('firstname', '', array('class' => 'form-control', 'required' => 'required')) }}
        </div>

        <div class="form-group">
            {{ Form::label('lastname', 'LastName') }}
            {{ Form::text('lastname', '', array('class' => 'form-control', 'required' => 'required')) }}
        </div>

        <div class="form-group">
            {{ Form::label('username', 'UserName') }}
            {{ Form::text('username', '', array('class' => 'form-control', 'required' => 'required')) }}
        </div>
    
        <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email', '', array('class' => 'form-control', 'required' => 'required')) }}
        </div>
    
        <div class='form-group'>
            @foreach ($roles as $role)
                {{ Form::checkbox('roles[]',  $role->id ) }}
                {{ Form::label($role->name, ucfirst($role->name)) }}<br>
            @endforeach
        </div>
    
        <div class="form-group">
            {{ Form::label('password', 'Password') }}<br>
            {{ Form::password('password', array('class' => 'form-control', 'required' => 'required')) }}
    
        </div>
    
        <div class="form-group">
            {{ Form::label('password', 'Confirm Password') }}<br>
            {{ Form::password('password_confirmation', array('class' => 'form-control', 'required' => 'required')) }}
    
        </div>
    
        {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}
    
        {{ Form::close() }}
    
    </div>  
</div>
@endsection