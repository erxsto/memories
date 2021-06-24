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
            $table->string('num_h',30);
            $table->string('imagen',30)->nullable();
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
            $table->dropColumn('imagen');
        });
    }
}
