<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Payment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function student() {
        return $this->belongsTo(Student::class, 'student_id');
    }
}
