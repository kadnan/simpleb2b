<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSelloffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selloffers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->text('keywords');
            $table->json('images');

            $table->double('fob_min');
            $table->double('fob_max');
            $table->json('supply_ability');
            $table->text('delivery')->nullable();
            $table->text('package_details')->nullable();
            $table->json('min_order_qty');

            $table->dateTime('validity_date');
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
        Schema::dropIfExists('selloffers');
    }
}
