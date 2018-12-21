@extends('layouts.app')

@section('content')
<div class="row">
    <div class='col-lg-6 col-lg-offset-3'>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2><i class='fa fa-key'></i> Edit {{ $permission->name }}</h2>
            </div>
            <div class="panel-body">
                <form action="{{ route('permissions.update', $permission->id) }}" method="POST">
                    {{ method_field('PUT') }}
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $permission->name }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection