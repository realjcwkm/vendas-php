<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produto';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nome',
        'quantidade',
        'valor_unitario',
    ];
}
