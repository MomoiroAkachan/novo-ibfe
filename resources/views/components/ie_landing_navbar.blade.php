<div class="flex select-none flex-col md:flex-row md:items-center dark:bg-inherit dark:text-inherit bg-slate-100 px-[1rem] lg:px-[1.5rem]" id="ie-navbar">
    <div class="flex flex-row my-[1.5rem] lg:my-[2.3rem] w-fit h-fit items-center" id="ie-navbar-brand">
        <img alt="logotipo ibfe" class="w-[3rem] rounded-[100rem] dark:bg-[#eee3] bg-slate-300 p-2" id="ie-navbar-logo" src="https://www.svgrepo.com/show/426835/image.svg" />
        <span id="ie-navbar-title" class="mx-2 text-3xl lg:text-5xl dark:text-slate-200 font-semibold">IBFE</span>
    </div>
    <hr class="md:hidden border-slate-300">
    <div class="spacer md:flex w-full flex-1 hidden"></div>
    <div class="lg:mt-2 flex flex-nowrap flex-row mt-[.5rem] mb-[1rem] mx-[1.5rem]" id="ie-navbar-links">
        <ul class="flex list-none flex-row h-fit flex-nowrap justify-between w-full" id="ie-navbar-links-list">
            @foreach ([
                ['title' => 'página inicial', 'route' => 'home'],
                ['title' => 'sobre', 'route' => 'about'],
                ['title' => 'questionário', 'route' => 'questionary'],
                ['title' => 'services', 'route' => 'services']
                ] as $item)
                <li class="flex flex-col mx-0">
                    <a class="text-slate-900 dark:text-inherit hover:text-sky-600 hover:dark:text-emerald-400 text-base" href="{{ route($item['route']) }}">{{$item['title']}}</a>
                    <div class="h-[2px] ie-navbar-route-indicator-{{ (Route::currentRouteName() == $item['route'] ? 'selected' : 'unselected') }}"></div>
                </li>
            @endforeach
        </ul>
    </div>
    {{-- <hr class="lg:hidden border-slate-300"> --}}
</div>
