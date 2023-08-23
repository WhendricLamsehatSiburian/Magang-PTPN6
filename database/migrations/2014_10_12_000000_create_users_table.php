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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('persno');
            $table->string('nama');
            $table->string('suskel');
            $table->string('ptkp');
            $table->string('personel');
            $table->string('psubarea');
            $table->string('personel2');
            $table->string('orgunit');
            $table->string('organization');
            $table->string('position');
            $table->string('position2');
            $table->string('costcenter');
            $table->string('costctr');
            $table->string('eegrp');
            $table->string('employee');
            $table->string('esgrp');
            $table->string('employee2');
            $table->string('birthdayplace');
            $table->string('birthdaydate');
            $table->string('parea');
            $table->string('psgroup');
            $table->string('lv');
            $table->string('educationalestablishment');
            $table->string('institue');
            $table->string('tglmasuk');
            $table->string('tglcutitahunan');
            $table->string('tglcutipanjang');
            $table->string('tglmbt');
            $table->string('tglpensiun');
            $table->string('genderkey');
            $table->string('actiontype');
            $table->string('reason');
            $table->string('startdate');
            $table->string('employeestatus');
            $table->string('username');  
            $table->string('email')->unique();
            $table->string('role')->default('karyawan');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
