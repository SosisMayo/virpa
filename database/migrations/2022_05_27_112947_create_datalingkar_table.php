<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datalingkar', function (Blueprint $table) {
            $table->id();
            //$table->bigInteger('pasien_id')->unsigned()->index();
            $table->foreignId('pasien_id')->reference('id')->on('pasien');
            $table->string('path_gambar');
            $table->string('path_gambar_fire');
            $table->string('lingkar_kepala');
            $table->string('status_lingkar');
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
        Schema::dropIfExists('datalingkar');
    }
};
