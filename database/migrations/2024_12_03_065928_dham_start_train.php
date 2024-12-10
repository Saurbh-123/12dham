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
        Schema::create('dham_start_train', function (Blueprint $table) {
         $table->id();
         $table->unsignedInteger("dham_start_id");
         $table->unsignedInteger("train_id");
         $table->timestamps();

         $table->foreign("dham_start_id")->references("id")->on("dham_start")->onDelete("cascade");
         $table->foreign("train_id")->references("id")->on("train")->onDelete("cascade");


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("dham_start_train");
    }
};
