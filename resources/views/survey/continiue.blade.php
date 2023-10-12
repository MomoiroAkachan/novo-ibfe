@extends('layouts.master')

@section('title', 'Questionário')

@section('content')
<p>{{ session()->get('userInfo')['nome'] }} ainda está fazendo o teste.</p>
<a href="{{ route('profile.delete') }}">Iniciar novo</a>
<a href="{{ route('survey.index') }}">Continuar</a>
@endsection