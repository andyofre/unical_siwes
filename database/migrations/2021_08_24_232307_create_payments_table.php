<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('amount');
            $table->string('invoiceReference');
            $table->string('invoiceStatus');
            $table->string('description');
            $table->string('customerName');
            $table->string('customerEmail');
            $table->string('expiryDate');
            $table->string('accountNumber');
            $table->string('transactionReference')->nullables();
            $table->string('accountName');
            $table->string('bankName');
            $table->string('bankCode');
            $table->boolean('approved')->default(0);
            $table->foreignId('student_id')->nullable()->constrained('students');
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
        Schema::dropIfExists('payments');
    }
}
