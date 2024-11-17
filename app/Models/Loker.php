<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Loker extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'user_id',
        'nama_perusahaan',
        'lowongan_dicari',
        'berkas_persyaratan',
        'status_lowongan',
        'tanggal_pembukaan',
        'tanggal_penutupan'
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

