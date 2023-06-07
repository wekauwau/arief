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
        Schema::create('imunisasis', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->integer('usia_saat_vaksin');
            $table->integer('tinggi');
            $table->integer('berat');
            $table->string('periode');
            $table->foreignId('vaksins_id')->constrained();
            $table->foreignId('data_anaks_id')->constrained();
            $table->foreignId('data_ibus_id')->constrained();
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
        Schema::dropIfExists('imunisasis');
    }
};
