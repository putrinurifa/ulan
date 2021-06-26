<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeConvectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convection',function(Blueprint $table){
            $table->id();
            $table->string("jenis")->nullable(false);
            $table->string("jumlah")->nullable(false);
            $table->string("harga")->nullable(false);
            $table->string("no_handphone")->nullable(false);
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
        Schema::dropIfExists('convection');
    }
}
