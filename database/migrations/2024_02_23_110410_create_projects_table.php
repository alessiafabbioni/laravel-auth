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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nome del progetto GitHub
            $table->text('description')->nullable(); // Descrizione del progetto (opzionale)
            $table->string('repository_url'); // URL del repository GitHub
            $table->integer('stars')->default(0); // Numero di stelle ricevute
            $table->integer('forks')->default(0); // Numero di fork
            $table->string('language')->nullable(); // Linguaggio di programmazione principale (opzionale)
            $table->timestamp('last_commit_at')->nullable(); // Data e ora dell'ultimo commit (opzionale)
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
        Schema::dropIfExists('projects');
    }
};
