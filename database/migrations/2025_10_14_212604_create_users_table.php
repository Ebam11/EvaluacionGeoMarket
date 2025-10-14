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
    $table->string('primer_nombre');
    $table->string('segundo_nombre')->nullable();
    $table->string('primer_apellido');
    $table->string('segundo_apellido')->nullable();
    $table->string('email')->unique();
    $table->string('password');
    $table->foreignId('role_id')->constrained('roles')->onDelete('cascade');
    $table->boolean('activo')->default(true);
    $table->timestamps();
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
