<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produto')->insert([
            'nome' => 'bola',
            'quantidade' => 20,
            'valor_unitario' => 20.0,
        ]);
        DB::table('produto')->insert([
            'nome' => 'raquete',
            'quantidade' => 50,
            'valor_unitario' => 9.99,
        ]);
        DB::table('produto')->insert([
            'nome' => 'rede',
            'quantidade' => 5,
            'valor_unitario' => 14.99,
        ]);
    }
}
