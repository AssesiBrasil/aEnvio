<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'tabclientesenvio';

   protected $fillable = [
        'nome',
        'telefone',
        'municipio',
        'email',
        'cargo',
        'dtAtualiza',
        'obs',
    ];

}
