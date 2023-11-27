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
        Schema::create('posts', function (Blueprint $table) {
            $table->id('id_post');
            $table->string('title',50);
            $table->integer('quantity')->nullable();
            $table->timestamp('post_date')->default(now());
            $table->text('description')->nullable();
            $table->dateTime('exp_date')->nullable();
            $table->string('requirement',100)->nullable();
            $table->string('salary',20)->nullable();
            $table->string('address')->nullable();
            $table->string('position')->nullable();
            $table->enum('status',['active','inactive'])->default('active');
            $table->integer('id_emp')->nullable();
            $table->integer('id_major')->nullable();
            $table->integer('traffic_volume')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
