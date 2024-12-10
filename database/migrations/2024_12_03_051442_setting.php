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
       Schema::create('setting',function(Blueprint $table){
          $table->id()->primary()->autoIncrement();
          $table->string('name')->nullable();
          $table->string('setting_email')->nullable();
          $table->string('setting_phone')->nullable();
          $table->string('setting_address')->nullable();
          $table->string('setting_facebook')->nullable();
          $table->string("setting_inst")->nullable();
          $table->dateTime('create_time')->autoIncrement();
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setting');
    }
};
