@extends('layouts.app')

@section('content')
<div class="row">
    <div class='col-lg-6 col-lg-offset-3'>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2><i class='fa fa-key'></i> Add Permission</h2>
            </div>
            <div class="panel-body">
                <form action="{{ route('permissions.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="roles">Role <span class="optional">(optional)</span></label>
                        <select class="selectpicker form-control" multiple data-actions-box="true" name="roles[]" id="roles">
                            @foreach($roles as $role)
                                <option data-content="<span class='badge badge-success'>{{ $role->name }}</span>" value="{{ $role->id }}">{{ ucfirst($role->name) }}</option>
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