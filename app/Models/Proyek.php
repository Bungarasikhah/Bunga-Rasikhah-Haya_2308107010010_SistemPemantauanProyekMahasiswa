<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    protected $table = 'proyeks'; // sesuaikan dengan nama tabel kamu di database
    protected $fillable = ['judul', 'mahasiswa', 'status', 'periode_mulai', 'periode_selesai'];
}
