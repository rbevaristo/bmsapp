@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Users</h1>
    </div>
</div>
<div class="row">
    
    <div class='col-lg-12'>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="text-center"><i class='fa fa-user-plus'></i> Add User</h2>
            </div>
            <div class="panel-body">
                <div class="row">
                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                        @csrf
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstname">Firstname</label>
                            <input type="text" name="firstname" id="firstname" class="form-control" required value="{{ $user->firstname }}">
                        </div>
                
                        <div class="form-group">
                            <label for="lastname">Lastname</label>
                            <input type="text" name="lastname" id="lastname" class="form-control" required value="{{ $user->lastname }}">
                        </div>
                
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control" required value="{{ $user->username }}">
                        </div>
                    
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required value="{{ $user->email }}">
                        </div>
        
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                    
                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                        </div>
        
                    </div>
                    <div class="col-md-6">
                        <div class='form-group'>
                            <h2>Roles  {{ $user->roles->pluck('name') }}</h2>
                            <select class="selectpicker form-control" multiple data-actions-box="true" name="roles[]">
                                @foreach($roles as $role)
                                    <option data-content="<span class='badge badge-success'>{{ $role->name }}</span>" value="{{ $role->id }}" checked="{{ strpos($user->roles->pluck('name'), $role->name) ? 'true' : 'false'}}">{{ ucfirst($role->name) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>           
                    </form>
                </div>
            </div>
        </div>
        {{-- <h1><i class='fa fa-user-plus'></i> Edit {{$user->firstname}} {{ $user->lastname }}</h1>
        <hr>
    
        {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}

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
    
        {{ Form::close() }} --}}
    
    </div>
</div>

@endsection

@include('inc.bootstrap-select')