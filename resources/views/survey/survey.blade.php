@extends('layouts.master')

@section('title', 'Questionário')

@section('content')
    <div class="spacer h-[5rem] w-full"></div>
    <div class="ie-card w-[50%] self-center">
        <div class="head">
            <h2 class="title">Perfil</h2>
        </div>
        <hr>
        <p class="my-2 text-xs"><span class="text-red-500">*</span>Que tal falar mais sobre você?</p>
        <div class="body">
            <form action="{{ route('survey.survey.index') }}" class="flex flex-col" method="get">
                @csrf
                <div class="flex flex-row">
                    <section class="fsec flex w-full flex-col">
                        <fieldset class="f-nome">
                            <label for="nome">Nome ou Apelido</label>
                            <input id="nome" name="nome" placeholder="Nome ou Apelido" required type="text">
                        </fieldset>
                        <fieldset class="f-cidade">
                            <label for="cidade">Cidade Atual</label>
                            <input id="cidade" name="cidade" placeholder="Cidade onde mora" required type="text">
                        </fieldset>
                        <fieldset class="f-email">
                            <label for="email">E-mail</label>
                            <input id="email" name="email" placeholder="E-mail" required type="email">
                        </fieldset>
                        <fieldset class="f-tel">
                            <label for="telefone">Número de Telefone</label>
                            <input id="telefone" name="telefone" pattern="([0-9]{2})9([0-9]{8})" placeholder="Número de Telefone" required type="tel">
                        </fieldset>
                    </section>

                    <div class="w-[1px] mx-4 my-[2rem] bg-slate-500">
                    </div>

                    <section class="fsec flex w-full flex-col">
                        <fieldset class="f-sexo">
                            <label for="sexo">Sexo</label>
                            <select id="sexo" name="sexo" required>
                                <option disabled selected value="">Sexo</option>
                                <option value="mas">Masculino</option>
                                <option value="fem">Feminino</option>
                                <option value="out">Outro</option>
                            </select>
                        </fieldset>
                        <fieldset class="f-bdata">
                            <label for="bdata" style="display: block !important;">Nasceu em:</label>
                            <input id="bdata" name="bdata" required type="date">
                        </fieldset>

                        <fieldset class="f-religiao">
                            <label style="display: block !important;"   for="religiao">O quão importante é a religião para sua vida?</label>
                            <select id="religiao" name="religiao">
                                <option disabled selected value="">selecione...</option>
                                <option value="5">Muito Importante</option>
                                <option value="4">Importante</option>
                                <option value="3">Neutro</option>
                                <option value="2">Pouco Importante</option>
                                <option value="1">Nenhuma Importância</option>
                            </select>
                        </fieldset>
                    </section>
                </div>
                <div class="spacer flex w-full h-[2rem]"></div>
                <button class=" self-center rounded mb-[2rem] bg-emerald-500 px-3 py-1 font-semibold text-white transition-colors hover:bg-white hover:text-emerald-800 hover:outline hover:outline-2 hover:outline-emerald-500" type="submit"><span>Prosseguir</span></button>
            </form>
        </div>
        <div class="footer">

        </div>
    </div>

    {{-- 
<div class="spacer h-[3rem]"></div>
    <div class="flex flex-col items-center">
        <div class="spacer h-[2rem] w-full"></div>
        @if (isset($iIndex))
            <section class="w-[55%]">
                <form action="{{ $iIndex < 5 ? route('survey.next') : route('survey.index') }}" class="flex h-fit w-full flex-col" method="{{ $iIndex < 5 ? 'POST' : 'GET' }}">
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
    </div> --}}
@endsection
