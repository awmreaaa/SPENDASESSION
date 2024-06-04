<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $fillable = ['tanggal', 'id_student', 'keterangan'];

    public function student()
    {
        return $this->belongsTo(Student::class, 'id_student');
    }

    public function daftarAbsen()
    {
        return $this->belongsTo(DaftarAbsen::class, 'keterangan_id');
    }
}

