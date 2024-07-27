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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->nullable()->unique();
            $table->string('email')->nullable()->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('profile', 2000)->nullable();
            $table->string('profile_mime')->nullable();
            $table->integer('profile_size')->nullable();

            $table->string('address')->nullable();
            $table->string('kpay_no')->nullable()->default('N/A');
            $table->string('cbpay_no')->nullable()->default('N/A');
            $table->string('wavepay_no')->nullable()->default('N/A');
            $table->string('ayapay_no')->nullable()->default('N/A');
            $table->integer('balance')->default(0);
            $table->integer('status')->default(0);
            $table->unsignedBigInteger('agent_id')->default(1);
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('agent_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};