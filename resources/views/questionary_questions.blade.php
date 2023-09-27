@extends('layouts.master')

@section('title', 'Questionário')

@section('content')

    <p>{{ $p_index }}</p>

    <form action="{{ route('survey.next') }}" class="flex flex-col" method="POST">
        @csrf
        @foreach ($quest as $item)
            <p><span class="font-mono">{{ $item['number'] }})- </span>{{ $item['question'] }}</p>
        @endforeach
        <input id="pg_index" name="pg_index" type="hidden" value="{{ $p_index + 1 }}">
        <div class="flex flex-row justify-between w-full">
            @if ($p_index > 0)
                <button class="rounded bg-red-500 px-3 py-1 font-semibold text-white transition-colors hover:bg-white hover:text-red-800 hover:outline hover:outline-2 hover:outline-red-500" type="submit">PREV</button>
            @endif
            
            @if ($p_index < $qmax-1)
                <button class="rounded bg-emerald-500 px-3 py-1 font-semibold text-white transition-colors hover:bg-white hover:text-emerald-800 hover:outline hover:outline-2 hover:outline-emerald-500" type="submit">NEXT</button>
            @endif
        </div>
    </form>
    {{-- <section class="w-[55%]">
        <form action="{{ route('survey.next') }}" class="flex h-fit w-full flex-col" method="{{ $iIndex < 5 ? 'POST' : 'GET' }}">
            @csrf
            <div class="flex h-[10cm] w-full flex-col overflow-y-scroll">
                @foreach ($questions as $q)
                    <div class="my-2 flex h-fit w-full flex-col items-start rounded-sm bg-[#acc5] px-6 py-4 text-slate-900">
                        <p class="mb-2 font-semibold"><span class="mr-3 font-mono font-bold">{{ $q['number'] }})</span>{{ $q['question'] }}<span class="ml-1 text-red-600">*</span></p>
                        <input class="w-full" id="iQuestAns{{ $q['number'] }}" list="tickmarks " max="5" min="1" name="iQuestAns{{ $q['number'] }}" required step="1" type="range" value="1" />
                    </div>
                @endforeach
            </div>

            <input id="iIndex" name="iIndex" type="hidden" value={{ isset($iIndex) ? $iIndex + 1 : 0 }}>
            <div class="card-footer mb-4 flex flex-1 flex-col">
                <button class="w-fit self-end rounded-md bg-sky-500 px-4 py-2 font-semibold text-sky-100 transition-colors hover:bg-sky-400" type="submit">{{ $iIndex > 0 && $iIndex < 5 ? 'Próximo' : 'Enviar Tudo' }}</button>
            </div>
        </form>
    </section> --}}
@endsection
