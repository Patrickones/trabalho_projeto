<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Produtos_pedido extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use HasFactory;
     
    protected $table = 'Produtos_pedido';

    protected $fillable = [
        'pedido_id',
        'produto_id'
    ];

    public function Pedido()
    {
        return $this->belongsTo(PedidosModel::class, 'pedido_id');
    }

    public function Produto()
    {
        return $this->belongsTo(ProdutosModel::class, 'produto_id');
    }
}
