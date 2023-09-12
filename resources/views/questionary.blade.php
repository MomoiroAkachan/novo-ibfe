@extends('layouts.master')

@section('title', 'Questionário')

@section('content')
    <div class="spacer py-2"></div>
    <div class="flex h-fit w-full flex-col">
        <div class="flex h-fit w-full flex-col items-center rounded-t-md bg-[#acca] p-4 text-slate-800">
            <div class="">
                <h1 class="font-serif text-2xl font-bold">Questionário</h1>
            </div>
        </div>
        @foreach ($questions as $i)
            <div class="my-4 flex h-fit w-full flex-col items-start rounded-sm bg-[#acc5] px-6 py-4 text-slate-900">
                <p class="mb-2 font-semibold"><span class="mr-3 font-mono font-bold">{{ $i->number }})</span>{{ $i->question }}<span class="ml-1 text-red-600">*</span></p>
                <form action="#" class="flex h-fit w-full">
                    <input class="w-full" id="q1range" list="tickmarks " max="5" min="1" name="q1range" step="1" type="range" value="1" />
                </form>
            </div>
        @endforeach
    </div>


    {{-- <button class="ie-modal bg-slate-700 px-3 py-1 rounded-md text-slate-100 font-semibold hover:bg-slate-600 transition-colors" data-ie-modal-id='modal1' data-ie-modal-type="toggle">Exibir Modal</button>
    <div style="display: none;" class="modal rounded-md bg-emerald-200 p-4" id="modal1">
        TESTE MODAL
    </div> --}}
@endsection
