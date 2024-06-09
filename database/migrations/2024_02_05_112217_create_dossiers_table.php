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
        Schema::create('dossiers', function (Blueprint $table) {
            $table->id();
            $table->string('unqId')->unique();
            $table->string('code', 20)->unique();
            $table->foreignId('departement_id')->constrained('departements')->onDelete('cascade');
            $table->foreignId('annee_id')->constrained('annees')->onDelete('cascade');
            $table->foreignId('typedocument_id')->constrained('type_documents')->onDelete('cascade');
            $table->timestamps();
        });
    }  

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dossiers');
    }
};
