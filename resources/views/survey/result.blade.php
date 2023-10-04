@extends('layouts.master')

@section('title', 'Questionário')

@section('content')
    <div class=" w-full flex h-fit py-4 px-6 mt-2 flex-col bg-[#c4f596] rounded-md">
        <h2 class="text-2xl font-black text-center text-[#192218ed]">Interpretação dos Resultados</h2>
        <p class="text-sm">Os resultados foram interpretados com base em nossas métricas, e os dados serão exibidos abaixo.</p>
        <p class="text-sm">A escala a seguir, vai de 0 a 5.</p>
    </div>
    <div class="spacer w-full my-4"></div>

    @foreach ($result as $item)
    <div class="w-full flex h-fit py-4 px-6 mt-2 flex-col bg-[#f0ffda] rounded-md my-2">
            <h3 class=" font-bold">{{ $item['title'] }}</h3>
            <p class=" text-sm">Média na Categoria: <span class=" px-1 rounded-md font-bold bg-[#62ff5fc9]">{{ $item['value'] }}</span></p>
            <p class=" text-sm">Descrição: <span class=" px-1 font-bold rounded-md bg-[#9affcdc9]">{{ $item['means'] }}</span></p>
        </div>
    @endforeach
@endsection
