<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialProvider extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'social_providers', function ( Blueprint $table ) {
            $table->integer( 'user_id' )->unsigned()->references( 'id' )->on( 'users' );
            $table->string( 'provider_id' );
            $table->string( 'provider' );
            $table->timestamp( 'created_at' )->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'social_providers' );
    }
}
