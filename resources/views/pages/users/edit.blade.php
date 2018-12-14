@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Users</h1>
    </div>
</div>
<div class="row">
    <div class='col-lg-6 col-lg-offset-4'>

        <h1><i class='fa fa-user-plus'></i> Edit {{$user->firstname}} {{ $user->lastname }}</h1>
        <hr>
    
        {{ Form::model($user, array('route' => array('Users.update', $user->id), 'method' => 'PUT')) }}

        <div class="form-group">
            {{ Form::label('firstName', 'FirstName') }}
            {{ Form::text('firstname', null, array('class' => 'form-control', 'required' => 'required')) }}
        </div>

        <div class="form-group">
            {{ Form::label('lastname', 'LastName') }}
            {{ Form::text('lastname', null, array('class' => 'form-control', 'required' => 'required')) }}
        </div>

        <div class="form-group">
            {{ Form::label('username', 'UserName') }}
            {{ Form::text('username', null, array('class' => 'form-control', 'required' => 'required')) }}
        </div>
    
        <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email', null, array('class' => 'form-control', 'required' => 'required')) }}
        </div>
    
        <h5><b>Give Role</b></h5>
    
        <div class='form-group'>
            @foreach ($roles as $role)
                {{ Form::checkbox('roles[]',  $role->id, $user->roles ) }}
                {{ Form::label($role->name, ucfirst($role->name)) }}<br>
            @endforeach
        </div>

        <div class="form-group">
            {{ Form::label('password', 'Password') }}<br>
            {{ Form::password('password', array('class' => 'form-control')) }}
        </div>
    
        <div class="form-group">
            {{ Form::label('password', 'Confirm Password') }}<br>
            {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
        </div>
    
        {{ Form::submit('Update', array('class' => 'btn btn-primary btn-block')) }}
    
        {{ Form::close() }}
    
    </div>
</div>

@endsection