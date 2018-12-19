@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                List of Clients
                <span class="pull-right">
                    <a href="{{ route('clients.create') }}" class="btn btn-xs btn-primary"><i class="fa fa-plus"></i> Client</a>
                </span>
            </div>
            <div class="panel-body">
                <ul class="list-group">
                    @foreach(\App\Client::all() as $client)
                    <li class="list-group-item">
                        @if(!$client->logo)
                            <span class="badge badge-success pull-left" style="margin-right: 10px;">{{ $client->name[0] }}</span>
                        @else
                            
                        @endif
                        {{ $client->name }}
                        <span class="pull-right">
                            <a href="#">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{ route('clients.edit', ['client' => $client]) }}">
                                <i class="fa fa-pencil"></i>
                            </a>
                            {{-- <a href="#">
                                <i class="fa fa-times"></i>
                            </a> --}}
                        </span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection