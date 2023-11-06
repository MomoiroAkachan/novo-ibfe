@php
    $ie_fixed_navbar=false;
@endphp

@extends('layouts.master')
@section('title', 'Questionário')
@section('content')
    <div class="flex flex-col">
        <p class="my-4">
            <span class="text-[#90b94e]" title="Este é o seu nome, certo?!">{{ session()->get('userInfo')['nome'] }}</span>, caso tenha alguma dúvida sobre como funciona o teste, siga para
            <a class="text-sky-800 transition-colors hover:text-sky-400" href="{{ route('about') }}"> esta </a>
            página. Lá tem instruções de como fazê-lo.
        </p>
        <div class="flex h-full w-full flex-row justify-between">
            <button class="rounded bg-emerald-500 px-3 py-1 font-semibold text-white transition-all hover:bg-white hover:text-emerald-800 hover:outline hover:outline-2 hover:outline-emerald-500" type="submit">Terminar</button>
            <a title="Voltar à página de perfil" class="rounded bg-orange-500 px-3 py-1 font-semibold text-white transition-all hover:bg-white hover:text-orange-800 hover:outline hover:outline-2 hover:outline-orange-500" href="{{ route('profile.delete') }}">Reiniciar Questionário</a>
        </div>
    </div>
    <form action="{{ route('survey.store') }}" class="mt-4 flex flex-col" method="post">
        @csrf
        <div class="flex h-[65vh] w-full flex-col overflow-y-auto bg-slate-200 rounded-md border border-emerald-400 p-2">
            @foreach ($quest as $item)
                <fieldset class=" bg-white first:mt-0 last:mb-0 my-[1.2rem] flex h-fit w-full flex-col rounded-md border border-slate-300 px-2 py-4 shadow-md">
                    <label class="mb-2 flex flex-row items-center justify-start text-lg text-slate-700" for="q_{{ $item['number'] }}" for="iQ{{ $item['number'] }}">
                        <span class="flex h-[2rem] w-[2rem] flex-col items-center justify-center rounded-full border-none bg-emerald-500 text-sm font-black text-white">{{ $item['number'] }})</span>
                        <span class="ml-4">{{ $item['question'] }}</span>
                        <span class="text-sm text-red-500 font-black">*</span>
                    </label>
                    <select class="w-fit rounded-md border border-slate-300 bg-transparent px-2 py-2 text-xs text-slate-900" id="q_{{ $item['number'] }}" id="iQ{{ $item['number'] }}" name="q_{{ $item['number'] }}" name="iQ{{ $item['number'] }}">
                        <option disabled hidden selected value=""></option>
                        <option value="1">Não me define nem um pouco</option>
                        <option value="2">Não me define bem</option>
                        <option value="3">Me define em partes</option>
                        <option value="4">Me define bem</option>
                        <option value="5">Me define totalmente</option>
                    </select>
                </fieldset>
            @endforeach
        </div>
    </form>
@endsection
