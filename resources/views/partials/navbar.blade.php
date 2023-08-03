@php
    $menuItems = config('menu');
@endphp

<nav>
    <ul class="d-flex justify-content-center align-items-center h-100">
        @foreach (config('menu') as $menuItem)
        <li class="list-inline-item"><a href="{{ route ($menuItem['route'] ) }}"> {{ $menuItem['name'] }}</a></li>
        @endforeach
    </ul>
</nav>


