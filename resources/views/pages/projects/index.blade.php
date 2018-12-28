@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                List of Projects
                <span class="pull-right">
                    <a href="{{ route('projects.create') }}" class="btn btn-xs btn-primary"><i class="fa fa-plus"></i> Project</a>
                    <a href="{{ route('clients.create') }}" class="btn btn-xs btn-default"><i class="fa fa-plus"></i> Client</a>
                </span>
            </div>
            <div class="panel-body">
                <ul class="list-group">
                @foreach ($projects as $project)
                    
                    <li class="list-group-item">{{ $project->title }}
                        <div class="btn-group" role="group" aria-label="" style="width: 70%;">
                            <button type="button" class="btn">{{ $project->client->name }}</button>
                            <button type="button" class="btn">{{ $project->created_at->format('F d, Y') }}</button>
                            @php
                                $progress = new Progress($project->tasks);
                            @endphp
                            <button type="button" class="btn btn-primary w-{{ $progress->getValue() }}">
                                {{ $progress->getPercentage() }}
                            </button>
                        </div>
                        <div class="pull-right">
                            <a href="#" class="btn btn-warning btn-xs">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="#" class="btn btn-info btn-xs">
                                <i class="fa fa-pencil-square-o"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-xs">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                        
                    </li>
                    
                @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection