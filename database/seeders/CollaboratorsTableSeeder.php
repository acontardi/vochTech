<?php

namespace Database\Seeders;

use App\Models\Collaborators;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollaboratorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Collaborators::factory(100)->create();
    }
}
