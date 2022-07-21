<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Clientes extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $table = 'cliente';
    

    protected $fillable = [
        'nome',
        'cpf',
        'uf',
        'cidade',
        'bairro',
        'cep',
        'rua',
        'endereco',
        'telefone'
    ];

    
}
