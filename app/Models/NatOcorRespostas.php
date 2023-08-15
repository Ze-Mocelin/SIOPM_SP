<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NatOcorRespostas extends Model
{
    use HasFactory;

    protected $fillable = [
        'resposta',
        'nat_ocor_perguntas_id'];

    public function perguntas()
    {
        return $this->belongsTo(NatOcorPerguntas::class, 'nat_ocor_perguntas_id');
    }
}
