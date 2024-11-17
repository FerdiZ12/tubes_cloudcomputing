<?php

namespace Database\Factories;

use App\Models\DataAlumni;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class DataAlumniFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DataAlumni::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $mataKuliahOptions = ['A','AB', 'B','BC', 'C']; 
         
        
        // Dapatkan satu pengguna dengan role_id = 1 secara acak
        $userWithRoleIdOne = User::where('role_id', 1)->inRandomOrder()->first();

        $nilaiPemrograman = $this->faker->randomElement($mataKuliahOptions);
        $nilaiManajemenSI = $this->faker->randomElement($mataKuliahOptions);
        $nilaiDataInformasi = $this->faker->randomElement($mataKuliahOptions);
        $nilaiSistemInformasi = $this->faker->randomElement($mataKuliahOptions);
        $nilaiRekayasaSistemInformasi = $this->faker->randomElement($mataKuliahOptions);

        // Menentukan pekerjaan berdasarkan nilai mata kuliah
        if ($nilaiPemrograman == 'A') {
            $pekerjaan = 'Programmer';
        } elseif ($nilaiSistemInformasi == 'A') {
            $pekerjaan = 'ERP Consultant';
        } elseif ($nilaiManajemenSI == 'A' || $nilaiManajemenSI == 'AB') {
            $pekerjaan = 'Manager Project';
        } elseif ($nilaiDataInformasi == 'A') {
            $pekerjaan = 'Data Analyst';
        } else {
            $pekerjaan = 'IT Analyst';
        }

        return [
            'user_id' => $userWithRoleIdOne->id,
            'pekerjaan' => $pekerjaan,
            'Mata Kuliah Pemograman' => $nilaiPemrograman,
            'Mata Kuliah Manajemen SI/IT' => $nilaiManajemenSI,
            'Mata Kuliah Data dan Informasi' => $nilaiDataInformasi,
            'Mata Kuliah Sistem Informasi' => $nilaiSistemInformasi,
            'Mata Kuliah Rekayasa dan Perancangan Sistem Informasi' => $nilaiRekayasaSistemInformasi,
        ];
    }
}






