@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            {{-- <h2>{{ Request::path() }}</h2> --}}
            @include('inc.breadcrumbs')
            <div class="dateNtime">
                <span>{{ date('F d, Y') }}</span> <span id="realTime"> </span>
            </div>
        </div>
    </div>
</div>
@endsection