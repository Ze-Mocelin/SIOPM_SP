<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    protected $table = 'publications';

    protected $fillable = [
        'title',
        'description',
        'file_folder',
        'folder',
        'content',
        'file_path',
        'file_folder',
        'file_type',
        'viewed_at',
        'id_user',
        'type',
        'data_inicio',
        'data_termino',
        'tags',
    ];
}
