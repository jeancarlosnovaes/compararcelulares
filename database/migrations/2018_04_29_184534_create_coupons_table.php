<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCouponsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('coupons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->mediumtext('description');
            $table->string('image');
            $table->string('url');
            $table->string('code', 50);
            $table->string('discount', 20);
            $table->date('start_date');
            $table->date('end_date');
            $table->json('category');
            $table->integer('vote_yes')->unsigned();
            $table->integer('vote_no')->unsigned();
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
        Schema::drop('coupons');
    }
}
