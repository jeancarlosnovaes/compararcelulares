<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddToStoresDealsId extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('stores', function ( Blueprint $table ) {
            $table->foreign( 'deals_id' )->references( 'id' )->on( 'deals' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('stores', function (Blueprint $table) {
            $table->dropColumn( 'deals_id' );
        });
    }
}
