@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            {{-- <h2>Settings</h2> --}}
            {{-- <nav class="breadcrumb">
                <a class="breadcrumb-item" href="{{ route('dashboard') }}">Dashboard</a>
                <span class="breadcrumb-item active">Payroll</span>
            </nav> --}}
            @include('inc.breadcrumbs')
            <div class="dateNtime">
                <span>{{ date('F d, Y') }}</span> <span id="realTime"> </span>
            </div>
        </div>
    </div>
</div>
@endsection