<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cliente')->insert([
            'nome' => 'Joao',
            'email' => 'joao@gmail.com',
        ]);
        DB::table('cliente')->insert([
            'nome' => 'Maria',
            'email' => 'maria@gmail.com',
        ]);
        DB::table('cliente')->insert([
            'nome' => 'Jose',
            'email' => 'jose@gmail.com',
        ]);
    }
}
