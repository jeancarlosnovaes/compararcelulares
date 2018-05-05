<?php

use Faker\Factory as Faker;
use App\Models\Tablet;
use App\Repositories\TabletRepository;

trait MakeTabletTrait
{
    /**
     * Create fake instance of Tablet and save it in database
     *
     * @param array $tabletFields
     * @return Tablet
     */
    public function makeTablet($tabletFields = [])
    {
        /** @var TabletRepository $tabletRepo */
        $tabletRepo = App::make(TabletRepository::class);
        $theme = $this->fakeTabletData($tabletFields);
        return $tabletRepo->create($theme);
    }

    /**
     * Get fake instance of Tablet
     *
     * @param array $tabletFields
     * @return Tablet
     */
    public function fakeTablet($tabletFields = [])
    {
        return new Tablet($this->fakeTabletData($tabletFields));
    }

    /**
     * Get fake data of Tablet
     *
     * @param array $postFields
     * @return array
     */
    public function fakeTabletData($tabletFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'product_name' => $fake->word,
            'product_image' => $fake->word,
            'product_description' => $fake->text,
            'brand_id' => $fake->randomDigitNotNull,
            'product_availability' => $fake->word,
            'product_status' => $fake->word,
            'price_history' => $fake->word,
            'product_size' => $fake->word,
            'product_screen' => $fake->word,
            'product_weight' => $fake->word,
            'product_useful_surface' => $fake->word,
            'product_material' => $fake->word,
            'product_colors' => $fake->word,
            'screen_size' => $fake->word,
            'screen_type' => $fake->word,
            'screen_resolution' => $fake->word,
            'screen_density' => $fake->word,
            'screen_colors' => $fake->word,
            'screen_toushscreen' => $fake->word,
            'screen_multitouch' => $fake->word,
            'screen_protect' => $fake->word,
            'processor_model' => $fake->word,
            'processor_CPU' => $fake->word,
            'processor_type' => $fake->word,
            'processor_frequency' => $fake->word,
            'processor_bits' => $fake->word,
            'graphic_GPU' => $fake->word,
            'momory_RAM' => $fake->word,
            'memory_max' => $fake->word,
            'memory_expandable' => $fake->word,
            'camera_resolution' => $fake->word,
            'camera_aperture_size' => $fake->word,
            'camera_sensor' => $fake->word,
            'camera_type' => $fake->word,
            'camera_flash' => $fake->word,
            'camera_stabilization' => $fake->word,
            'camera_autofocus' => $fake->word,
            'camera_touch' => $fake->word,
            'camera_zoom_optico' => $fake->word,
            'camera_HDR' => $fake->word,
            'camera_localization' => $fake->word,
            'camera_face_detection' => $fake->word,
            'camera_smile_detection' => $fake->word,
            'camera_front' => $fake->word,
            'camera_4k' => $fake->word,
            'camera_panoramic' => $fake->word,
            'camera_zoom_digital' => $fake->word,
            'camera_dual' => $fake->word,
            'camera_exposure_compensation' => $fake->word,
            'camera_ISO' => $fake->word,
            'camera_macro' => $fake->word,
            'camera_manual_focus' => $fake->word,
            'camera_RAW' => $fake->word,
            'camera_scene_mode' => $fake->word,
            'camera_self_timer' => $fake->word,
            'camera_tactile_focus' => $fake->word,
            'camera_selfie' => $fake->word,
            'camera_FPS' => $fake->word,
            'camera_slow_motion' => $fake->word,
            'camera_dual_rec' => $fake->word,
            'camera_video_photo' => $fake->word,
            'connectivity_4G' => $fake->word,
            'connectivity_3G' => $fake->word,
            'connectivity_2G' => $fake->word,
            'connectivity_SIM_Card' => $fake->word,
            'connectivity_wifi' => $fake->word,
            'connectivity_bluetooth' => $fake->word,
            'connectivity_navigation' => $fake->word,
            'connectivity_USB_charging' => $fake->word,
            'connectivity_USB_mass_storage' => $fake->word,
            'connectivity_USB_proprietary' => $fake->word,
            'connectivity_SAR_europe' => $fake->word,
            'connectivity_SAR_america' => $fake->word,
            'connectivity_jack_audio' => $fake->word,
            'connectivity_radio_FM' => $fake->word,
            'connectivity_computer_sync' => $fake->word,
            'connectivity_NFC' => $fake->word,
            'connectivity_OTA_sync' => $fake->word,
            'connectivity_router' => $fake->word,
            'connectivity_UMA' => $fake->word,
            'connectivity_VoLTE' => $fake->word,
            'battery_capacity' => $fake->word,
            'battery_type' => $fake->word,
            'battery_fast_charging' => $fake->word,
            'battery_charging_wireless' => $fake->word,
            'software_type' => $fake->word,
            'function_music_player' => $fake->word,
            'function_video_player' => $fake->word,
            'function_TV' => $fake->word,
            'function_TV_output' => $fake->word,
            'function_browser' => $fake->word,
            'function_flash_player' => $fake->word,
            'function_vibration' => $fake->word,
            'function_speakerphone' => $fake->word,
            'function_ringtones' => $fake->word,
            'function_custom_ringtones' => $fake->word,
            'function_others' => $fake->word,
            'sensor_accelerometer' => $fake->word,
            'sensor_proximity' => $fake->word,
            'sensor_gyroscope' => $fake->word,
            'sensor_compass' => $fake->word,
            'sensor_barometer' => $fake->word,
            'sensor_noise_reduction_microphone' => $fake->word,
            'sensor_ambient_light' => $fake->word,
            'sensor_fingerprint' => $fake->word,
            'sensor_others' => $fake->word,
            'data_download_speed' => $fake->word,
            'data_upload_speed' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $tabletFields);
    }
}
