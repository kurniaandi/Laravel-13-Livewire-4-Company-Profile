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
        Schema::create('heroes', function (Blueprint $table) {
            $table->id();
            $table->string('badge_text')->nullable();
            $table->string('title_top')->nullable();
            $table->string('title_highlight')->nullable();
            $table->string('title_bottom')->nullable();
            $table->string('title_small')->nullable();
            $table->text('description')->nullable();
            $table->string('cta_primary_text')->nullable();
            $table->string('cta_primary_url')->nullable();
            $table->string('cta_secondary_text')->nullable();
            $table->string('cta_secondary_url')->nullable();
            $table->json('trust_items')->nullable();
            $table->string('speed_score')->nullable(); 
            $table->string('leads_increase')->nullable();
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heroes');
    }
};
