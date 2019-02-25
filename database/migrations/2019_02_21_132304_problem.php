<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Problem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_problem', function (Blueprint $table) {
            $table->increments('id');
            $table->string('problemId', 191);
            $table->dateTime('problemUpdateTime');
            $table->string('problemCategory');
            $table->text('problemTitle');
            $table->text('selectItem1')->nullable();
            $table->text('selectItem2')->nullable();
            $table->text('selectItem3')->nullable();
            $table->text('selectItem4')->nullable();
            $table->text('selectItem5')->nullable();
            $table->text('selectItem6')->nullable();
            $table->string('answer');
            $table->text('memo')->nullable();
            $table->boolean('yesNoProblemFlag');
            $table->integer('explainId')->nullable()->default(0);
            $table->softDeletes();
            $table->timestamps();

            $table->unique(['problemId', 'problemUpdateTime']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_problem');
    }
}
