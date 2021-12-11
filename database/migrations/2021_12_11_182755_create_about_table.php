<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->text('intro');
            $table->string('name');
            $table->string('age');
            $table->string('residence');
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->string('happy_clients')->nullable();
            $table->string('working_hours')->nullable();
            $table->string('awards')->nullable();
            $table->string('cv')->nullable();
            $table->jsonb('social_links')->nullable();
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
        Schema::dropIfExists('about');
    }
}
