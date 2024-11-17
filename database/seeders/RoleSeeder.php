<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roledata = [
            ['role' => 'Alumni'],
            ['role' => 'Mahasiswa'],
        ];

        foreach ($roledata as $key => $val){
            Role::create($val);
        }
    }
}
