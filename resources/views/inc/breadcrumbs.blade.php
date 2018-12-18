<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">{{ ucfirst(Request::path()) }}</h1>
        @if(Request::path() != 'dashboard')
        <ul class="breadcrumb">
            <li><a class="breadcrumb-item" href="/dashboard">Dashboard</a></li>
            @foreach($segments = request()->segments() as $index => $segment)
            <li><a class="breadcrumb-item" href="{{ url(implode(array_slice($segments, 0, $index+1), '/')) }}">
                {{ isset($model) && $index === count($segments) -1 ? $model->title : ucfirst($segment) }}
            </a></li>
            @endforeach
        </ul>
        @endif
    </div>
</div>
