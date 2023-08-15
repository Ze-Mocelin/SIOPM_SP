<?php
// app/Http/Controllers/QuestionnaireController.php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Answer;
use App\Models\NatOcorRespostas;
use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    public function index()
    {
        $question = Question::first(); // Obtenha a primeira pergunta para começar o questionário
        return view('questionnaire.index', compact('question'));
    }

    public function submit(Request $request)
    {
        $selectedAnswerId = $request->input('answer');
        $userAnswers = $request->input('answers');

        if ($selectedAnswerId) {
            $nextQuestionId = NatOcorRespostas::find($selectedAnswerId)->nat_ocor_perguntas_id;
        } else ($userAnswers) {
            // Lógica para processar respostas de campos de texto
            // Aqui, você pode decidir qual é a próxima pergunta com base nas respostas inseridas
            // Por exemplo:
            $nextQuestionId = $this->getNextQuestionIdFromUserAnswers($userAnswers);
        }

        if ($nextQuestionId) {
            return redirect()->route('cadastro190show', $nextQuestionId);
        } else {
            return view('questionnaire.completed');
        }
    }

    public function show(Question $question)
    {
        return view('questionnaire.show', compact('question'));
    }

    // Método para processar as respostas de campos de texto e decidir a próxima pergunta
    private function getNextQuestionIdFromUserAnswers($userAnswers)
    {
        // Lógica para decidir a próxima pergunta com base nas respostas inseridas
        // Retorne o ID da próxima pergunta ou null se o questionário estiver completo
    }
}
