<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Vendedores extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = 'vendedor';

    protected $fillable = [
        'nome',
        'telefone'
        
    ];
}
