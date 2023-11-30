@php
    $ie_fixed_navbar = false;
@endphp

@extends('layouts.master')

@section('head')
    @vite(['resources/scss/survey.scss'])
@endsection

@section('title', 'Questionário')

@section('content')
    <section class="survey-header">
        <p class="my-4">
            <span class="text-[#90b94e] capitalize" title="Este é o seu nome, certo?!">{{ session()->get('userInfo')['nome'] }}</span>,
            caso tenha alguma dúvida sobre como funciona o teste,
            <a class="text-sky-800 transition-colors hover:text-sky-400" href="{{ route('about') }}">esta página</a>
            possui instruções úteis.
        </p>
    </section>

    <section class="survey-body">
        @livewire('survey-questions')
    </section>
@endsection
