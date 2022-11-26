<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Company;

class Log extends Model
{
    use HasFactory;

    public function student() {
        return $this->belongsTo(Student::class);
    }

    public function company() {
        return $this->belongsTo(Company::class);
    }
}
