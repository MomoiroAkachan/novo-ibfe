
<div class="fixed z-[10] w-full shadow-md flex select-none flex-col bg-slate-100 px-[1rem] md:flex-row md:items-center lg:px-[1.5rem]" id="ie-navbar">
    <div class="my-[.5rem] flex h-fit w-fit flex-row items-center lg:my-[.7rem]" id="ie-navbar-brand">
        <span class="mx-2 text-red-900 font-black text-2xl dark:text-slate-200 md:text-3xl" id="ie-navbar-title">IBFE</span>
    </div>

    <hr class="border-slate-300 md:hidden">
    <div class="spacer hidden w-full flex-1 md:flex"></div>
    <div class="mx-[1.5rem] mb-[1rem] mt-[.5rem] flex flex-row flex-nowrap lg:mt-2" id="ie-navbar-links">
        <ul class="flex h-fit w-full list-none flex-row flex-nowrap justify-between" id="ie-navbar-links-list">
            @foreach ([['title' => 'página inicial', 'route' => 'home'], ['title' => 'sobre', 'route' => 'about'], ['title' => 'questionário', 'route' => 'survey.profile.index'], ['title' => 'services', 'route' => 'services']] as $item)
                <li class="mx-0 flex flex-col">
                    <a class="text-slate-900 hover:text-sky-600 dark:text-inherit hover:dark:text-emerald-400" href="{{ route($item['route']) }}">{{ $item['title'] }}</a>
                    <div class="ie-navbar-route-indicator-{{ Route::currentRouteName() == $item['route'] ? 'selected' : 'unselected' }} h-[2px]"></div>
                </li>
            @endforeach
        </ul>
    </div>

    <button title="Alternar tema entre Claro e Escuro (experimental)" class="material-icons text-[2rem] transition opacity-[.7] hover:opacity-[1]" id="theme-switch">brightness_4</button>
</div>
