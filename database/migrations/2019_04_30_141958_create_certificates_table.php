<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('vessel_id')->unsigned();
            $table->string('group');
            $table->string('name');
            $table->string('description')->nullable();;
            $table->date('issue')->nullable();;
            $table->date('expiry')->nullable();;
            $table->string('renewals')->nullable();;
            $table->string('next_renewal')->nullable();;
            $table->timestamps();

            $table->foreign('vessel_id')->references('id')->on('vessels');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificates');
    }
}
