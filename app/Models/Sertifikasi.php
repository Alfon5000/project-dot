<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertifikasi extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function metode()
    {
        return $this->belongsTo(Metode::class);
    }
}
