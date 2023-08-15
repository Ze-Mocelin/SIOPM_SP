<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\NatOcorPerguntas;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function getQuestion(Request $request)
    {
        $request->validate([
            'question'=> 'required'
        ]);
        $question = NatOcorPerguntas::findOrFail($request->get('question', null));
        return response()->json($question);
    }
}
