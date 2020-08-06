<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfileIdToQuestionsComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('questions_comments', function (Blueprint $table) {
            $table->unsignedBigInteger('profile_id');
            $table->foreign('profile_id')->references('id')->on('profiles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('questions_comments', function (Blueprint $table) {
            $table->dropForeign(['profile_id']);
            $table->dropColumn(['profile_id']);
        });
    }
}
