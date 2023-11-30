@php
    $ie_fixed_navbar = false;
@endphp

@extends('layouts.master')
@section('title', 'Questionário')
@section('content')
    <div class="flex flex-col">
        <p class="my-4">
            <span class="text-[#90b94e]" title="Este é o seu nome, certo?!">{{ session()->get('userInfo')['nome'] }}</span>,
            caso tenha alguma dúvida sobre como funciona o teste,
            <a class="text-sky-800 transition-colors hover:text-sky-400" href="{{ route('about') }}">esta página</a>
            possui instruções úteis.
        </p>
    </div>
    <form action="{{ route('survey.store') }}" class="mt-4 flex flex-col" method="post">
        @csrf
        <div class="mt-4 flex h-fit w-full flex-col rounded-md py-2">
            @foreach ($questions as $item)
                <fieldset class="my-[1.2rem] flex h-fit w-full flex-col rounded-sm bg-white px-2 py-4 shadow-lg first:mt-0 last:mb-0">
                    <label class="mb-2 flex flex-row items-center justify-start text-lg text-slate-700" for="q_{{ $item['number'] }}" for="iQ{{ $item['number'] }}">
                        <span class="flex h-[2rem] w-[2rem] flex-col items-center justify-center rounded-full border-none bg-emerald-500 text-sm font-black text-white">{{ $item['number'] }})</span>
                        <span class="ml-4">{{ $item['question'] }}</span>
                        <span class="text-sm font-black text-red-500">*</span>
                    </label>
                    <select class="w-fit rounded-md border border-slate-300 bg-transparent px-2 py-2 text-xs text-slate-900" id="q_{{ $item['number'] }}" id="iQ{{ $item['number'] }}" name="q_{{ $item['number'] }}" name="iQ{{ $item['number'] }}">
                        <option disabled hidden value=""></option>
                        <option selected value="1">Não me define nem um pouco</option>
                        <option value="2">Não me define bem</option>
                        <option value="3">Me define em partes</option>
                        <option value="4">Me define bem</option>
                        <option value="5">Me define totalmente</option>
                    </select>
                </fieldset>
            @endforeach
            <button type="submit" class="ie-button small">Salvar</button>
        </div>
    </form>
    {{ $questions->links() }}
@endsection
