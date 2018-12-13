@php
    BreadCrumbs::push(Request::path());
    $routes = BreadCrumbs::breadcrumb();
@endphp
<h2>{{ Request::path() }}</h2>

<nav class="breadcrumb">
    @if(sizeof($routes) > 1)
        @for($i = 0; $i < sizeof($routes) - 1; $i++)
            <a class="breadcrumb-item" href="/dashboard">{{ ucfirst($routes[$i]) }}</a>
        @endfor
    @endif
    <span class="breadcrumb-item active">{{ Request::path() }}</span>
</nav>