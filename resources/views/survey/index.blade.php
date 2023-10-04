@extends('layouts.master')

@section('title', 'Questionário')

@section('content')
    <div class="spacer h-[3rem] w-full"></div>
    <p>{{ session()->get('nome') }}, caso tenha alguma dúvida sobre como funciona o teste? Siga para <a class=" text-sky-800 transition-colors hover:text-sky-400" href="{{ route('about') }}">esta</a> página!</p>
    <form action="{{ route('survey.store') }}" class="flex flex-col" method="post">
        @csrf
        <div class="flex my-[2rem] border border-orange-400 rounded-md p-2 flex-col w-full h-[65vh] overflow-y-auto">
            @foreach ($quest as $item)
                <fieldset class="my-[.7rem] flex h-fit w-full flex-col rounded-md border border-slate-300 px-2 py-4 shadow-md">
                    <label for="q_{{ $item['number'] }}" class="mb-2 flex flex-row items-center justify-start text-lg text-slate-700" for="iQ{{ $item['number'] }}">
                        <span class="flex h-[2rem] w-[2rem] flex-col items-center justify-center rounded-full border-none bg-emerald-500 text-sm font-black text-white">{{ $item['number'] }})</span>
                        <span class="ml-4">{{ $item['question'] }}</span>
                        <span class="text-sm text-red-500">*</span>
                    </label>
                    <select id="q_{{ $item['number'] }}" name="q_{{ $item['number'] }}" class="w-fit rounded-md border border-slate-300 bg-transparent px-2 py-2 text-xs text-slate-900" id="iQ{{ $item['number'] }}" name="iQ{{ $item['number'] }}">
                        <option disabled value="">selecione..</option>
                        <option value="1">Discordo</option>
                        <option value="2">Discordo pouco</option>
                        <option value="3">Nem Concordo, Nem Discordo</option>
                        <option value="4">Concordo pouco</option>
                        <option selected value="5">Concordo</option>
                    </select>
                </fieldset>
            @endforeach
        </div>

        <div class="flex h-full w-full flex-row justify-between">
            <button class="rounded bg-emerald-500 px-3 py-1 font-semibold text-white transition-colors hover:bg-white hover:text-emerald-800 hover:outline hover:outline-2 hover:outline-emerald-500" type="submit">Avançar</button>
        </div>
    </form>
@endsection
