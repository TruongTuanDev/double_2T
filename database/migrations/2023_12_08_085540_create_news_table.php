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
        Schema::create('news', function (Blueprint $table) {
            $table->id('id_news');
            $table->string('title',50);
            $table->text('content')->nullable();
            $table->string('image',100)->nullable();
            $table->dateTime('create_date')->nullable();
            $table->integer('view');
            $table->enum('status',['active','inactive'])->default('inactive');
            $table->bigInteger('id_emp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
