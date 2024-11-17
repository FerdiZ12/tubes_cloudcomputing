<?php

namespace Database\Seeders;

use App\Models\DataAlumni;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataAlumniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DataAlumni::factory(10)->create();
    }
}
