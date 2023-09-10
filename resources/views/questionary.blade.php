@extends('layouts.master')

@section('title', 'Questionário')

@section('content')
    <button class="ie-modal bg-slate-700 px-3 py-1 rounded-md text-slate-100 font-semibold hover:bg-slate-600 transition-colors" data-ie-modal-id='modal1' data-ie-modal-type="toggle">Exibir Modal</button>
    <div style="display: none;" class="modal h-[240px] w-[320px] rounded-md bg-emerald-200 p-4" id="modal1">
        TESTE MODAL
    </div>
@endsection
