<?php

namespace Database\Seeders;

use App\Models\Positionemployee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionemployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Positionemployee::factory(100)->create();
    }
}
