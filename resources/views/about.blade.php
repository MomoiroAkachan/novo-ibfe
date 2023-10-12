@extends('layouts.master')

@section('title', 'Sobre')

@section('pre-content')
    <div class="banner flex h-[10rem] w-full items-end justify-center bg-emerald-700 text-black md:h-[15rem]">
        <h1 class="w-fit rounded-t-md bg-white px-[1.5rem] py-[.7rem] text-center text-3xl dark:bg-slate-800 dark:text-slate-300 md:rounded-t-lg md:px-[4rem] md:py-[1.2rem] md:text-3xl text-slate-900">
            Sobre O IBFE-WEB
        </h1>
    </div>
@endsection

@section('content')
    <div class="my-[7.5%] w-full"></div>

    <div class="mb-[7rem]">
        <h3 class=" mb-8 text-center uppercase font-bold text-slate-800 text-[3rem]">A plataforma ibfe</h3>
        <p>
            <strong>O Inventário de Barreiras e Facilitadores ao Empreendedorismo (IBFE for Web)</strong> é uma plataforma de identificação do perfil empreendedor e intraempreendedor por meio do mapeamento dos fatores que inibem ou estimulam as pessoas para a atividade
            empreendedora.
        </p>
        <p class="my-5">
            O IBFE-W <i>(registro BR51202300030)</i> foi idealizado e é administrado pelo Grupo de Pesquisa “Práticas da Administração Eupsíquica, Bases do Comportamento Organizacional e Medidas Psicométricas”  <a href="https://paebcomp.ifnmg.edu.br" class="underline text-sky-800 hover:text-sky-400">PAEBCOMP</a>, liderado pelo Prof. Gustavo Henrique Silva de Souza, do Instituto Federal do Norte de Minas Gerais (IFNMG) - Campus Teófilo Otoni.
        </p>
        <p>
            O IBFE-W é uma ferramenta gratuíta que pode ser amplamente utilizada na avaliação para concessão de empréstimos para a abertura de novos negócios, em treinamentos, em processos seletivos para gestores (p.ex., empresas de modo geral), mapeamento de
            perfil empreendedor entre funcionários (em práticas organizacionais de incentivo ao intraempreendedorismo), incentivo à carreira empresarial a partir de aptidões previamente identificadas (p.ex., Escolas de Negócios, Incubadoras, Aceleradoras) e
            análises entre profissões (p.ex., pesquisa acadêmica) que tendem a levar à abertura de novos negócios, como advogados, médicos, engenheiros, arquitetos, farmacêuticos, contadores, etc.

        </p>
        <p class="mt-5">
            Até o momento atual, a plataforma IBFE conta com o <a class="underline text-sky-700 hover:text-sky-400" href="{{ route('test') }}">Teste de Perfil empreendedor</a>, as demais funcionalidades citadas, serão implementadas em um futuro próximo.
        </p>
    </div>
    <div class="flex h-fit w-full flex-col text-justify text-sm md:text-lg">
        <div class="flex h-fit w-full flex-row justify-between">
            <div class="flex w-[45%] flex-col">
                <h3 class="mb-4 text-left font-semibold">Como utilizar o IBFE-Web?</h3>
                <p class="font-light">
                    Será apresentado um questionário com uma série de itens que representam as dimensões do IBFE. Após a resposta à bateria de itens, o sistema irá gerar o resultado e indicar o seu perfil empreendedor / intraempreendedor, e você poderá
                    guardar, registrar e até compartilhar com outras pessoas.
                </p>
            </div>
            <img class="hidden w-[45%] rounded-lg md:block" src="{{ asset('assets/img/q-man.jpg') }}">
        </div>
    </div>

    <div class="mr-1 flex h-fit w-full flex-1 flex-row items-center justify-center py-4 md:px-[8%] lg:px-[12%]">
        <span class="mr-[.5rem] flex flex-col items-center justify-center text-[6cm] text-[#9fdf]">{</span>
        <p class="mt-4 flex h-fit flex-grow-0 text-sm font-light">
            Leia atentamente a lista de comportamentos e características descritos no formulário de aplicação, considerando seu conteúdo. Utilizando a escala de resposta tipo Likert de 5 (cinco) pontos, variando de 1 = Não me descreve em absoluto a 5 =
            Descreve-me totalmente; marque o número em cada item para indicar em que medida você considera que a frase lhe descreve.
        </p>
        <span class="ml-[.5rem] flex items-center justify-center text-[6cm] text-[#9fdf]">}</span>
    </div>

    <div class="mb-10 mr-1 flex w-full flex-row justify-between">
        <img alt="" class="hidden w-[45%] rounded-lg md:block" src="{{ asset('assets/img/s-guy.jpeg') }}">
        <div class="space hidden h-full px-4 lg:flex"></div>
        <div class="flex w-[45%] flex-col text-sm">
            <h3 class="mb-4 text-right text-sm font-semibold md:text-lg">O Resultado</h3>
            <p class="text-sm font-light md:text-lg">
                Após a conclusão do questionário, a aplicação usará de alguns critérios antes de retornar um resultado de forma definitiva ao usuário, com base em diversos fatores abordados neste <a href="http://dx.doi.org/10.51859/amplla.aet474.1121-1" class="underline text-sky-700 hover:text-sky-400">e-book</a>, o qual foi usado como base teórica para o desenvolvimento da aplicação. Mapeando, assim, o seu perfil empreendedor.
            </p>
        </div>

    </div>
    <div class="my-[12.5%] w-full"></div>

    <div class="flex h-fit w-full flex-col items-center justify-center bg-[#d0f3ae] px-[1.5rem] py-[1rem] dark:bg-emerald-500 rounded-md shadow-md">
        <h3 class="mb-4 text-2xl font-semibold">Nossa Equipe</h3>

        <div class="flex h-full w-full flex-row overflow-x-auto">
            @foreach ([['Gustavo de Souza', asset('assets/img/gustavo.png')], ['Ana Cláudia Gonçalves de Sá Jardim', asset('assets/img/ana-claudia.jpg')], ['Lara do Santos Prates', asset('assets/img/lara.jpg')], ['Filipe Lemes Ramalho', asset('assets/img/filipe.jpg')]] as $people)
                <div class="mx-[.3rem] h-full w-fit flex-shrink-0 rounded-md first:ml-0 last:mr-0">
                    <div class="h-[2.7cm] w-[2.7cm] overflow-hidden md:h-[3cm] md:w-[3cm] lg:h-[5cm] lg:w-[5cm] border border-slate-900 rounded-md">
                        <img alt="Imagem" src="{{ $people[1] }}" title="{{ $people[0] }}">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
