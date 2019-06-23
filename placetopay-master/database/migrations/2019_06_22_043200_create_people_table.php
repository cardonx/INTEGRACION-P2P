<?php

use Integracion\Support\Facades\Schema;
use Integracion\Database\Schema\Blueprint;
use Integracion\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('document',13);
            $table->string('documentType',3);
            $table->string('firstName',60);
            $table->string('lastName',60);
            $table->string('emailAddress',80);
            $table->string('phone',30);
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
        Schema::dropIfExists('person');
    }
}
