@extends('layouts.master')

@section('title', 'Questionário')

@section('pre-content')
    <div class="flex h-fit w-full flex-col">
        <div class="mx-4 flex h-fit flex-1 flex-col items-center rounded-t-md bg-[#acca] p-4 text-slate-800 dark:bg-[#89a2] dark:text-inherit">
            <h1 class="font-serif text-[2rem] font-bold">Questionário</h1>
        </div>
    </div>
@endsection

@section('content')
    <div class="flex flex-col items-center">
        <div class="spacer h-[2rem] w-full"></div>
        @if (isset($iIndex))
            <section class="w-[55%]">
                <form action="{{ ($iIndex < 5 ? route('survey.next') : route('survey.index')) }}" class="flex h-fit w-full flex-col" method="{{ ($iIndex < 5 ? 'POST' : 'GET') }}">
                    @csrf
                    <div class="overflow-y-scroll flex flex-col w-full h-[10cm]">
                    @foreach ($questions as $q)
                        <div class="my-2 flex h-fit w-full flex-col items-start rounded-sm bg-[#acc5] px-6 py-4 text-slate-900">
                            <p class="mb-2 font-semibold"><span class="mr-3 font-mono font-bold">{{ $q['number'] }})</span>{{ $q['question'] }}<span class="ml-1 text-red-600">*</span></p>
                            <input required class="w-full" id="iQuestAns{{ $q['number'] }}" list="tickmarks " max="5" min="1" name="iQuestAns{{ $q['number'] }}" step="1" type="range" value="1" />
                        </div>
                    @endforeach
                </div>

                    <input id="iIndex" name="iIndex" type="hidden" value={{ isset($iIndex) ? $iIndex + 1 : 0 }}>
                    <div class="card-footer mb-4 flex flex-1 flex-col">
                        <button class="w-fit self-end rounded-md bg-sky-500 px-4 py-2 font-semibold text-sky-100 transition-colors hover:bg-sky-400" type="submit">{{ ($iIndex > 0 && $iIndex < 5 ? 'Próximo' : 'Enviar Tudo') }}</button>
                    </div>
                </form>
            </section>
        @else
            <section class="flex h-full w-full flex-col items-center justify-center">
                <form action="{{ route('survey.next') }}" class="flex h-fit w-fit flex-col rounded-lg border border-gray-300 px-[3rem] shadow-xl" method="post">
                    @csrf
                    <div class="card-header mx-[.5rem] mt-8 flex flex-1 flex-col text-center">
                        <h1 class="text-[1.5rem]">Quem é você?</h1>
                    </div>
                    <hr class="my-8">
                    <div class="card-body flex flex-1 flex-col">
                        <fieldset class="flex flex-1 flex-col" id="iNameField">
                            <label class="mx-5 text-sm" for="iName">Nome Completo</label>
                            <input class="flex-1 rounded-md border border-gray-500 px-[.5rem] py-[.3rem] text-base outline-none transition-all focus:outline-2 focus:outline-emerald-400 dark:bg-[#aaa2]" id="iName" name="iName" placeholder="João Silva..."
                                required type="text">
                        </fieldset>

                        <div class="h-3"></div>

                        <fieldset class="flex flex-1 flex-col" id="iBirthField">
                            <label class="mx-5 text-sm" for="iBirth">Data de Nascimento</label>
                            <input class="flex-1 rounded-md border border-gray-500 px-[.5rem] py-[.3rem] text-base outline-none transition-all focus:outline-2 focus:outline-emerald-400 dark:bg-[#aaa2]" id="iBirth" name="iBirth" required type="date">
                        </fieldset>

                        <div class="spacer flex h-[2rem] w-full"></div>
                        <input name="iIndex" type="hidden" value={{ isset($iIndex) ? $iIndex + 1 : 0 }}>
                    </div>
                    <div class="card-footer mb-4 flex flex-1 flex-col">
                        <button class="flex-1 rounded-md bg-sky-500 px-4 py-2 font-semibold text-sky-100 transition-colors hover:bg-sky-400" type="submit">Enviar</button>
                    </div>
                </form>
            </section>
        @endif
    </div>
@endsection
