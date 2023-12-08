@assets
    @vite(['resources/scss/ie-fwk.scss', 'resources/js/ie-fwk.js'])
@endassets

@php
    $flags['fix'] = !isset($nb_no_fix);
    $flags['show'] = !isset($nb_no_show);
@endphp

<div @class([
    'ie-navbar',
    'sticky' => $flags['fix'],
    'hidden' => !$flags['show'],
    'flex' => $flags['show'],
])>
    <div class="brand">
        <a href="{{ route('home') }}">
            <img alt="Logotipo do IBFE" class="h-[48px]" src="{{ asset('assets/img/logo/logo.svg') }}">
        </a>
    </div>

    <div class="hidden md:flex md:flex-grow">
    </div>
    <div class="menu">
        <ul id="list">
            @foreach ($routes as $page)
                <li>
                    <a href="{{ route($page[1][0]) }}">{{ $page[0] }}</a>
                    <div class="route-indicator-{{ in_array(Route::currentRouteName(), $page[1]) ? 'selected' : 'unselected' }} h-[2px]"></div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
