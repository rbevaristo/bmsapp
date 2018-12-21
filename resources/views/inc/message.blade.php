@if(session('success'))
    {{ Toastr::success(session('success'), 'Success', ["positionClass" => "toast-top-center"]) }}
@endif

@if(session('error'))
    {{ Toastr::error(session('error'), 'Error', ["positionClass" => "toast-top-center"]) }}
@endif