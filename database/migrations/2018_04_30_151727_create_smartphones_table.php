<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSmartphonesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'smartphones', function ( Blueprint $table ) {
            $table->increments('id');
            $table->string('product_name');
            $table->string( 'slug' );
            $table->string('product_image')->nullable();
            $table->text('product_description')->nullable();
            $table->integer('brand_id');
            $table->date('product_availability')->nullable();
            $table->boolean('product_status')->nullable();
            $table->json('price_history')->nullable();
            $table->string('product_size', 50)->nullable();
            $table->string('product_screen', 50)->nullable();
            $table->string('product_weight', 50)->nullable();
            $table->string('product_useful_surface', 20)->nullable();
            $table->string('product_material')->nullable();
            $table->string('product_colors')->nullable();
            $table->string('screen_size', 50)->nullable();
            $table->string('screen_type', 50)->nullable();
            $table->string('screen_resolution', 50)->nullable();
            $table->string('screen_density')->nullable();
            $table->string('screen_colors', 50)->nullable();
            $table->boolean('screen_toushscreen')->nullable();
            $table->boolean('screen_multitouch')->nullable();
            $table->boolean('screen_protect')->nullable();
            $table->string('processor_model')->nullable();
            $table->string('processor_CPU')->nullable();
            $table->string('processor_type', 50)->nullable();
            $table->string('processor_frequency', 50)->nullable();
            $table->unsignedTinyInteger('processor_bits')->nullable();
            $table->string('graphic_GPU', 50)->nullable();
            $table->string('momory_RAM', 50)->nullable();
            $table->string('memory_max', 50)->nullable();
            $table->boolean('memory_expandable')->nullable();
            $table->string('camera_resolution', 50)->nullable();
            $table->string('camera_aperture_size', 50)->nullable();
            $table->string('camera_sensor', 50)->nullable();
            $table->string('camera_type', 50)->nullable();
            $table->string('camera_flash', 50)->nullable();
            $table->boolean('camera_stabilization')->nullable();
            $table->boolean('camera_autofocus')->nullable();
            $table->boolean('camera_touch')->nullable();
            $table->boolean('camera_zoom_optico')->nullable();
            $table->boolean('camera_HDR')->nullable();
            $table->boolean('camera_localization')->nullable();
            $table->boolean('camera_face_detection')->nullable();
            $table->boolean('camera_smile_detection')->nullable();
            $table->string('camera_front', 50)->nullable();
            $table->boolean('camera_4k')->nullable();
            $table->boolean('camera_panoramic')->nullable();
            $table->boolean('camera_zoom_digital')->nullable();
            $table->boolean('camera_dual')->nullable();
            $table->boolean('camera_exposure_compensation')->nullable();
            $table->boolean('camera_ISO')->nullable();
            $table->boolean('camera_macro')->nullable();
            $table->boolean('camera_manual_focus')->nullable();
            $table->boolean('camera_RAW')->nullable();
            $table->boolean('camera_scene_mode')->nullable();
            $table->boolean('camera_self_timer')->nullable();
            $table->boolean('camera_tactile_focus')->nullable();
            $table->string('camera_selfie', 50)->nullable();
            $table->string('camera_FPS', 50)->nullable();
            $table->string('camera_slow_motion', 50)->nullable();
            $table->boolean('camera_dual_rec')->nullable();
            $table->boolean('camera_video_photo')->nullable();
            $table->string('connectivity_4G', 500)->nullable();
            $table->string('connectivity_3G', 500)->nullable();
            $table->string('connectivity_2G', 500)->nullable();
            $table->string('connectivity_SIM_Card', 50)->nullable();
            $table->string('connectivity_wifi')->nullable();
            $table->string('connectivity_bluetooth')->nullable();
            $table->string('connectivity_navigation')->nullable();
            $table->boolean('connectivity_USB_charging')->nullable();
            $table->boolean('connectivity_USB_mass_storage')->nullable();
            $table->boolean('connectivity_USB_proprietary')->nullable();
            $table->boolean('connectivity_SAR_europe')->nullable();
            $table->boolean('connectivity_SAR_america')->nullable();
            $table->boolean('connectivity_jack_audio')->nullable();
            $table->boolean('connectivity_radio_FM')->nullable();
            $table->boolean('connectivity_computer_sync')->nullable();
            $table->boolean('connectivity_NFC')->nullable();
            $table->boolean('connectivity_OTA_sync')->nullable();
            $table->boolean('connectivity_router')->nullable();
            $table->boolean('connectivity_UMA')->nullable();
            $table->boolean('connectivity_VoLTE')->nullable();
            $table->string('battery_capacity', 50)->nullable();
            $table->string('battery_type', 50)->nullable();
            $table->boolean('battery_fast_charging')->nullable();
            $table->boolean('battery_charging_wireless')->nullable();
            $table->string('software_type', 50)->nullable();
            $table->boolean('function_music_player')->nullable();
            $table->boolean('function_video_player')->nullable();
            $table->boolean('function_TV')->nullable();
            $table->boolean('function_TV_output')->nullable();
            $table->string('function_browser', 50)->nullable();
            $table->boolean('function_flash_player')->nullable();
            $table->boolean('function_vibration')->nullable();
            $table->boolean('function_speakerphone')->nullable();
            $table->boolean('function_ringtones')->nullable();
            $table->boolean('function_custom_ringtones')->nullable();
            $table->mediumtext('function_others')->nullable();
            $table->boolean('sensor_accelerometer')->nullable();
            $table->boolean('sensor_proximity')->nullable();
            $table->boolean('sensor_gyroscope')->nullable();
            $table->boolean('sensor_compass')->nullable();
            $table->boolean('sensor_barometer')->nullable();
            $table->boolean('sensor_noise_reduction_microphone')->nullable();
            $table->boolean('sensor_ambient_light')->nullable();
            $table->boolean('sensor_fingerprint')->nullable();
            $table->mediumtext('sensor_others')->nullable();
            $table->string('data_download_speed', 50)->nullable();
            $table->string('data_upload_speed', 50)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('brand_id')->references('id')->on('brands');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('smartphones');
    }
}
