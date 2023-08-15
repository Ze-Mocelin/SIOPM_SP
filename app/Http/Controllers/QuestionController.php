<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NatOcorPerguntas;
use App\Models\NatOcorRespostas;

class QuestionController extends Controller
{
    public function index()
    {
        //$questions = NatOcorPerguntas::first(); // Obtenha a primeira pergunta para começar o questionário
        return view('pageQuestion');//, compact('questions'));
    }

    public function submit(Request $request)
    {
        // Obtenha a resposta selecionada pelo usuário e o ID da próxima pergunta
        $selectedAnswerId = $request->input('resposta');
        $nextQuestionId = NatOcorRespostas::find($selectedAnswerId)->nat_ocor_respostas_id;

        if ($nextQuestionId) {
            // Se houver próxima pergunta, redirecione para a próxima pergunta
            return redirect()->route('pageQuestionShow', $nextQuestionId);
        } else {
            // Caso contrário, o questionário termina aqui
            return view('pageQuestion');
        }
    }

    public function show(nat_ocor_perguntas $question)
    {
        return view('pageQuestion', compact('question'));
    }
}
