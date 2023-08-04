<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('telephone');
$table->string('patient_name');
$table->date('patient_dob');
$table->string('patient_idno');
$table->string('patient_address');
$table->string('patient_county');
$table->string('sub_county');
$table->string('patient_email');
$table->string('patient_gender');
$table->string('patient_marital_status');
$table->string('kin_name');
$table->date('kin_dob');
$table->string('kin_idno');
$table->string('kin_gender');
$table->string('kin_relationship');
$table->string('kin_telephone');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
