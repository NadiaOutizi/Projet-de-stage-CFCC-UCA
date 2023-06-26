<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            $table->text('nom');
            $table->text('type');
            $table->text('Compétences_visées');
            $table->text('Objectifs_formation');
            $table->text('Public_cible');
            $table->text('frais_dossier');
            $table->text('cout_formation');
            $table->text('lieu_formation');
            $table->text('duree_formation');
            $table->text('deroulement_formation');
            $table->text('selection_candidats');
            $table->text('evaluation');
            $table->text('diplome_delivre');
            $table->text('programme')->nullable();
            $table->unsignedBigInteger('encadrant_id');
            $table->unsignedBigInteger('centre_id');
            $table->foreign('encadrant_id')->references('id')->on('encadrants')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('centre_id')->references('id')->on('centres')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offre');
    }
};
