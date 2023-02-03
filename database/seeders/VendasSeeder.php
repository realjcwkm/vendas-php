<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class VendasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vendas')->insert([
            'cliente_id' => 2,
            'produto_id' => 3,
            'quantidade_vendida' => 4,
            'valor_total' => 59.96,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('vendas')->insert([
            'cliente_id' => 1,
            'produto_id' => 2,
            'quantidade_vendida' => 3,
            'valor_total' => 19.98,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('vendas')->insert([
            'cliente_id' => 3,
            'produto_id' => 1,
            'quantidade_vendida' => 5,
            'valor_total' => 100.00,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
