<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDealsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'deals', function ( Blueprint $table ) {
            $table->increments('id');
            $table->string('title');
            $table->mediumtext('description');
            $table->float('price_old');
            $table->float('price');
            $table->string('url');
            $table->boolean('report');
            $table->integer('store_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('store_id')->references('id')->on('stores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('deals');
    }
}
