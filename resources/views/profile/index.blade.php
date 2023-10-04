@extends('layouts.master')

@section('title', 'Perfil')

@section('content')

    <div class="ie-card mt-[1.4rem] self-center">
        <div class="head">
            <h2 class="title">Questionário Sócio-bio-demográfico</h2>
        </div>

        <hr>

        <p class="my-2 text-xs"><span class="text-red-500">*</span>Antes de apresentarmos o teste em si, precisamos de mais algumas informações sobre você.</p>
        <div class="spacer w-full md:h-[2rem]"></div>
        <div class="body">
            <form action="{{ route('profile.store') }}" class="flex flex-col" method="post">
                @csrf
                <div class="flex flex-col md:flex-row">
                    <section class="fsec flex w-full flex-col">
                        <fieldset class="f-nome">
                            <label class="hidden" for="nome">Nome ou Apelido</label>
                            <input id="nome" name="nome" placeholder="Nome ou Apelido" type="text" value="{{ old('nome') }}">
                            @if ($errors->get('nome'))
                                <p class="text-xs text-red-500">{{ $errors->get('nome')[0] }}</p>
                            @endif
                        </fieldset>
                        <fieldset class="f-cidade">
                            <label class="hidden" for="cidade">Cidade Atual</label>
                            <input id="cidade" name="cidade" placeholder="Cidade onde mora" type="text" value="{{ old('cidade') }}">
                            @if ($errors->get('cidade'))
                                <p class="text-xs text-red-500">{{ $errors->get('cidade')[0] }}</p>
                            @endif
                        </fieldset>
                        <fieldset class="f-email">
                            <label class="hidden" for="email">E-mail</label>
                            <input id="email" name="email" placeholder="E-mail" type="email" value="{{ old('email') }}">
                            @if ($errors->get('email'))
                                <p class="text-xs text-red-500">{{ $errors->get('email')[0] }}</p>
                            @endif
                        </fieldset>
                        <fieldset class="f-tel">
                            <label class="hidden" for="telefone">Número de Telefone</label>
                            <input id="telefone" name="telefone" pattern="([0-9]{2})9([0-9]{8})" placeholder="Número de Telefone" type="tel" value="{{ old('telefone') }}">
                            @if($errors->get('telefone'))
                            <p class="text-xs text-red-500">{{ $errors->get('telefone')[0] }}</p>
                        @endif
                        </fieldset>
                        <fieldset class="f-sexo">
                            <label for="sexo">Sexo</label>
                            <select id="sexo" name="sexo" value="{{ old('sexo') }}">
                                <option disabled selected value="">selecione..</option>
                                <option value="mas">Masculino</option>
                                <option value="fem">Feminino</option>
                                <option value="out">Outro</option>
                            </select>
                            @if($errors->get('sexo'))
                            <p class="text-xs text-red-500">{{ $errors->get('sexo')[0] }}</p>
                        @endif
                        </fieldset>
                    </section>

                    <div class="mx-4 my-[2rem] w-[1px] bg-slate-500">
                    </div>

                    <section class="fsec flex w-full flex-col">
                        <fieldset class="f-bdata">
                            <label class="hidden" for="bdata" style="display: block !important;">Nasceu em:</label>
                            <input id="bdata" name="bdata" pattern="\d{4}-\d{2}-\d{2}" placeholder="dia/mês/ano" type="date" value="{{ old('bdata') }}">
                            @if($errors->get('bdata'))
                            <p class="text-xs text-red-500">{{ $errors->get('bdata')[0] }}</p>
                        @endif
                        </fieldset>

                        <fieldset class="f-religiao">
                            <label class="hidden" for="religiao" style="display: block !important;">O quão importante é a religião para sua vida?</label>
                            <select id="religiao" name="religiao" value="{{ old('religiao') }}">
                                <option disabled selected value="">selecione..</option>
                                <option value="5">Muito Importante</option>
                                <option value="4">Importante</option>
                                <option value="3">Neutro</option>
                                <option value="2">Pouco Importante</option>
                                <option value="1">Nenhuma Importância</option>
                            </select>
                            @if($errors->get('religiao'))
                            <p class="text-xs text-red-500">{{ $errors->get('religiao')[0] }}</p>
                        @endif
                        </fieldset>

                        <fieldset class="f-school">
                            <label for="escolaridade">Qual seria seu grau de escolaridade?</label>
                            <select id="escolaridade" name="escolaridade" value="{{ old('escolaridade') }}">
                                <option disabled selected value="">selecione..</option>
                                <option value="ensfun">Ensino Fundamental</option>
                                <option value="ensmed">Ensino Médio</option>
                                <option value="enssup">Ensino Superiror</option>
                                <option value="pglt">Pós-Graduação (Lato-sensu)</option>
                                <option value="pgss">Pós-Graduação (Stricto-sensu)</option>
                                <option value="other">Outro</option>
                            </select>
                            @if($errors->get('escolaridade'))
                            <p class="text-xs text-red-500">{{ $errors->get('escolaridade')[0] }}</p>
                        @endif
                        </fieldset>

                        <fieldset class="f-work">
                            <label for="trabalho">Como você se caracteriza?</label>
                            <select id="trabalho" name="trabalho" value="{{ old('trabalho') }}">
                                <option disabled selected value="">selecione..</option>
                                <option value="est">Estudante</option>
                                <option value="emp">Empresário</option>
                                <option value="funpub">Funcionário Público</option>
                                <option value="funpriv">Funcionário Privado</option>
                            </select>
                            @if($errors->get('trabalho'))
                            <p class="text-xs text-red-500">{{ $errors->get('trabalho')[0] }}</p>
                        @endif
                        </fieldset>

                        <fieldset class="f-class">
                            <label for="classe">Em uma escala de 1 a 7, você identifica sua família como sendo:</label>
                            <select id="classe" name="classe" value="{{ old('classe') }}">
                                <option disabled selected value="">selecione..</option>
                                <option value="1">1 - Classe Baixa</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4 - Classe Média</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7 - Classe Alta</option>
                            </select>
                            @if($errors->get('classe'))
                            <p class="text-xs text-red-500">{{ $errors->get('classe')[0] }}</p>
                        @endif
                        </fieldset>
                    </section>
                </div>
                <div class="spacer flex h-[2rem] w-full"></div>
                <button class="mb-[2rem] self-center rounded bg-emerald-500 px-3 py-1 font-semibold text-white transition-colors hover:bg-white hover:text-emerald-800 hover:outline hover:outline-2 hover:outline-emerald-500"
                    type="submit"><span>Prosseguir</span></button>
            </form>
        </div>
        <div class="footer">
        </div>
    </div>
@endsection
