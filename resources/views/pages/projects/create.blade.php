@extends('layouts.app')

@section('content')
<div class="row">
    <div class='col-md-12'>
        <div class="panel panel-primary">
            <div class="panel-heading">
                Create Project
                <span class="pull-right">
                    <a href="{{ route('clients.create') }}" class="btn btn-xs btn-default"><i class="fa fa-plus"></i> Client</a>
                </span>
            </div>
            <div class="panel-body">
                <form>
                    <div class="form-group">
                      <label for="client">Client</label>
                      <select class="form-control selectpicker" name="client" id="client" data-show-subtext="true" data-live-search="true" required>
                        <option value="">Select Client</option>
                        @foreach (\App\Client::all() as $client)
                            <option value="{{ $client->id }}">{{ $client->name }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Project Title..." required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description <span class="optional">(optional)</span></label>
                        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="start_date">Start</label>
                                <input type="date" name="start_date" id="start_date" class="form-control" value="{{ date('Y-m-d') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="due_date">Due</label>
                                <input type="date" name="due_date" id="due_date" class="form-control" value="{{ date('Y-m-d') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" name="price" id="price" class="form-control">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Save</button>
                </form>
            </div>
        </div>
    </div>  
</div>
@endsection

@include('inc.bootstrap-select')