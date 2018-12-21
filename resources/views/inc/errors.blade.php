@if($errors->any())
    @foreach($errors->all() as $error)
    {{ Toastr::error($error, 'Error', ["positionClass" => "toast-top-center"]) }}
    @endforeach
@endif