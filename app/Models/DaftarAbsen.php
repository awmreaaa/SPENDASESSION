<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarAbsen extends Model
{
    use HasFactory;

    protected $table = 'daftar_absen'; // Menentukan nama tabel secara eksplisit

    protected $fillable = ['name'];
}
