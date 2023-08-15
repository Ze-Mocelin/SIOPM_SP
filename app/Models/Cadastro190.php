<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadastro190 extends Model
{
    use HasFactory;

    protected $table = 'cadastro190s';

    protected $fillable = [
        'nome',
        'horario',
        'solicitante',
        'anonimo',
        'telefone',
        'cidade',
        'endereco',
        'numero',
        'complemento',
        'bairro',
        'referencia',
        'bpmm',
        'cia',
        'naturezaocorrencia',
        'natureza_ocorrencia_id',
        'policialemperigo',
        'celular_numeroimei',
        'celular_modelo',
        'celular_marca',
        'celular_situacao',
        'veiculo_placa',
        'veiculo_marca',
        'veiculo_modelo',
        'veiculo_cor',
        'veiculo_chassi',
        'veiculo_situacao',
        'pessoas_rg',
        'pessoas_nome',
        'pessoas_situacao',
        'status',
        'visualizacao',
        'situacao',
        'observacao',
        'atendimento',
        'id_user',
        'log',

    ];
    public function naturezaocorrencia_id()
    {
        return $this->hasMany(NaturezaOcorrencia::class, 'natureza_ocorrencia_id', 'id');
    }
}
