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
        Schema::create('employers', function (Blueprint $table) {
            $table->id('id_emp');
            $table->string('name_compn',70)->nullable();
            $table->text('description')->nullable();
            $table->string('logo',100)->nullable();
            $table->string('background',100)->nullable();
            $table->string('slodan',100)->nullable();
            $table->text('treatment')->nullable();
            $table->string('website',100)->nullable();
            $table->string('address',100)->nullable();
            $table->integer('staff_number')->nullable(); 
            $table->integer('id_user')->nullable(); 
            $table->integer('job_quantity')->nullable(); 
            $table->enum('status',['active','inactive']);
            $table->timestamps();
            $table->rememberToken()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employers');
    }
};
