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
        Schema::create('disasters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('disaster_type_id')->constrained('disaster_types');
            $table->foreignId('city_id')->constrained('cities');
            $table->foreignId('damage_level_id')->constrained('damage_levels');
            $table->point('location');
            $table->integer('casualties')->default(0);
            $table->text('description')->nullable();
            $table->timestamps();
                      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disasters');
    }
};
