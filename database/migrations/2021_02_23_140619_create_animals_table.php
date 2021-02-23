<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string("name", 50);
            $table->date("dob"); //YYYY-MM-DD
            $table->string("species", 100);
            $table->float("weight", 4, 2); //weight in kg
            $table->float("height", 4, 1); //height in cm
            $table->enum("biteyness", ["1", "2", "3", "4", "5"]);
            $table->foreignId("owner_id")->constrained()->onDelete("cascade");
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
        Schema::dropIfExists('animals');
    }
}
