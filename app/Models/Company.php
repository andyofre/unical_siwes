<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Log;
use App\Models\It;
use App\Models\Student;

class Company extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function log() {
        return $this->hasMany(Log::class);
    }

    public function it() {
        return $this->hasMany(It::class);
    }

    public function student() {
        return $this->hasMany(Student::class);
    }
}
