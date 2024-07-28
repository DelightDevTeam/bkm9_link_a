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
        Schema::create('contact_links', function (Blueprint $table) {
            $table->id();
            $table->string('viber')->nullable();
            $table->string('game_site_link')->nullable();
            $table->string('facebook_page')->nullable();
            $table->string('line')->nullable();
            $table->string('telegram')->nullable();
            $table->string('messager')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_links');
    }
};
