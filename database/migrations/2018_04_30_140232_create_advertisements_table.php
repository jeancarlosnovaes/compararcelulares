<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdvertisementsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'advertisements', function ( Blueprint $table ) {
            $table->increments('id');
            $table->string('platform', 30);
            $table->mediumtext('code');
            $table->string('type', 50);
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
        Schema::drop('advertisements');
    }
}
