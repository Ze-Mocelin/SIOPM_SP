<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculocrime extends Model
{
    use HasFactory;

    protected $table = 'veiculocrimes';

    protected $fillable = [
        'placa',
        'marca',
        'modelo',
        'cor',
        'chassis',
        'situacao',
        'cadastro190_id',
        'status'

    ];
    public function cadastro190()
    {
        return $this->hasOne(Cadastro190::class, "id", 'cadastro190_id');
    }
}
