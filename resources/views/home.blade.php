@extends('layouts.app')

@section('content')
<div class="container-fluid" id="dashboard">
    <div class="row">
        <div class="col-12">
            <h2>Dashboard</h2>
            <nav class="breadcrumb">
                <span class="breadcrumb-item active">Welcome <strong>{{ auth()->user()->firstname }}</strong></span>
            </nav>
            <div class="dateNtime">
                <span>{{ date('F d, Y') }}</span> <span id="realTime"> </span>
            </div>
        </div>
    </div>
</div>
@endsection
