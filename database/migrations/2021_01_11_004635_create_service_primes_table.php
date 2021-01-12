<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicePrimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_primes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('icone_id')->nullable();
            $table->foreign('icone_id')->references('id')->on('icone_primes')->onDelete('set null');
            $table->string('titre');
            $table->longText('text');
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
        Schema::dropIfExists('service_primes');
    }
}
