<?php

namespace Database\Seeders;

use App\Models\Cargos;
use App\Models\Positions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Positions::factory(10)->create();
    }
}
