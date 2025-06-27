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
        //
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('status')->nullable();
            $table->string('user_id')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('user_code')->nullable();
            $table->string('phone')->nullable();
            $table->string('image_name')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('profiles');
    }
};
