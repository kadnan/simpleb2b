<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->longText('description')->nullable();
            $table->json('images');
            $table->text('specs')->nullable();
            $table->json('min_qty');
            $table->double('fob_min');
            $table->double('fob_max');
            $table->enum('payment_type',['paypal','wu','cc','bank']);
            $table->json('supply_ability');
            $table->text('delivery')->nullable();
            $table->text('package_details')->nullable();
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
        Schema::dropIfExists('products');
    }
}
