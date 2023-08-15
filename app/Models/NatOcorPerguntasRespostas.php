<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NatOcorPerguntasRespostas extends Model
{
    use HasFactory;

    protected $table = "";

    protected $fillable = [
        'nat_ocor_perguntas_id',
        'resp',
        'redirect_resp',
        'codigo',
    ];

    public function redirectResp()
    {
        return $this->belongsTo(NatOcorPerguntas::class) ?? false;
    }

    public function question()
    {
        return $this->hasOne(NatOcorPerguntas::class);
    }
}
