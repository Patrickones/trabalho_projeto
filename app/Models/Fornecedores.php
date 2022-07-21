<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class Fornecedores extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use HasFactory;
    
    protected $table = 'Fornecedores';

    protected $fillable = [
        'nome',
        'cnpj',
        'telefone',
        'email'
    ];
    
}


