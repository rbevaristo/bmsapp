@extends('layouts.app')

@section('content')
<div class="row">
    <div class='col-lg-6 col-lg-offset-3'>
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <h2><i class='fa fa-key'></i> Edit {{ $role->name }}</h2>
            </div>
            <div class="panel-body">
                <form action="{{ route('roles.update', $role->id) }}" method="POST">
                    {{ method_field('PUT') }}
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required value="{{ $role->name }}">
                    </div>
                    <div class="form-group">
                        <label for="permissions">Permission</label>
                        <select class="selectpicker form-control" multiple data-actions-box="true" name="permissions[]" id="permissions">
                            @foreach($permissions as $permission)
                                <option data-content="<span class='badge badge-success'>{{ $permission->name }}</span>" value="{{ $permission->id }}" {{ strpos($role->permissions()->pluck('name'), $permission->name) ? 'selected' : ''}}>{{ ucfirst($permission->name) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@include('inc.bootstrap-select')