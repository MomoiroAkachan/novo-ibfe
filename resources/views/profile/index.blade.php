@php
    $ie_fixed_navbar=false;
@endphp
@extends('layouts.master')

@section('title', 'Perfil')

@section('content')

    <div class="ie-card mt-[1.4rem] self-center">
        <div class="head">
            <h2 class="title">Questionário <br> Sócio-bio-demográfico</h2>
        </div>

        <hr>

        {{-- <p class="my-2 text-xs"><span class="text-red-500">*</span>Antes de apresentarmos o teste em si, precisamos de algumas informações sobre você.</p> --}}
        <div class="spacer w-full md:h-[1rem]"></div>

        <div class="body">
            <form action="{{ route('profile.store') }}" class="flex flex-col" method="post">
                @csrf
                <div class="flex flex-grow flex-col md:flex-row">
                    <div class="flex flex-1 flex-col">
                        <fieldset>
                            <div class="inputline">
                                <img alt="" draggable="false" src="https://www.svgrepo.com/show/525589/user-rounded.svg" />
                                <input id="test" name="nome" required type="text" />
                                <label for="nome">Seu Nome</label>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="inputline">
                                <img alt="" draggable="false" src="https://www.svgrepo.com/show/525273/city.svg" />
                                <input id="cidade" name="cidade" required type="text" />
                                <label for="cidade">Cidade onde Reside</label>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="inputline">
                                <img alt="" class="" draggable="false" src="https://www.svgrepo.com/show/525435/mention-circle.svg" />
                                <input id="email" name="email" required type="email" />
                                <label for="email">E-mail</label>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="inputline">
                                <img alt="" class="" draggable="false" src="https://www.svgrepo.com/show/525589/user-rounded.svg" />
                                <input id="telefone" name="telefone" required type="text" />
                                <label for="telefone">Telefone</label>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="inputline">
                                <img alt="" class="" draggable="false" src="https://www.svgrepo.com/show/525287/confetti.svg" />
                                <input id="bdata" name="bdata" required type="date" />
                                <label for="bdata">Data de danscimento</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="mx-2 my-[2.5rem] hidden w-[1px] bg-slate-400 md:flex"></div>
                    <div class="flex flex-1 flex-col">
                        <fieldset>
                            <div class="inputline">
                                <img alt="" class="" draggable="false" src="https://www.svgrepo.com/show/501905/gender.svg" />
                                <select id="sexo" name="sexo" required>
                                    <option disabled hidden selected value=""></option>
                                    <option value="male">masculino</option>
                                    <option value="female">feminino</option>
                                    <option value="other">outro</option>
                                </select>
                                <label for="sexo">Sexo</label>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="inputline">
                                <img alt="" class="" draggable="false" src="https://www.svgrepo.com/show/525688/book-bookmark-minimalistic.svg" />
                                <select id="religiao" name="religiao" required>
                                    <option disabled hidden selected value=""></option>
                                    <option value="1">Nada importante</option>
                                    <option value="2">Pouco importante</option>
                                    <option value="3">Mais ou menos importante</option>
                                    <option value="4">Importante</option>
                                    <option value="5">Muito importante</option>
                                </select>
                                <label for="religiao">O quão importante é a religião para você?</label>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="inputline">
                                <img alt="" class="" draggable="false" src="https://www.svgrepo.com/show/526038/money-bag.svg" />
                                <select id="classe" name="classe" required>
                                    <option disabled hidden selected value=""></option>
                                    <option value="1">Classe Baixa</option>
                                    <option value="2">Classe Média-Baixa</option>
                                    <option value="3">Classe Média</option>
                                    <option value="4">Classe Média-Alta</option>
                                    <option value="5">Classe Alta</option>
                                </select>
                                <label for="classe">Você considera sua família como sendo:</label>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="inputline">
                                <img alt="" class="" draggable="false" src="https://www.svgrepo.com/show/525935/graph.svg" />
                                <select id="trabalho" name="trabalho" required>
                                    <option disabled hidden selected value=""></option>
                                    <option value="est">Estudante</option>
                                    <option value="emp">Empresário</option>
                                    <option value="funpub">Funcionário Público</option>
                                    <option value="funpriv">Funcionário Privado</option>
                                </select>
                                <label for="trabalho">Qual é a sua profissão?</label>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="inputline">
                                <img alt="" class="" draggable="false" src="https://www.svgrepo.com/show/526021/map-point-school.svg" />
                                <select id="escolaridade" name="escolaridade" required>
                                    <option disabled hidden selected value=""></option>
                                    <option value="ensfun">Ensino Fundamental</option>
                                    <option value="ensmed">Ensino Médio</option>
                                    <option value="enssup">Ensino Superiror</option>
                                    <option value="pglt">Pós-Graduação (Lato-sensu)</option>
                                    <option value="pgss">Pós-Graduação (Stricto-sensu)</option>
                                    <option value="other">Outro</option>
                                </select>
                                <label for="escolaridade">Grau de escolaridade:</label>
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
                    <p class=" text-red-500 text-xs">{{ $error }}</p>
                @endforeach
            @endisset
        </div>
    </div>
@endsection
