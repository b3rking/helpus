<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('fullname', 150);
            $table->string('adress', 100);
            $table->integer('tel');
            $table->string('story');
            $table->integer('etat_id');
            $table->string('ecocash_name', 100)->nullable();
            $table->integer('ecocash_number')->nullable();
            $table->string('lumicash_name', 100)->nullable();
            $table->integer('lumicash_number')->nullable();
            $table->string('bank_name', 100)->nullable();
            $table->integer('bank_number')->nullable();
            $table->string('pic_path');
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
        Schema::dropIfExists('patients');
    }
}
