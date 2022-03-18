<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidos', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date');
            $table->unsignedBigInteger('local_id')->nullable();
            $table->unsignedBigInteger('visitor_id')->nullable();
            $table->integer('local_goals');
            $table->integer('visitor_goals');
            $table->timestamps();

            $table->foreign('local_id')->references('id')->on('teams')
                                            ->onDelete('set null');
            $table->foreign('visitor_id')->references('id')->on('teams')
                                            ->onDelete('set null');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partidos');
    }
}
