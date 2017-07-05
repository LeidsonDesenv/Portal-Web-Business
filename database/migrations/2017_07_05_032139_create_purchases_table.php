<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('idPurchase');
            $table->date('day');
            $table->string('NF',45);
            $table->decimal('price_purchase', 5, 2);
            $table->integer('customer_idCustomer')->unsigned();
                $table->foreign('customer_idCustomer')
                        ->references('idCustomer')->on('Customers');
            $table->integer('product_idProduct')->unsigned();
                $table->foreign('product_idProduct')
                        ->references('idProduct')->on('Products');
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
        Schema::dropIfExists('purchases');
    }
}
