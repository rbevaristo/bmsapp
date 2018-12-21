@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="btn-group pull-right">
            <a href="{{ route('clients.create') }}" class="btn btn-xs btn-success">
                <i class="fa fa-plus"></i> Client
            </a>
        </div>
    </div>
    <hr>
    <div class="col-lg-12">
        <div class="list-group">
            @foreach($clients as $client)
            <div class="list-group-item">
                @if(!$client->logo)
                    <span class="badge badge-info pull-left" style="margin-right: 10px;">{{ $client->name[0] }}</span>
                @else
                    
                @endif
                <a href="{{ route('clients.show', $client->id) }}"> {{ $client->name }}</a>
                <div class="btn-group pull-right" role="group" aria-label="">
                    {!! Form::open(['method' => 'DELETE', 'route' => ['clients.destroy', $client->id] ]) !!}
                    <a href="{{ route('clients.edit', $client->slug) }}" class="btn btn-xs btn-primary"><i class="fa fa-pencil-square-o"></i><span class="hidden-xs"> Edit</span></a>
                    <button type="submit" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> <span class="hidden-xs">Delete</span></button>
                    {!! Form::close() !!}
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center">
        {{ $clients->appends(['slug' => md5('votes')])->links() }}
    </div>
    </div>
</div>
@endsection