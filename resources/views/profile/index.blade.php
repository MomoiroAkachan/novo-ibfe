@php
    $ie_no_footer = true;
@endphp


@extends('layouts.master')

@section('title', 'Perfil')

@section('content')

    <div class="ie-card mt-[1.4rem] self-center">

        <div class="head">
            <h2 class="title">Atualização de dados</h2>
        </div>

        <hr>

        <div class="spacer w-full md:h-[1rem]"></div>

        <div class="body">
            <form action="{{ route('profile.store') }}" class="flex flex-col" method="post">
                @csrf
                <div class="flex flex-grow flex-col md:flex-row">
                    <div class="flex flex-1 flex-col">
                        <fieldset>
                            <div class="inputline">
                                <img alt="" draggable="false" src="https://www.svgrepo.com/show/525589/user-rounded.svg" />
                                <input id="test" name="nome" required type="text" value="{{ old('nome') }}" />
                                <label for="nome">Seu Nome</label>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="inputline">
                                <img alt="" draggable="false" src="https://www.svgrepo.com/show/525273/city.svg" />
                                <input id="cidade" name="cidade" required type="text" value="{{ old('cidade') }}" />
                                <label for="cidade">Cidade onde Reside</label>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="inputline">
                                <img alt="" class="" draggable="false" src="https://www.svgrepo.com/show/525435/mention-circle.svg" />
                                <input id="email" name="email" required type="email" value="{{ old('email') }}" />
                                <label for="email">E-mail</label>
                            </div>
                        </fieldset>
                    </div>
                </div>
                
                <div class="spacer flex h-[2rem] w-full"></div>
                <button class="mb-[2rem] self-center rounded bg-emerald-500 px-3 py-1 font-semibold text-white transition-colors hover:bg-white hover:text-emerald-800 hover:outline hover:outline-2 hover:outline-emerald-500"
                    type="submit"><span>Prosseguir</span></button>
            </form>
        </div>
        <div class="footer">
            @isset($errors)
                @foreach ($errors as $error)
                    <p class="text-red-500 text-xs">{{ $error }}</p>
                @endforeach
            @endisset
        </div>
    </div>
@endsection
