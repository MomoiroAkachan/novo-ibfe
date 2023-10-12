<div class="ie-navbar" id="ibfe-main-navbar">

    <div class="ie-nav-brand">
        <a href="{{ route('home') }}">
            <img alt="Logotipo" class=" h-[1.5rem] md:h-[2.5rem]" src="{{ asset('assets/img/logo.png') }}">
        </a>
    </div>

    <hr class="border-slate-300 md:hidden">

    <div class="hidden flex-shrink md:flex md:flex-grow"></div>

    <div class="ie-nav-menu">
        <ul id="ie-nav-list">
            @foreach ($p_routes as $page)
                <li>
                    <a href="{{ route($page[1][0]) }}">{{ $page[0] }}</a>
                    <div class="ie-nav-route-indicator-{{ in_array(Route::currentRouteName(), $page[1]) ? 'selected' : 'unselected' }} h-[2px]"></div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
