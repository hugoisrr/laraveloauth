<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLanguageRelationToTranslationCourses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('translation_courses', function (Blueprint $table) {
            $table->unsignedBigInteger('language_id');

            $table->foreign('language_id')
                ->references('id')
                ->on('languages')
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
            $table->dropForeign('language_id');
        });
    }
}
