<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'loker_id'
    ];

        public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

        public function loker()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
