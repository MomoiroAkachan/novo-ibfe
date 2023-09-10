<div class="flex select-none flex-col bg-slate-100 px-[1rem] lg:px-[1.5rem] sm:flex-row" id="ie-navbar">
    <div class="flex flex-row my-[1.5rem] lg:my-[2.3rem]" id="ie-navbar-brand">
        <img alt="" class="w-[3rem] rounded-[100rem] bg-slate-300 p-2" id="ie-navbar-logo" src="https://www.svgrepo.com/show/426835/image.svg" />
        <span id="ie-navbar-title" class="mx-2 text-[2rem] font-semibold">IBFE</span>
    </div>
    <hr class="lg:hidden border-slate-300">
    <div class="spacer lg:flex w-full flex-1 hidden"></div>
    <div class="lg:mt-2 flex flex-row mt-[.5rem] mb-[1rem]" id="ie-navbar-links">
        <ul class="flex list-none flex-row h-fit flex-wrap justify-between w-full" id="ie-navbar-links-list">
            @foreach ([
                ['title' => 'página inicial', 'route' => 'home'],
                ['title' => 'sobre', 'route' => 'about'],
                ['title' => 'questionário', 'route' => 'questionary'],
                ['title' => 'services', 'route' => 'services']
                ] as $item)
                <li class="flex flex-col mx-0">
                    <a style="font-size: 1rem;" class=" text-slate-900" href="{{ route($item['route']) }}">{{$item['title']}}</a>
                    <div class="h-[2px] ie-navbar-route-indicator-{{ (Route::currentRouteName() == $item['route'] ? 'selected' : 'unselected') }}"></div>
                </li>
            @endforeach
        </ul>
    </div>
    {{-- <hr class="lg:hidden border-slate-300"> --}}
</div>
