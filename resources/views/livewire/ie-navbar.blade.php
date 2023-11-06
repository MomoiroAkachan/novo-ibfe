<div @class(['ie-navbar', 'sticky' => $ie_fix_navbar, 'hidden' => !$ie_show_navbar, 'flex' => $ie_show_navbar])>
    <div class="brand">
        <a href="{{ route('home') }}">
            <img alt="Logotipo do IBFE" class="w-[2cm] md:w-[1.7cm]" src="{{ asset('assets/img/logo.svg') }}">
        </a>
    </div>
    <hr class="border-slate-300 md:hidden">
    <div class="hidden md:flex md:flex-grow">
    </div>
    <div class="menu">
        <ul id="list">
            @foreach ($p_routes as $page)
                <li>
                    <a href="{{ route($page[1][0]) }}">{{ $page[0] }}</a>
                    <div
                        class="route-indicator-{{ in_array(Route::currentRouteName(), $page[1]) ? 'selected' : 'unselected' }} h-[2px]"></div>
                </li>
            @endforeach
        </ul>
    </div>
</div>

