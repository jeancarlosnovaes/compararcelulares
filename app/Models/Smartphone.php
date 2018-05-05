<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Smartphone",
 *      required={ "product_name", "brand_id" },
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="product_name",
 *          description="product_name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="product_image",
 *          description="product_image",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="product_description",
 *          description="product_description",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="brand_id",
 *          description="brand_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="product_availability",
 *          description="product_availability",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="product_status",
 *          description="product_status",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="product_size",
 *          description="product_size",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="product_screen",
 *          description="product_screen",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="product_weight",
 *          description="product_weight",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="product_useful_surface",
 *          description="product_useful_surface",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="product_material",
 *          description="product_material",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="product_colors",
 *          description="product_colors",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="screen_size",
 *          description="screen_size",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="screen_type",
 *          description="screen_type",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="screen_resolution",
 *          description="screen_resolution",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="screen_density",
 *          description="screen_density",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="screen_colors",
 *          description="screen_colors",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="screen_toushscreen",
 *          description="screen_toushscreen",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="screen_multitouch",
 *          description="screen_multitouch",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="screen_protect",
 *          description="screen_protect",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="processor_model",
 *          description="processor_model",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="processor_CPU",
 *          description="processor_CPU",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="processor_type",
 *          description="processor_type",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="processor_frequency",
 *          description="processor_frequency",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="graphic_GPU",
 *          description="graphic_GPU",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="momory_RAM",
 *          description="momory_RAM",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="memory_max",
 *          description="memory_max",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="memory_expandable",
 *          description="memory_expandable",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="camera_resolution",
 *          description="camera_resolution",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="camera_aperture_size",
 *          description="camera_aperture_size",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="camera_sensor",
 *          description="camera_sensor",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="camera_type",
 *          description="camera_type",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="camera_flash",
 *          description="camera_flash",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="camera_stabilization",
 *          description="camera_stabilization",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="camera_autofocus",
 *          description="camera_autofocus",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="camera_touch",
 *          description="camera_touch",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="camera_zoom_optico",
 *          description="camera_zoom_optico",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="camera_HDR",
 *          description="camera_HDR",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="camera_localization",
 *          description="camera_localization",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="camera_face_detection",
 *          description="camera_face_detection",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="camera_front",
 *          description="camera_front",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="camera_4k",
 *          description="camera_4k",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="camera_panoramic",
 *          description="camera_panoramic",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="camera_zoom_digital",
 *          description="camera_zoom_digital",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="camera_dual",
 *          description="camera_dual",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="camera_exposure_compensation",
 *          description="camera_exposure_compensation",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="camera_ISO",
 *          description="camera_ISO",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="camera_macro",
 *          description="camera_macro",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="camera_manual_focus",
 *          description="camera_manual_focus",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="camera_RAW",
 *          description="camera_RAW",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="camera_scene_mode",
 *          description="camera_scene_mode",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="camera_self_timer",
 *          description="camera_self_timer",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="camera_tactile_focus",
 *          description="camera_tactile_focus",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="camera_selfie",
 *          description="camera_selfie",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="camera_FPS",
 *          description="camera_FPS",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="camera_slow_motion",
 *          description="camera_slow_motion",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="camera_dual_rec",
 *          description="camera_dual_rec",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="camera_video_photo",
 *          description="camera_video_photo",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="connectivity_4G",
 *          description="connectivity_4G",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="connectivity_3G",
 *          description="connectivity_3G",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="connectivity_2G",
 *          description="connectivity_2G",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="connectivity_SIM_Card",
 *          description="connectivity_SIM_Card",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="connectivity_wifi",
 *          description="connectivity_wifi",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="connectivity_bluetooth",
 *          description="connectivity_bluetooth",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="connectivity_navigation",
 *          description="connectivity_navigation",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="connectivity_USB_charging",
 *          description="connectivity_USB_charging",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="connectivity_USB_mass_storage",
 *          description="connectivity_USB_mass_storage",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="connectivity_USB_proprietary",
 *          description="connectivity_USB_proprietary",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="connectivity_SAR_europe",
 *          description="connectivity_SAR_europe",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="connectivity_SAR_america",
 *          description="connectivity_SAR_america",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="connectivity_jack_audio",
 *          description="connectivity_jack_audio",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="connectivity_radio_FM",
 *          description="connectivity_radio_FM",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="connectivity_computer_sync",
 *          description="connectivity_computer_sync",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="connectivity_NFC",
 *          description="connectivity_NFC",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="connectivity_OTA_sync",
 *          description="connectivity_OTA_sync",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="connectivity_router",
 *          description="connectivity_router",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="connectivity_UMA",
 *          description="connectivity_UMA",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="connectivity_VoLTE",
 *          description="connectivity_VoLTE",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="battery_capacity",
 *          description="battery_capacity",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="battery_type",
 *          description="battery_type",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="battery_fast_charging",
 *          description="battery_fast_charging",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="battery_charging_wireless",
 *          description="battery_charging_wireless",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="software_type",
 *          description="software_type",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="function_music_player",
 *          description="function_music_player",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="function_video_player",
 *          description="function_video_player",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="function_TV",
 *          description="function_TV",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="function_TV_output",
 *          description="function_TV_output",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="function_browser",
 *          description="function_browser",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="function_flash_player",
 *          description="function_flash_player",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="function_vibration",
 *          description="function_vibration",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="function_speakerphone",
 *          description="function_speakerphone",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="function_ringtones",
 *          description="function_ringtones",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="function_custom_ringtones",
 *          description="function_custom_ringtones",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="sensor_accelerometer",
 *          description="sensor_accelerometer",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="sensor_proximity",
 *          description="sensor_proximity",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="sensor_gyroscope",
 *          description="sensor_gyroscope",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="sensor_compass",
 *          description="sensor_compass",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="sensor_barometer",
 *          description="sensor_barometer",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="sensor_noise_reduction_microphone",
 *          description="sensor_noise_reduction_microphone",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="sensor_ambient_light",
 *          description="sensor_ambient_light",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="sensor_fingerprint",
 *          description="sensor_fingerprint",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="data_download_speed",
 *          description="data_download_speed",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="data_upload_speed",
 *          description="data_upload_speed",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class Smartphone extends Model {
    use SoftDeletes;

    public $table = 'smartphones';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'product_name',
        'product_image',
        'product_description',
        'brand_id',
        'product_availability',
        'product_status',
        'price_history',
        'product_size',
        'product_screen',
        'product_weight',
        'product_useful_surface',
        'product_material',
        'product_colors',
        'screen_size',
        'screen_type',
        'screen_resolution',
        'screen_density',
        'screen_colors',
        'screen_toushscreen',
        'screen_multitouch',
        'screen_protect',
        'processor_model',
        'processor_CPU',
        'processor_type',
        'processor_frequency',
        'processor_bits',
        'graphic_GPU',
        'momory_RAM',
        'memory_max',
        'memory_expandable',
        'camera_resolution',
        'camera_aperture_size',
        'camera_sensor',
        'camera_type',
        'camera_flash',
        'camera_stabilization',
        'camera_autofocus',
        'camera_touch',
        'camera_zoom_optico',
        'camera_HDR',
        'camera_localization',
        'camera_face_detection',
        'camera_smile_detection',
        'camera_front',
        'camera_4k',
        'camera_panoramic',
        'camera_zoom_digital',
        'camera_dual',
        'camera_exposure_compensation',
        'camera_ISO',
        'camera_macro',
        'camera_manual_focus',
        'camera_RAW',
        'camera_scene_mode',
        'camera_self_timer',
        'camera_tactile_focus',
        'camera_selfie',
        'camera_FPS',
        'camera_slow_motion',
        'camera_dual_rec',
        'camera_video_photo',
        'connectivity_4G',
        'connectivity_3G',
        'connectivity_2G',
        'connectivity_SIM_Card',
        'connectivity_wifi',
        'connectivity_bluetooth',
        'connectivity_navigation',
        'connectivity_USB_charging',
        'connectivity_USB_mass_storage',
        'connectivity_USB_proprietary',
        'connectivity_SAR_europe',
        'connectivity_SAR_america',
        'connectivity_jack_audio',
        'connectivity_radio_FM',
        'connectivity_computer_sync',
        'connectivity_NFC',
        'connectivity_OTA_sync',
        'connectivity_router',
        'connectivity_UMA',
        'connectivity_VoLTE',
        'battery_capacity',
        'battery_type',
        'battery_fast_charging',
        'battery_charging_wireless',
        'software_type',
        'function_music_player',
        'function_video_player',
        'function_TV',
        'function_TV_output',
        'function_browser',
        'function_flash_player',
        'function_vibration',
        'function_speakerphone',
        'function_ringtones',
        'function_custom_ringtones',
        'function_others',
        'sensor_accelerometer',
        'sensor_proximity',
        'sensor_gyroscope',
        'sensor_compass',
        'sensor_barometer',
        'sensor_noise_reduction_microphone',
        'sensor_ambient_light',
        'sensor_fingerprint',
        'sensor_others',
        'data_download_speed',
        'data_upload_speed'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'product_name' => 'string',
        'product_image' => 'string',
        'product_description' => 'string',
        'brand_id' => 'integer',
        'product_availability' => 'date',
        'product_status' => 'boolean',
        'product_size' => 'string',
        'product_screen' => 'string',
        'product_weight' => 'string',
        'product_useful_surface' => 'string',
        'product_material' => 'string',
        'product_colors' => 'string',
        'screen_size' => 'string',
        'screen_type' => 'string',
        'screen_resolution' => 'string',
        'screen_density' => 'string',
        'screen_colors' => 'string',
        'screen_toushscreen' => 'boolean',
        'screen_multitouch' => 'boolean',
        'screen_protect' => 'boolean',
        'processor_model' => 'string',
        'processor_CPU' => 'string',
        'processor_type' => 'string',
        'processor_frequency' => 'string',
        'graphic_GPU' => 'string',
        'momory_RAM' => 'string',
        'memory_max' => 'string',
        'memory_expandable' => 'boolean',
        'camera_resolution' => 'string',
        'camera_aperture_size' => 'string',
        'camera_sensor' => 'string',
        'camera_type' => 'string',
        'camera_flash' => 'string',
        'camera_stabilization' => 'boolean',
        'camera_autofocus' => 'boolean',
        'camera_touch' => 'boolean',
        'camera_zoom_optico' => 'boolean',
        'camera_HDR' => 'boolean',
        'camera_localization' => 'boolean',
        'camera_face_detection' => 'boolean',
        'camera_front' => 'string',
        'camera_4k' => 'boolean',
        'camera_panoramic' => 'boolean',
        'camera_zoom_digital' => 'boolean',
        'camera_dual' => 'boolean',
        'camera_exposure_compensation' => 'boolean',
        'camera_ISO' => 'boolean',
        'camera_macro' => 'boolean',
        'camera_manual_focus' => 'boolean',
        'camera_RAW' => 'boolean',
        'camera_scene_mode' => 'boolean',
        'camera_self_timer' => 'boolean',
        'camera_tactile_focus' => 'boolean',
        'camera_selfie' => 'string',
        'camera_FPS' => 'string',
        'camera_slow_motion' => 'string',
        'camera_dual_rec' => 'boolean',
        'camera_video_photo' => 'boolean',
        'connectivity_4G' => 'string',
        'connectivity_3G' => 'string',
        'connectivity_2G' => 'string',
        'connectivity_SIM_Card' => 'string',
        'connectivity_wifi' => 'string',
        'connectivity_bluetooth' => 'string',
        'connectivity_navigation' => 'string',
        'connectivity_USB_charging' => 'boolean',
        'connectivity_USB_mass_storage' => 'boolean',
        'connectivity_USB_proprietary' => 'boolean',
        'connectivity_SAR_europe' => 'boolean',
        'connectivity_SAR_america' => 'boolean',
        'connectivity_jack_audio' => 'boolean',
        'connectivity_radio_FM' => 'boolean',
        'connectivity_computer_sync' => 'boolean',
        'connectivity_NFC' => 'boolean',
        'connectivity_OTA_sync' => 'boolean',
        'connectivity_router' => 'boolean',
        'connectivity_UMA' => 'boolean',
        'connectivity_VoLTE' => 'boolean',
        'battery_capacity' => 'string',
        'battery_type' => 'string',
        'battery_fast_charging' => 'boolean',
        'battery_charging_wireless' => 'boolean',
        'software_type' => 'string',
        'function_music_player' => 'boolean',
        'function_video_player' => 'boolean',
        'function_TV' => 'boolean',
        'function_TV_output' => 'boolean',
        'function_browser' => 'string',
        'function_flash_player' => 'boolean',
        'function_vibration' => 'boolean',
        'function_speakerphone' => 'boolean',
        'function_ringtones' => 'boolean',
        'function_custom_ringtones' => 'boolean',
        'sensor_accelerometer' => 'boolean',
        'sensor_proximity' => 'boolean',
        'sensor_gyroscope' => 'boolean',
        'sensor_compass' => 'boolean',
        'sensor_barometer' => 'boolean',
        'sensor_noise_reduction_microphone' => 'boolean',
        'sensor_ambient_light' => 'boolean',
        'sensor_fingerprint' => 'boolean',
        'data_download_speed' => 'string',
        'data_upload_speed' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product_name' => 'required',
        'brand_id' => 'required'
    ];

    public function brand() {
        return $this->belongsTo( 'App\Models\Brand' );
    }
}
