<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCourseRelationToTranslationCourses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('translation_courses', function (Blueprint $table) {
            $table->unsignedBigInteger('course_id');

            $table->foreign('course_id')
                ->references('id')
                ->on('courses')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('translation_courses', function (Blueprint $table) {
            $table->dropForeign('course_id');
        });
    }
}
