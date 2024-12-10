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
       Schema::create("dham_start",function(Blueprint $table){
         $table->id()->autoIncrement()->primary()->integer(10);
         $table->string("name",200);
         $table->string("state_name",100);
         $table->string("state_code",100);
         $table->string("district_name",100);
         $table->string("district_code",100);
         $table->string("block_name",100);
         $table->string("block_code",100);
         $table->string("vilage_name",200);
         $table->string("place_localname",100);
         $table->string("drop_station",100);
         $table->string("catch_station",100);
         $table->string("route_name",100);
        $table->timestamp("create_date");
        $table->timestamp("update_time");
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dham_start');
    }
};
