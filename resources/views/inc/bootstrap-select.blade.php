@section('css')
<link rel="stylesheet" href="{{ asset('./vendor/bootstrap-select/bootstrap-select.min.css') }}">
@endsection

@section('js')

<script src="{{ asset('./vendor/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script>
    $('select').selectpicker();
</script>
@endsection