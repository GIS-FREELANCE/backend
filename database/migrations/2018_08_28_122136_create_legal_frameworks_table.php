<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLegalFrameworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legal_frameworks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('level_id')->unsigned()->index();
            $table->foreign('level_id')->references('id')->on('levels');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('legal_frameworks');
    }
}
