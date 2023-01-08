<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelaksanaanTraining extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static $status = ['Belum Mulai', 'Sedang Dilaksanakan', 'Selesai'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function training()
    {
        return $this->belongsTo(Training::class);
    }
}
