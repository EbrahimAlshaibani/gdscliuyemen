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
        Schema::create('major_courses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("major_id")->nullable()->unsigned();
            $table->bigInteger("course_id")->nullable()->unsigned();
            $table->foreign("major_id")
            ->references('id')->on('majors')
            ->onDelete('restrict')
            ->onUpdate('restrict');

            $table->foreign("course_id")
            ->references('id')->on('courses')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('major_courses');
    }
};
