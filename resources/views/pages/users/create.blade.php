@extends('layouts.app')

@section('content')
<div class="row">
    <div class='col-lg-12'>

        <h1><i class='fa fa-user-plus'></i> Add User</h1>
        <hr>
        
        <div class="row">
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
            <div class="col-md-6">
                <div class="form-group">
                    <label for="firstname">Firstname</label>
                    <input type="text" name="firstname" id="firstname" class="form-control" required value="{{ old('firstname') }}">
                </div>
        
                <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input type="text" name="lastname" id="lastname" class="form-control" required value="{{ old('lastname') }}">
                </div>
        
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" required value="{{ old('username') }}">
                </div>
            
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required value="{{ old('email') }}">
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
                    <h2>Roles</h2>
                    @foreach ($roles as $role)
                        <div class="form-check">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="roles[]" value="{{ $role->id }}">
                              {{ ucfirst($role->name) }}
                            </label>
                        </div>

                    @endforeach
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>           
            </form>
        </div>
        


    
        
    
    </div>  
</div>
@endsection