<!-- resources/views/questionnaire/show.blade.php -->

@extends('layouts.app')

@section('content')
    <form action="{{ url('/questionnaire') }}" method="post">
        @csrf
        <h1>Questionário</h1>
        <p>{{ $question->content }}</p>
        @foreach ($question->answers as $answer)
            <div>
                <input type="radio" name="answer" value="{{ $answer->id }}" id="answer{{ $answer->id }}">
                <label for="answer{{ $answer->id }}">{{ $answer->content }}</label>
            </div>
        @endforeach
        <button type="submit">Próxima Pergunta</button>
    </form>
@endsection
