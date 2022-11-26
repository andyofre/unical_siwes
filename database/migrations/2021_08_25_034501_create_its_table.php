<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('its', function (Blueprint $table) {
            $table->id();
            $table->boolean('status');
            $table->boolean('approved');
            $table->timestamp('start');
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('company_id')->nullable()->constrained('companies');
            $table->foreignId('supervisor_id')->nullable()->constrained('supervisors');
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
        Schema::dropIfExists('its');
    }
}
