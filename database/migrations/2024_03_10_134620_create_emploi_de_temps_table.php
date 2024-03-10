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
        Schema::create('emploi_de_temps', function (Blueprint $table) {
            $table->id();
            $table->text('titre');
            $table->text('pdf');
            $table->unsignedBigInteger('id_emploi_filiere');
            $table->foreign('id_emploi_filiere')->references('id')->on('filieres')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('emploi_de_temps');
    }
};
