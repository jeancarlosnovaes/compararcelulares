<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTabletsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'tablets', function ( Blueprint $table ) {
            $table->increments('id');
            $table->string('product_name');
            $table->string( 'slug' );
            $table->string('product_image');
            $table->text('product_description');
            $table->integer('brand_id')->unsigned();
            $table->date('product_availability');
            $table->boolean('product_status');
            $table->json('price_history');
            $table->string('product_size', 50);
            $table->string('product_screen', 50);
            $table->string('product_weight', 50);
            $table->string('product_useful_surface', 50);
            $table->string('product_material');
            $table->string('product_colors');
            $table->string('screen_size', 50);
            $table->string('screen_type', 50);
            $table->string('screen_resolution', 50);
            $table->string('screen_density');
            $table->string('screen_colors', 50);
            $table->boolean('screen_toushscreen');
            $table->boolean('screen_multitouch');
            $table->boolean('screen_protect');
            $table->string('processor_model');
            $table->string('processor_CPU');
            $table->string('processor_type', 50);
            $table->string('processor_frequency', 50);
            $table->unsignedTinyInteger('processor_bits');
            $table->string('graphic_GPU', 30);
            $table->string('momory_RAM', 50);
            $table->string('memory_max', 50);
            $table->boolean('memory_expandable');
            $table->string('camera_resolution', 50);
            $table->string('camera_aperture_size', 50);
            $table->string('camera_sensor', 50);
            $table->string('camera_type', 50);
            $table->string('camera_flash', 50);
            $table->boolean('camera_stabilization');
            $table->boolean('camera_autofocus');
            $table->boolean('camera_touch');
            $table->boolean('camera_zoom_optico');
            $table->boolean('camera_HDR');
            $table->boolean('camera_localization');
            $table->boolean('camera_face_detection');
            $table->boolean('camera_smile_detection');
            $table->string('camera_front', 50);
            $table->boolean('camera_4k');
            $table->boolean('camera_panoramic');
            $table->boolean('camera_zoom_digital');
            $table->boolean('camera_dual');
            $table->boolean('camera_exposure_compensation');
            $table->boolean('camera_ISO');
            $table->boolean('camera_macro');
            $table->boolean('camera_manual_focus');
            $table->boolean('camera_RAW');
            $table->boolean('camera_scene_mode');
            $table->boolean('camera_self_timer');
            $table->boolean('camera_tactile_focus');
            $table->string('camera_selfie', 50);
            $table->string('camera_FPS', 50);
            $table->string('camera_slow_motion', 50);
            $table->boolean('camera_dual_rec');
            $table->boolean('camera_video_photo');
            $table->string('connectivity_4G');
            $table->string('connectivity_3G');
            $table->string('connectivity_2G');
            $table->string('connectivity_SIM_Card', 50);
            $table->string('connectivity_wifi');
            $table->string('connectivity_bluetooth');
            $table->string('connectivity_navigation');
            $table->boolean('connectivity_USB_charging');
            $table->boolean('connectivity_USB_mass_storage');
            $table->boolean('connectivity_USB_proprietary');
            $table->boolean('connectivity_SAR_europe');
            $table->boolean('connectivity_SAR_america');
            $table->boolean('connectivity_jack_audio');
            $table->boolean('connectivity_radio_FM');
            $table->boolean('connectivity_computer_sync');
            $table->boolean('connectivity_NFC');
            $table->boolean('connectivity_OTA_sync');
            $table->boolean('connectivity_router');
            $table->boolean('connectivity_UMA');
            $table->boolean('connectivity_VoLTE');
            $table->string('battery_capacity', 50);
            $table->string('battery_type', 50);
            $table->boolean('battery_fast_charging');
            $table->boolean('battery_charging_wireless');
            $table->string('software_type', 50);
            $table->boolean('function_music_player');
            $table->boolean('function_video_player');
            $table->boolean('function_TV');
            $table->boolean('function_TV_output');
            $table->string('function_browser', 50);
            $table->boolean('function_flash_player');
            $table->boolean('function_vibration');
            $table->boolean('function_speakerphone');
            $table->boolean('function_ringtones');
            $table->boolean('function_custom_ringtones');
            $table->mediumtext('function_others');
            $table->boolean('sensor_accelerometer');
            $table->boolean('sensor_proximity');
            $table->boolean('sensor_gyroscope');
            $table->boolean('sensor_compass');
            $table->boolean('sensor_barometer');
            $table->boolean('sensor_noise_reduction_microphone');
            $table->boolean('sensor_ambient_light');
            $table->boolean('sensor_fingerprint');
            $table->mediumtext('sensor_others');
            $table->string('data_download_speed', 50);
            $table->string('data_upload_speed', 50);
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
        Schema::drop('tablets');
    }
}
