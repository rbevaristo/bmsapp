@extends('layouts.app')

@section('content')
<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">
            Settings
        </div>
        <div class="panel-body">
            <div id="settings" role="tablist" aria-multiselectable="true">
                @include('inc.accordion.department')
            </div>
        </div>
    </div>
</div>
@include('inc.modal.position')
@include('inc.modal.department')
@endsection

@include('inc.bootstrap-select')