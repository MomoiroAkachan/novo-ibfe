@extends('layouts.master')

@section('title', 'Questionário')

@section('content')
    <div class="flex w-full flex-col items-center">
        <div class="flex md:w-[65%] flex-col items-center">
            <div class="mt-2 md:px-[10%] md:py-[5%] flex h-fit w-full flex-col rounded-md bg-[#c4f596] px-3 py-2">
                <h2 class="text-center mb-6 text-2xl font-black text-[#192218ed]">Interpretação dos resultados do teste:</h2>
                <p class="text-sm font-medium">Os resultados foram interpretados com base em nossas métricas, e os dados serão exibidos abaixo.</p>
                <p class="text-sm font-medium">A escala a seguir, vai de <span class="text-lg font-bold text-emerald-600">0</span> a <span class="text-lg font-bold text-emerald-600">5</span>.</p>
            </div>
            <div class="spacer my-4 w-full"></div>

            @foreach ($result as $item)
                <div class="my-2 mt-2 flex h-fit w-full flex-col rounded-md {{ ($item[1] >= 4 && $item[1] <= 5 ? 'bg-[#f0ffda]' :  ($item[1] >= 3 && $item[1] <= 3.9 ? 'bg-[#ebf5af]'  : 'bg-[#ffdada]' )) }}  px-6 py-4">
                    <h3 class="font-bold">{{ $item[0] }}</h3>
                    <p class="text-sm">Média na Categoria: <span class="rounded-md bg-[#62ff5fc9] px-1 font-bold">{{ $item[1] }}</span></p>
                    <p class="text-sm">Descrição: <span class="rounded-md bg-[#9affcdc9] px-1 font-bold">{{ $item[2] }}</span></p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
