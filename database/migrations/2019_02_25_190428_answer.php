<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Answer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_answer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('userId', 191);
            $table->dateTime('answerDateTime');
            $table->string('problemId', 191);
            $table->boolean('result');
            $table->string('answer');
            $table->softDeletes();
            $table->timestamps();

            $table->unique([ 'userId', 'answerDateTime', 'problemId']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_answer');
    }
}
