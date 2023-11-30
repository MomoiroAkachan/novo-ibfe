@extends('layouts.master')

@section('title', 'Questionário')

@section('content')
    <div class="question-container">
        @foreach ($questions as $question)
            <h2>{{ $question->question }}</h2>
            <p>{{ $question->number }}</p>
        @endforeach
    </div>
    {{ $questions->links() }}
@endsection
