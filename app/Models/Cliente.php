<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nome',
        'email',
    ];
}
