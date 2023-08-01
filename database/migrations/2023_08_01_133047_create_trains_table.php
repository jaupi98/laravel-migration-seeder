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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 40);
            $table->string('stazione_partenza' ,100);
            $table->string('stazione_arrivo', 100);
            $table->date('data_partenza');
            $table->date('data_arrivo');
            $table->timestamp('orario_partenza');
            $table->time('orario_arrivo');
            $table->string('codice_treno', 7);
            $table->integer('n_carrozze');
            $table->boolean('in_orario')->dafault(false);
            $table->time('tempo_ritardo')->nullable();
            $table->boolean('cancellato')->dafault(false);
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
        Schema::dropIfExists('trains');
    }
};
