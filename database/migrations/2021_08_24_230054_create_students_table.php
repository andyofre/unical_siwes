<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('faculty');
            $table->string('payment_code');
            $table->string('department');
            $table->string('unit');
            $table->string('registration_number');
            $table->string('year');
            $table->string('email');
            $table->string('phone');
            $table->string('bank_name')->nullable();
            $table->string('sort_code')->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('supervisor_id')->nullable()->constrained('supervisors');
            $table->foreignId('company_id')->nullable()->constrained('companies');
            $table->string('password');
            $table->string('passport')->nullable();
            $table->string('acceptance_letter')->nullable();
            $table->boolean('it_isstart')->nullable();
            $table->timestamp('it_start_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
