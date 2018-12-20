@if($errors->any())
    @foreach($errors->all() as $error)
    {{-- <div class="alert alert-danger alert-dismissible show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <strong><i class="fa fa-exclamation-triangle"></i></strong> {{ $error }}
    </div> --}}
    {{ Toastr::error($error, 'Error', ["positionClass" => "toast-top-center"]) }}
    @endforeach
@endif