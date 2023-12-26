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
        Schema::create('jobfav_student', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id_post');
            $table->unsignedBigInteger('student_id_stu');
            $table->string('status');
            $table->timestamps();
            $table->foreign('student_id_stu')->references('id_stu')->on('students')->onDelete('cascade');
            $table->foreign('post_id_post')->references('id_post')->on('posts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobfav_student');
    }
};
