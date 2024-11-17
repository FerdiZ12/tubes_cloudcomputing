<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAlumni extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'pekerjaan',
        'Mata Kuliah Pemograman',
        'Mata Kuliah Manajemen SI/IT',
        'Mata Kuliah Data dan Informasi',
        'Mata Kuliah Sistem Informasi',
        'Mata Kuliah Rekayasa dan Perancangan Sistem Informasi'
    ];

        public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

        public function usersWithRoleIdOne()
    {
        return $this->hasMany(User::class)->where('role_id', 1);
    }
}
