<?php

namespace Database\Seeders;

use App\Models\Bpmm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BpmmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bpmm::create([
            'nome' => "Bpmm Teste",
            'tipo' => 1,
            'id_user' => 1,
        ]);
    }
}
