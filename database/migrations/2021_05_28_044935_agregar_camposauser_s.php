<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarCamposauserS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('app',30);
            $table->string('apm',30);
            $table->date('fn');
            $table->string('telefono',14)->nullable();
            $table->string('tip_usu',30);
            $table->string('num_h',30)->nullable();
            $table->string('num_t',30)->nullable();
            $table->string('num_i',30)->nullable();
            $table->string('num_f',30)->nullable();
            $table->string('num_a',30)->nullable();
            $table->string('num_v',30)->nullable();
            $table->binary('imagen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('app');
            $table->dropColumn('apm');
            $table->dropColumn('fn');
            $table->dropColumn('telefono');
            $table->dropColumn('tip_usu');
            $table->dropColumn('num_h');
            $table->dropColumn('num_t');
            $table->dropColumn('num_i');
            $table->dropColumn('num_f');
            $table->dropColumn('num_a');
            $table->dropColumn('num_v');
            $table->dropColumn('imagen');
        });
    }
}
