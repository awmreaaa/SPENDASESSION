<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeders\StudentSeeder;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nis',
        'nisn',
        'class_id',
        'jenis_kelamin',
        'status',
    ];
    
    protected $guarderd = ['id'];

    public function class()
    {
        return $this->belongsTo(ClassModel::class, 'class_id');
    }

    // Definisi relasi dengan tabel absensi
    public function absen()
    {
        return $this->hasMany(Absensi::class, 'id_student');
    }

}
