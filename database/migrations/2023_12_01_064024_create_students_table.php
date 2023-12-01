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
        Schema::create('students', function (Blueprint $table) {
            $table->id('id_stu');
            $table->string('university',100)->nullable();
            $table->string('address',100)->nullable();
            $table->string('photo')->nullable();
            $table->string('birthday',100)->nullable();
            $table->string('major')->nullable();
            $table->text('description')->nullable();
            $table->integer('id_user')->nullable(); 
            $table->timestamps();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
