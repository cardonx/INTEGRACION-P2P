<?php

use Integracion\Support\Facades\Schema;
use Integracion\Database\Schema\Blueprint;
use Integracion\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('transactionID');
            $table->string('transactionState')->default('PENDING');
            $table->string('bankCode',4);
            $table->string('bankInterface',1);
            $table->string('reference',32);
            $table->string('description',255);
            $table->string('totalAmount',15,2);
            $table->string('taxAmount',15,2);
            $table->string('devolutionBase',15,2);
            $table->integer('payer')->unsigned();
            $table->foreign('payer')->references('id')->on('persons');
            $table->string('ipAddress',15);
            $table->string('userAgent',255);
            $table->string('trazabilityCode');
            $table->string('responseReasonText');
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
        Schema::dropIfExists('payments');
    }
}
