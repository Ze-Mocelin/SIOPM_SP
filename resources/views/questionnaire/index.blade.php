<!-- resources/views/questionnaire/index.blade.php -->

@extends('layouts.app')

@section('content')
    <form action="{{ url('/questionnaire') }}" method="post">
        @csrf
        <h1>Questionário</h1>
        <p>{{ $question->content }}</p>

        @if ($question->type === 'radio')
            @foreach ($question->answers as $answer)
                <div>
                    <input type="radio" name="answer" value="{{ $answer->id }}" id="answer{{ $answer->id }}">
                    <label for="answer{{ $answer->id }}">{{ $answer->content }}</label>
                </div>
            @endforeach
        @elseif ($question->type === 'text')
        {{ dd($question->type) }}
            <div>
                <label for="answer_text">Resposta:</label>
                <input type="text" name="answers[{{ $question->id }}]" id="answer_text">
            </div>
        @endif

        <button type="submit">Próxima Pergunta</button>
    </form>
@endsection
