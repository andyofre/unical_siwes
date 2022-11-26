<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Payment;
use App\Models\Log;
use App\Models\It;
use Illuminate\Support\Facades\Auth;

class Student extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function payment() {
        return $this->hasMany(Payment::class);
    }

    public function company() {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function supervisor() {
        return $this->belongsTo(Supervisor::class, 'supervisor_id');
    }

    public function log() {
        return $this->hasMany(Log::class);
    }

    public function it() {
        return $this->hasMany(It::class);
    }

    public function madePayment() {
        return ($this->payment()->count() > 0) ? true : false;
    }

    public function approvedPayment() {
        return $this->payment()->first();
    }

    public function checkFeePaymentCode($code) {
        return ($this->where('payment_code', $code)->get()) ? true : false;
    }

    public function startedIT() {
        return ($this->it['0']->approved) ? true : false;
    }

    public function isPassport() {
        return ($this->passport) ? true : false;
    }

    public function getPassport() {
        return $this->passport;
    }

    public function isAcceptLetter() {
        return ($this->acceptance_letter) ? true : false;
    }

    public function getAcceptLetter() {
        return $this->acceptance_letter;
    }

    public function getFirstName() {
        $name = $this->full_name;
        $break = explode(' ', $name);
        return $break['0'];
    }

    public function getMiddleName() {
        $name = $this->full_name;
        $break = explode(' ', $name);
        return $break['1'];
    }

    public function getastName() {
        $name = $this->full_name;
        $break = explode(' ', $name);
        return $break['2'];
    }

}
