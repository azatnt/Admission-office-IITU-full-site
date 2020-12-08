<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhdStateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phd_state_orders', function (Blueprint $table) {
            $table->id();
            $table->string("code_name_groups");
            $table->string("code_name_programs");
            $table->integer("count_of_places");
            $table->integer("places_in_iitu");
            $table->integer("goal_places");
            $table->string("name_of_organization");
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
        Schema::dropIfExists('phd_state_orders');
    }
}
