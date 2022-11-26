<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Company;
use App\Models\Supervisor;

class It extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function student() {
        return $this->hasOne(Student::class, 'student_id');
    }
    public function company() {
        return $this->hasOne(Company::class, 'company_id');
    }
    public function supervisor() {
        return $this->hasOne(Supervisor::class, 'supervisor_id');
    }
}
