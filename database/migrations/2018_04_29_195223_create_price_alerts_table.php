<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePriceAlertsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'price_alerts', function ( Blueprint $table ) {
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->string('product_name');
            $table->string('email');
            $table->string('activatation_digest');
            $table->boolean('activated');
            $table->datetime('activated_at');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('price_alerts');
    }
}
