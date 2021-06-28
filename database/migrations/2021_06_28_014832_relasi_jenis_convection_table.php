<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelasiJenisConvectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    //     Schema::table('convection', function (Blueprint $table) {
    //         $table->dropColumn('jenis');//menghapus kolom jenis
    //         $table->unsignedBigInteger('jenis_id')->nullable(); //menambahkan kolom jenis_id
    //         $table->foreign('jenis_id')->references('id')->on('jenis'); //menambahkan foreign key di kolom jenis_id
    //     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('convection', function (Blueprint $table) {
        //     $table->string('jenis');
        //     $table->dropForeign(['jenis_id']);
        // });
    }
}
