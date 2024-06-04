<?php

namespace App\Models;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    protected $table = 'class';

    public function students()
    {
        return $this->hasMany(Student::class, 'class_id','class_name');
    }

   
}
