<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'comments', function ( Blueprint $table ) {
            $table->increments('id');
            $table->unsignedTinyInteger('when_bought');
            $table->unsignedTinyInteger('resistant_scratchs_and_falling');
            $table->unsignedTinyInteger('is_beautiful');
            $table->unsignedTinyInteger('comfortable');
            $table->unsignedTinyInteger('good_vision_in_the_sun');
            $table->unsignedTinyInteger('works_well_in_daily_use');
            $table->unsignedTinyInteger('demanding_games');
            $table->unsignedTinyInteger('good_sound');
            $table->unsignedTinyInteger('daytime_photos');
            $table->unsignedTinyInteger('night_photos');
            $table->unsignedTinyInteger('quality_selfies');
            $table->unsignedTinyInteger('powerful_flash');
            $table->unsignedTinyInteger('good_calls');
            $table->unsignedTinyInteger('quality_GPS');
            $table->unsignedTinyInteger('quality_WIFI');
            $table->unsignedTinyInteger('battery_life');
            $table->unsignedTinyInteger('preinstalled_apps');
            $table->unsignedTinyInteger('receive_updates');
            $table->string('opinion_in_a_sentence', 400);
            $table->text('extended_opinion');
            $table->json('pros');
            $table->json('cons');
            $table->unsignedTinyInteger('general_opinion');
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
        Schema::drop('comments');
    }
}
