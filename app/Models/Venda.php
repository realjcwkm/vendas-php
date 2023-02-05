<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{    protected $table = 'vendas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'cliente_id',
        'produto_id',
        'quantidade_vendida',
        'valor_total',
        'data_venda',
    ];

    public function cliente(){
        return $this->hasOne(Cliente::class, "id", "cliente_id");
    }

    public function produto(){
        return $this->hasMany(Produto::class, "id", "produto_id");
    }
}
