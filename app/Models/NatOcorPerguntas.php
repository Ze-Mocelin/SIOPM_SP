<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NatOcorPerguntas extends Model
{
    use HasFactory;

    protected $table = 'nat_ocor_perguntas';

    protected $fillable = [
        'naturezaocorrencia',
        'prioridade',
        'tipo',
        'pergunta',
        'codigo',
        'status',
        'id_user',
        'descricao',
        'texto_auxiliar',

    ];
    public function respostas()
    {
        return $this->hasMany(NatOcorRespostas::class, 'nat_ocor_perguntas_id');
    }

}
