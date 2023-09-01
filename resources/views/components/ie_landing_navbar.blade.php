<div class="flex select-none flex-col bg-slate-100 p-[1.5rem] sm:flex-row" id="ie-navbar">
    <div class="flex flex-row" id="ie-navbar-brand">
        <img alt="" class="w-[3rem] rounded-[100rem] bg-slate-300 p-2" id="ie-navbar-logo" src="https://www.svgrepo.com/show/426835/image.svg" />
        <span id="ie-navbar-title" class="mx-2 text-[2rem] font-semibold">IBFE</span>
    </div>
    <div class="spacer flex w-full flex-1"></div>
    <div class="mt-2 flex flex-row sm:mt-0" id="ie-navbar-links">
        <ul class="flex list-none flex-row flex-wrap" id="ie-navbar-links-list">
            @foreach ([
                ['title' => 'home', 'route' => 'home'],
                ['title' => 'sobre', 'route' => 'about'],
                ['title' => 'questionary', 'route' => 'questionary'],
                ['title' => 'services', 'route' => 'services']
                ] as $item)
                <li class="flex flex-col">
                    <a href="{{ route($item['route']) }}">{{$item['title']}}</a>
                    <div class="h-[2px] ie-navbar-route-indicator-{{ (Route::currentRouteName() == $item['route'] ? 'selected' : 'unselected') }}"></div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
