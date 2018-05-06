<div class="table-responsive">
    <table class="table table-bordered table-hover" id="tablet-table">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Product Image</th>
                <th>Product Description</th>
                <th>Brand</th>
                <th>Product Availability</th>
                <th>Product Status</th>
                <th>Price History</th>
                <th>Product Size</th>
                <th>Product Screen</th>
                <th>Product Weight</th>
                <th>Product Useful Surface</th>
                <th>product_material</th>
                <th>Product Colors</th>
                <th>Screen Size</th>
                <th>Screen Type</th>
                <th>Screen Resolution</th>
                <th>Screen Density</th>
                <th>Screen Colors</th>
                <th>Screen Toushscreen</th>
                <th>Screen Multitouch</th>
                <th>Screen Protect</th>
                <th>Processor Model</th>
                <th>Processor CPU</th>
                <th>Processor Type</th>
                <th>Processor Frequency</th>
                <th>Processor Bits</th>
                <th>Graphic GPU</th>
                <th>Momory RAM</th>
                <th>Memory Max</th>
                <th>Memory Expandable</th>
                <th>Camera Resolution</th>
                <th>Camera Aperture Size</th>
                <th>Camera Sensor</th>
                <th>Camera Type</th>
                <th>Camera Flash</th>
                <th>Camera Stabilization</th>
                <th>Camera Autofocus</th>
                <th>Camera Touch</th>
                <th>Camera Zoom Optico</th>
                <th>Camera HDR</th>
                <th>Camera Localization</th>
                <th>Camera Face Detection</th>
                <th>Camera Smile Detection</th>
                <th>Camera Front</th>
                <th>Camera 4K</th>
                <th>Camera Panoramic</th>
                <th>Camera Zoom Digital</th>
                <th>Camera Dual</th>
                <th>Camera Exposure Compensation</th>
                <th>Camera ISO</th>
                <th>Camera Macro</th>
                <th>Camera Manual Focus</th>
                <th>Camera RAW</th>
                <th>Camera Scene Mode</th>
                <th>Camera Self Timer</th>
                <th>Camera Tactile Focus</th>
                <th>Camera Selfie</th>
                <th>Camera FPS</th>
                <th>Camera Slow Motion</th>
                <th>Camera Dual REC</th>
                <th>Camera Video Photo</th>
                <th>Connectivity 4G</th>
                <th>Connectivity 3G</th>
                <th>Connectivity 2G</th>
                <th>Connectivity SIM Card</th>
                <th>Connectivity WIFI</th>
                <th>Connectivity Bluetooth</th>
                <th>Connectivity Navigation</th>
                <th>Connectivity USB Charging</th>
                <th>Connectivity USB Mass Storage</th>
                <th>Connectivity USB Proprietary</th>
                <th>Connectivity Sar Europe</th>
                <th>Connectivity Sar America</th>
                <th>Connectivity Jack Audio</th>
                <th>Connectivity Radio FM</th>
                <th>Connectivity Computer Sync</th>
                <th>Connectivity NFC</th>
                <th>Connectivity OTA Sync</th>
                <th>Connectivity Router</th>
                <th>Connectivity UMA</th>
                <th>Connectivity VoLTE</th>
                <th>Battery Capacity</th>
                <th>Battery Fast Charging</th>
                <th>Battery Charging Wireless</th>
                <th>Software Type</th>
                <th>Function Music Player</th>
                <th>Function Video Player</th>
                <th>Function TV</th>
                <th>Function TV Output</th>
                <th>Function Browser</th>
                <th>Function Flash Player</th>
                <th>Function Vibration</th>
                <th>Function Speakerphone</th>
                <th>Function Ringtones</th>
                <th>Function Custom Ringtones</th>
                <th>Function Others</th>
                <th>Sensor Accelerometer</th>
                <th>Sensor Proximity</th>
                <th>Sensor Gyroscope</th>
                <th>Sensor Compass</th>
                <th>Sensor Barometer</th>
                <th>Sensor Noise Reduction Microphone</th>
                <th>Sensor Ambient Light</th>
                <th>Sensor Fingerprint</th>
                <th>Sensor Others</th>
                <th>Data Download Speed</th>
                <th>Data Upload Speed</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $tablet->product_name }}</td>
                <td><img src="{{ $tablet->product_image }}" alt="{{ $tablet->product_name }}"></td>
                <td>{{ $tablet->product_description }}</td>
                <td>{{ $tablet->brand->name }}</td>
                <td>{{ $tablet->product_availability }}</td>
                <td>{{ $tablet->product_status }}</td>
                <td>{{ $tablet->price_history }}</td>
                <td>{{ $tablet->product_size }}</td>
                <td>{{ $tablet->product_screen }}</td>
                <td>{{ $tablet->product_weight }}</td>
                <td>{{ $tablet->product_useful_surface }}</td>
                <td>{{ $tablet->product_material }}</td>
                <td>{{ $tablet->product_colors }}</td>
                <td>{{ $tablet->screen_size }}</td>
                <td>{{ $tablet->screen_type }}</td>
                <td>{{ $tablet->screen_resolution }}</td>
                <td>{{ $tablet->screen_density }}</td>
                <td>{{ $tablet->screen_colors }}</td>
                <td>{{ $tablet->screen_toushscreen }}</td>
                <td>{{ $tablet->screen_multitouch }}</td>
                <td>{{ $tablet->screen_protect }}</td>
                <td>{{ $tablet->processor_model }}</td>
                <td>{{ $tablet->processor_CPU }}</td>
                <td>{{ $tablet->processor_type }}</td>
                <td>{{ $tablet->processor_frequency }}</td>
                <td>{{ $tablet->processor_bits }}</td>
                <td>{{ $tablet->graphic_GPU }}</td>
                <td>{{ $tablet->momory_RAM }}</td>
                <td>{{ $tablet->memory_max }}</td>
                <td>{{ $tablet->memory_expandable }}</td>
                <td>{{ $tablet->camera_resolution }}</td>
                <td>{{ $tablet->camera_aperture_size }}</td>
                <td>{{ $tablet->camera_sensor }}</td>
                <td>{{ $tablet->camera_type }}</td>
                <td>{{ $tablet->camera_flash }}</td>
                <td>{{ $tablet->camera_stabilization }}</td>
                <td>{{ $tablet->camera_autofocus }}</td>
                <td>{{ $tablet->camera_touch }}</td>
                <td>{{ $tablet->camera_zoom_optico }}</td>
                <td>{{ $tablet->camera_HDR }}</td>
                <td>{{ $tablet->camera_localization }}</td>
                <td>{{ $tablet->camera_face_detection }}</td>
                <td>{{ $tablet->camera_smile_detection }}</td>
                <td>{{ $tablet->camera_front }}</td>
                <td>{{ $tablet->camera_4k }}</td>
                <td>{{ $tablet->camera_panoramic }}</td>
                <td>{{ $tablet->camera_zoom_digital }}</td>
                <td>{{ $tablet->camera_dual }}</td>
                <td>{{ $tablet->camera_exposure_compensation }}</td>
                <td>{{ $tablet->camera_ISO }}</td>
                <td>{{ $tablet->camera_macro }}</td>
                <td>{{ $tablet->camera_manual_focus }}</td>
                <td>{{ $tablet->camera_RAW }}</td>
                <td>{{ $tablet->camera_scene_mode }}</td>
                <td>{{ $tablet->camera_self_timer }}</td>
                <td>{{ $tablet->camera_tactile_focus }}</td>
                <td>{{ $tablet->camera_selfie }}</td>
                <td>{{ $tablet->camera_FPS }}</td>
                <td>{{ $tablet->camera_slow_motion }}</td>
                <td>{{ $tablet->camera_dual_rec }}</td>
                <td>{{ $tablet->camera_video_photo }}</td>
                <td>{{ $tablet->connectivity_4G }}</td>
                <td>{{ $tablet->connectivity_3G }}</td>
                <td>{{ $tablet->connectivity_2G }}</td>
                <td>{{ $tablet->connectivity_SIM_Card }}</td>
                <td>{{ $tablet->connectivity_wifi }}</td>
                <td>{{ $tablet->connectivity_bluetooth }}</td>
                <td>{{ $tablet->connectivity_navigation }}</td>
                <td>{{ $tablet->connectivity_USB_charging }}</td>
                <td>{{ $tablet->connectivity_USB_mass_storage }}</td>
                <td>{{ $tablet->connectivity_USB_proprietary }}</td>
                <td>{{ $tablet->connectivity_SAR_europe }}</td>
                <td>{{ $tablet->connectivity_SAR_america }}</td>
                <td>{{ $tablet->connectivity_jack_audio }}</td>
                <td>{{ $tablet->connectivity_radio_FM }}</td>
                <td>{{ $tablet->connectivity_computer_sync }}</td>
                <td>{{ $tablet->connectivity_NFC }}</td>
                <td>{{ $tablet->connectivity_OTA_sync }}</td>
                <td>{{ $tablet->connectivity_router }}</td>
                <td>{{ $tablet->connectivity_UMA }}</td>
                <td>{{ $tablet->connectivity_VoLTE }}</td>
                <td>{{ $tablet->battery_capacity }}</td>
                <td>{{ $tablet->battery_type }}</td>
                <td>{{ $tablet->battery_fast_charging }}</td>
                <td>{{ $tablet->battery_charging_wireless }}</td>
                <td>{{ $tablet->software_type }}</td>
                <td>{{ $tablet->function_music_player }}</td>
                <td>{{ $tablet->function_video_player }}</td>
                <td>{{ $tablet->function_TV }}</td>
                <td>{{ $tablet->function_TV_output }}</td>
                <td>{{ $tablet->function_browser }}</td>
                <td>{{ $tablet->function_flash_player }}</td>
                <td>{{ $tablet->function_vibration }}</td>
                <td>{{ $tablet->function_speakerphone }}</td>
                <td>{{ $tablet->function_ringtones }}</td>
                <td>{{ $tablet->function_custom_ringtones }}</td>
                <td>{{ $tablet->function_others }}</td>
                <td>{{ $tablet->sensor_accelerometer }}</td>
                <td>{{ $tablet->sensor_proximity }}</td>
                <td>{{ $tablet->sensor_gyroscope }}</td>
                <td>{{ $tablet->sensor_compass }}</td>
                <td>{{ $tablet->sensor_barometer }}</td>
                <td>{{ $tablet->sensor_noise_reduction_microphone }}</td>
                <td>{{ $tablet->sensor_ambient_light }}</td>
                <td>{{ $tablet->sensor_fingerprint }}</td>
                <td>{{ $tablet->sensor_others }}</td>
                <td>{{ $tablet->data_download_speed }}</td>
                <td>{{ $tablet->data_upload_speed }}</td>
            </tr>
        </tbody>
    </table>
</div>