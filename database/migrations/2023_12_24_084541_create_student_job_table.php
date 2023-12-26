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
        Schema::create('student_job', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id_post');
            $table->unsignedBigInteger('student_id_stu');
            $table->string('email');
            $table->string('file_cv');
            $table->text('message')->nullable();
            $table->timestamp('date_apply');
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
        Schema::dropIfExists('student_job');
    }
};
