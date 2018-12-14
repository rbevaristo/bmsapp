@if(session('success'))
    <div class="alert alert-success alert-dismissable">
        {{ session('success') }}
    </div>
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissable">
        {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
    </div>
@endif