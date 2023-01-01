<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPendaftaran extends Model
{
    use HasFactory;

    protected $fillable = ['nama'];

    public function pendaftaranTraining()
    {
        return $this->hasMany(PendaftaranTraining::class);
    }

    public function pendaftaranSertifikasi()
    {
        return $this->hasMany(PendaftaranSertifikasi::class);
    }
}
