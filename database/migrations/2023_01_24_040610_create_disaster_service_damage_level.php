<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disaster_service_damage_level', function (Blueprint $table) {
            $table->foreignId('disaster_id')->constrained('disasters');
            $table->foreignId('public_service_id')->constrained('public_services');
            $table->foreignId('damage_level_id')->constrained('damage_levels');           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disaster_service_damage_level');
    }
};
