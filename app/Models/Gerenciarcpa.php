<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gerenciarcpa extends Model
{
    use HasFactory;

    protected $table = 'gerenciarcpas';

    protected $fillable = [
        'id',
        'cpas',
        'battalion_id',
        'status',
        'user_id',
    ];

    public function battalion_id()
    {
        return $this->belongsTo(Bpmm::class, "battalion_id", "id")->withDefault([
            'nome' => 'Batalhão não encontrado',
        ]);

    }

    /*public function supervisor()
    {
        return $this->belongsTo(User::class, 'supervisor_id');
    }*/


}
