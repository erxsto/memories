<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memories', function (Blueprint $table) {
            $table->bigIncrements('id_memorie');
            $table->string('texto',30)->nullable();
            $table->string('foto',30)->nullable();
            $table->string('audio',30)->nullable();
            $table->string('video',30)->nullable();
            $table->date('fn');
            $table->integer('id_destinatario');
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
        Schema::dropIfExists('memories');
    }
}
