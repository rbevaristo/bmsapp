@extends('layouts.app')

@section('content')
<div class="row">
    
    <div class='col-lg-12'>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="text-center"><i class='fa fa-pencil-square-o'></i> Edit {{ $user->fullname }}</h2>
            </div>
            <div class="panel-body">
                <div class="row">
                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                        {{ method_field('PUT') }}
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
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                    
                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                        </div>
        
                    </div>
                    <div class="col-md-6">
                        <div class='form-group'>
                            <h2>Roles</h2>
                            <select class="selectpicker form-control" multiple data-actions-box="true" name="roles[]">
                                @foreach($roles as $role)
                                    <option data-content="<span class='badge badge-success'>{{ $role->name }}</span>" value="{{ $role->id }}" {{ strpos($user->roles->pluck('name'), $role->name) ? 'selected' : ''}}>{{ ucfirst($role->name) }}</option>
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
    </div>
</div>

@endsection

@include('inc.bootstrap-select')