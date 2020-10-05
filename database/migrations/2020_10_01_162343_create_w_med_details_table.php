<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWMedDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('w_med_details', function (Blueprint $table) {
            $table->id();
            $table->integer('id_woker');
            $table->integer('institution')->nullable();
            $table->integer('medic')->nullable();
            $table->float('imc');
            $table->string('obesidad')->nullable();
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
        Schema::dropIfExists('w_med_details');
    }
}
