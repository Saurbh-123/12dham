<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Foundation\Http\Middleware\TrimStrings;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('train', function (Blueprint $table) {
        $table->id();
        $table->string("name",100)->nullable();
        $table->string("train_code",10)->nullable();
        $table->string("train_type",100)->nullable();
        $table->string("reach_time",100)->nullable();
        $table->string("start_time",100)->nullable();
        $table->timestamp("update_time");
        $table->timestamp("create_time");


        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("train");
    }
};
