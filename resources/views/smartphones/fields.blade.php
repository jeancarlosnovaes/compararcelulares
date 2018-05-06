<!-- Product Name Field -->
<div class="form-group">
    {{ Form::label('product_name', 'Product Name:') }}
    {{ Form::text('product_name', null, ['class' => 'form-control']) }}
</div>

<!-- Product Image Field -->
<div class="form-group">
    {{ Form::label('product_image', 'Product Image:') }}
    {{ Form::file('product_image') }}
</div>
<div class="clearfix"></div>

<!-- Product Description Field -->
<div class="form-group">
    {{ Form::label('product_description', 'Product Description:') }}
    {{ Form::textarea('product_description', null, ['class' => 'form-control']) }}
</div>

<!-- Brand Id Field -->
<div class="form-group">
    {{ Form::label('brand_id', 'Brand Id:') }}
    {{ Form::select('brand_id', $brands, null, ['class' => 'form-control']) }}
</div>

<!-- Product Availability Field -->
<div class="form-group">
    {{ Form::label('product_availability', 'Product Availability:') }}
    {{ Form::date('product_availability', null, ['class' => 'form-control']) }}
</div>

<!-- Product Status Field -->
<div class="form-group">
    {{ Form::label('product_status', 'Product Status:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('product_status', false) }}
        {{ Form::checkbox('product_status', true, 'yes') }}
    </label>
</div>

<!-- Product Size Field -->
<div class="form-group">
    {{ Form::label('product_size', 'Product Size:') }}
    {{ Form::text('product_size', null, ['class' => 'form-control']) }}
</div>

<!-- Product Screen Field -->
<div class="form-group">
    {{ Form::label('product_screen', 'Product Screen:') }}
    {{ Form::text('product_screen', null, ['class' => 'form-control']) }}
</div>

<!-- Product Weight Field -->
<div class="form-group">
    {{ Form::label('product_weight', 'Product Weight:') }}
    {{ Form::text('product_weight', null, ['class' => 'form-control']) }}
</div>

<!-- Product Useful Surface Field -->
<div class="form-group">
    {{ Form::label('product_useful_surface', 'Product Useful Surface:') }}
    {{ Form::text('product_useful_surface', null, ['class' => 'form-control']) }}
</div>

<!-- Product Material Field -->
<div class="form-group">
    {{ Form::label('product_material', 'Product Material:') }}
    {{ Form::text('product_material', null, ['class' => 'form-control']) }}
</div>

<!-- Product Colors Field -->
<div class="form-group">
    {{ Form::label('product_colors', 'Product Colors:') }}
    {{ Form::text('product_colors', null, ['class' => 'form-control']) }}
</div>

<!-- Screen Size Field -->
<div class="form-group">
    {{ Form::label('screen_size', 'Screen Size:') }}
    {{ Form::text('screen_size', null, ['class' => 'form-control']) }}
</div>

<!-- Screen Type Field -->
<div class="form-group">
    {{ Form::label('screen_type', 'Screen Type:') }}
    {{ Form::text('screen_type', null, ['class' => 'form-control']) }}
</div>

<!-- Screen Resolution Field -->
<div class="form-group">
    {{ Form::label('screen_resolution', 'Screen Resolution:') }}
    {{ Form::text('screen_resolution', null, ['class' => 'form-control']) }}
</div>

<!-- Screen Density Field -->
<div class="form-group">
    {{ Form::label('screen_density', 'Screen Density:') }}
    {{ Form::text('screen_density', null, ['class' => 'form-control']) }}
</div>

<!-- Screen Colors Field -->
<div class="form-group">
    {{ Form::label('screen_colors', 'Screen Colors:') }}
    {{ Form::text('screen_colors', null, ['class' => 'form-control']) }}
</div>

<!-- Screen Toushscreen Field -->
<div class="form-group">
    {{ Form::label('screen_toushscreen', 'Screen Toushscreen:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('screen_toushscreen', false) }}
        {{ Form::checkbox('screen_toushscreen', true, 'yes') }}
    </label>
</div>

<!-- Screen Protect Field -->
<div class="form-group">
    {{ Form::label('screen_protect', 'Screen Protect:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('screen_protect', false) }}
        {{ Form::checkbox('screen_protect', true, 'yes') }}
    </label>
</div>

<!-- Processor Model Field -->
<div class="form-group">
    {{ Form::label('processor_model', 'Processor Model:') }}
    {{ Form::text('processor_model', null, ['class' => 'form-control']) }}
</div>

<!-- Processor Cpu Field -->
<div class="form-group">
    {{ Form::label('processor_CPU', 'Processor Cpu:') }}
    {{ Form::text('processor_CPU', null, ['class' => 'form-control']) }}
</div>

<!-- Processor Type Field -->
<div class="form-group">
    {{ Form::label('processor_type', 'Processor Type:') }}
    {{ Form::text('processor_type', null, ['class' => 'form-control']) }}
</div>

<!-- Processor Frequency Field -->
<div class="form-group">
    {{ Form::label('processor_frequency', 'Processor Frequency:') }}
    {{ Form::text('processor_frequency', null, ['class' => 'form-control']) }}
</div>

<!-- Processor Bits Field -->
<div class="form-group">
    {{ Form::label('processor_bits', 'Processor Bits:') }}
    {{ Form::select('processor_bits', ['1' => '64Bits', '2' => '32Bits', '3' => '16Bits'], null, ['class' => 'form-control']) }}
</div>

<!-- Graphic Gpu Field -->
<div class="form-group">
    {{ Form::label('graphic_GPU', 'Graphic Gpu:') }}
    {{ Form::text('graphic_GPU', null, ['class' => 'form-control']) }}
</div>

<!-- Momory Ram Field -->
<div class="form-group">
    {{ Form::label('momory_RAM', 'Momory Ram:') }}
    {{ Form::text('momory_RAM', null, ['class' => 'form-control']) }}
</div>

<!-- Memory Max Field -->
<div class="form-group">
    {{ Form::label('memory_max', 'Memory Max:') }}
    {{ Form::text('memory_max', null, ['class' => 'form-control']) }}
</div>

<!-- Memory Expandable Field -->
<div class="form-group">
    {{ Form::label('memory_expandable', 'Memory Expandable:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('memory_expandable', false) }}
        {{ Form::checkbox('memory_expandable', true, 'yes') }}
    </label>
</div>

<!-- Camera Resolution Field -->
<div class="form-group">
    {{ Form::label('camera_resolution', 'Camera Resolution:') }}
    {{ Form::text('camera_resolution', null, ['class' => 'form-control']) }}
</div>

<!-- Camera Aperture Size Field -->
<div class="form-group">
    {{ Form::label('camera_aperture_size', 'Camera Aperture Size:') }}
    {{ Form::text('camera_aperture_size', null, ['class' => 'form-control']) }}
</div>

<!-- Camera Sensor Field -->
<div class="form-group">
    {{ Form::label('camera_sensor', 'Camera Sensor:') }}
    {{ Form::text('camera_sensor', null, ['class' => 'form-control']) }}
</div>

<!-- Camera Type Field -->
<div class="form-group">
    {{ Form::label('camera_type', 'Camera Type:') }}
    {{ Form::text('camera_type', null, ['class' => 'form-control']) }}
</div>

<!-- Camera Flash Field -->
<div class="form-group">
    {{ Form::label('camera_flash', 'Camera Flash:') }}
    {{ Form::text('camera_flash', null, ['class' => 'form-control']) }}
</div>

<!-- Camera Stabilization Field -->
<div class="form-group">
    {{ Form::label('camera_stabilization', 'Camera Stabilization:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('camera_stabilization', false) }}
        {{ Form::checkbox('camera_stabilization', true, 'yes') }}
    </label>
</div>

<!-- Camera Autofocus Field -->
<div class="form-group">
    {{ Form::label('camera_autofocus', 'Camera Autofocus:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('camera_autofocus', false) }}
        {{ Form::checkbox('camera_autofocus', true, 'yes') }}
    </label>
</div>

<!-- Camera Touch Field -->
<div class="form-group">
    {{ Form::label('camera_touch', 'Camera Touch:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('camera_touch', false) }}
        {{ Form::checkbox('camera_touch', true, 'yes') }}
    </label>
</div>

<!-- Camera Zoom Optico Field -->
<div class="form-group">
    {{ Form::label('camera_zoom_optico', 'Camera Zoom Optico:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('camera_zoom_optico', false) }}
        {{ Form::checkbox('camera_zoom_optico', true, 'yes') }}
    </label>
</div>

<!-- Camera Hdr Field -->
<div class="form-group">
    {{ Form::label('camera_HDR', 'Camera Hdr:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('camera_HDR', false) }}
        {{ Form::checkbox('camera_HDR', true, 'yes') }}
    </label>
</div>

<!-- Camera Localization Field -->
<div class="form-group">
    {{ Form::label('camera_localization', 'Camera Localization:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('camera_localization', false) }}
        {{ Form::checkbox('camera_localization', true, 'yes') }}
    </label>
</div>

<!-- Camera Face Detection Field -->
<div class="form-group">
    {{ Form::label('camera_face_detection', 'Camera Face Detection:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('camera_face_detection', false) }}
        {{ Form::checkbox('camera_face_detection', true, 'yes') }}
    </label>
</div>

<!-- Camera Front Field -->
<div class="form-group">
    {{ Form::label('camera_front', 'Camera Front:') }}
    {{ Form::text('camera_front', null, ['class' => 'form-control']) }}
</div>

<!-- Camera 4K Field -->
<div class="form-group">
    {{ Form::label('camera_4k', 'Camera 4K:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('camera_4k', false) }}
        {{ Form::checkbox('camera_4k', true, 'yes') }}
    </label>
</div>

<!-- Camera Panoramic Field -->
<div class="form-group">
    {{ Form::label('camera_panoramic', 'Camera Panoramic:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('camera_panoramic', false) }}
        {{ Form::checkbox('camera_panoramic', true, 'yes') }}
    </label>
</div>

<!-- Camera Zoom Digital Field -->
<div class="form-group">
    {{ Form::label('camera_zoom_digital', 'Camera Zoom Digital:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('camera_zoom_digital', false) }}
        {{ Form::checkbox('camera_zoom_digital', true, 'yes') }}
    </label>
</div>

<!-- Camera Dual Field -->
<div class="form-group">
    {{ Form::label('camera_dual', 'Camera Dual:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('camera_dual', false) }}
        {{ Form::checkbox('camera_dual', true, 'yes') }}
    </label>
</div>

<!-- Camera Exposure Compensation Field -->
<div class="form-group">
    {{ Form::label('camera_exposure_compensation', 'Camera Exposure Compensation:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('camera_exposure_compensation', false) }}
        {{ Form::checkbox('camera_exposure_compensation', true, 'yes') }}
    </label>
</div>

<!-- Camera Iso Field -->
<div class="form-group">
    {{ Form::label('camera_ISO', 'Camera Iso:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('camera_ISO', false) }}
        {{ Form::checkbox('camera_ISO', true, 'yes') }}
    </label>
</div>

<!-- Camera Macro Field -->
<div class="form-group">
    {{ Form::label('camera_macro', 'Camera Macro:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('camera_macro', false) }}
        {{ Form::checkbox('camera_macro', true, 'yes') }}
    </label>
</div>

<!-- Camera Manual Focus Field -->
<div class="form-group">
    {{ Form::label('camera_manual_focus', 'Camera Manual Focus:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('camera_manual_focus', false) }}
        {{ Form::checkbox('camera_manual_focus', true, 'yes') }}
    </label>
</div>

<!-- Camera Raw Field -->
<div class="form-group">
    {{ Form::label('camera_RAW', 'Camera Raw:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('camera_RAW', false) }}
        {{ Form::checkbox('camera_RAW', true, 'yes') }}
    </label>
</div>

<!-- Camera Scene Mode Field -->
<div class="form-group">
    {{ Form::label('camera_scene_mode', 'Camera Scene Mode:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('camera_scene_mode', false) }}
        {{ Form::checkbox('camera_scene_mode', true, 'yes') }}
    </label>
</div>

<!-- Camera Self Timer Field -->
<div class="form-group">
    {{ Form::label('camera_self_timer', 'Camera Self Timer:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('camera_self_timer', false) }}
        {{ Form::checkbox('camera_self_timer', true, 'yes') }}
    </label>
</div>

<!-- Camera Tactile Focus Field -->
<div class="form-group">
    {{ Form::label('camera_tactile_focus', 'Camera Tactile Focus:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('camera_tactile_focus', false) }}
        {{ Form::checkbox('camera_tactile_focus', true, 'yes') }}
    </label>
</div>

<!-- Camera Selfie Field -->
<div class="form-group">
    {{ Form::label('camera_selfie', 'Camera Selfie:') }}
    {{ Form::text('camera_selfie', null, ['class' => 'form-control']) }}
</div>

<!-- Camera Fps Field -->
<div class="form-group">
    {{ Form::label('camera_FPS', 'Camera Fps:') }}
    {{ Form::text('camera_FPS', null, ['class' => 'form-control']) }}
</div>

<!-- Camera Slow Motion Field -->
<div class="form-group">
    {{ Form::label('camera_slow_motion', 'Camera Slow Motion:') }}
    {{ Form::text('camera_slow_motion', null, ['class' => 'form-control']) }}
</div>

<!-- Camera Dual Rec Field -->
<div class="form-group">
    {{ Form::label('camera_dual_rec', 'Camera Dual Rec:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('camera_dual_rec', false) }}
        {{ Form::checkbox('camera_dual_rec', true, 'yes') }}
    </label>
</div>

<!-- Camera Video Photo Field -->
<div class="form-group">
    {{ Form::label('camera_video_photo', 'Camera Video Photo:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('camera_video_photo', false) }}
        {{ Form::checkbox('camera_video_photo', true, 'yes') }}
    </label>
</div>

<!-- Connectivity 4G Field -->
<div class="form-group">
    {{ Form::label('connectivity_4G', 'Connectivity 4G:') }}
    {{ Form::text('connectivity_4G', null, ['class' => 'form-control']) }}
</div>

<!-- Connectivity 3G Field -->
<div class="form-group">
    {{ Form::label('connectivity_3G', 'Connectivity 3G:') }}
    {{ Form::text('connectivity_3G', null, ['class' => 'form-control']) }}
</div>

<!-- Connectivity 2G Field -->
<div class="form-group">
    {{ Form::label('connectivity_2G', 'Connectivity 2G:') }}
    {{ Form::text('connectivity_2G', null, ['class' => 'form-control']) }}
</div>

<!-- Connectivity Sim Card Field -->
<div class="form-group">
    {{ Form::label('connectivity_SIM_Card', 'Connectivity Sim Card:') }}
    {{ Form::text('connectivity_SIM_Card', null, ['class' => 'form-control']) }}
</div>

<!-- Connectivity Wifi Field -->
<div class="form-group">
    {{ Form::label('connectivity_wifi', 'Connectivity Wifi:') }}
    {{ Form::text('connectivity_wifi', null, ['class' => 'form-control']) }}
</div>

<!-- Connectivity Bluetooth Field -->
<div class="form-group">
    {{ Form::label('connectivity_bluetooth', 'Connectivity Bluetooth:') }}
    {{ Form::text('connectivity_bluetooth', null, ['class' => 'form-control']) }}
</div>

<!-- Connectivity Navigation Field -->
<div class="form-group">
    {{ Form::label('connectivity_navigation', 'Connectivity Navigation:') }}
    {{ Form::text('connectivity_navigation', null, ['class' => 'form-control']) }}
</div>

<!-- Connectivity Usb Charging Field -->
<div class="form-group">
    {{ Form::label('connectivity_USB_charging', 'Connectivity Usb Charging:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('connectivity_USB_charging', false) }}
        {{ Form::checkbox('connectivity_USB_charging', true, 'yes') }}
    </label>
</div>

<!-- Connectivity Usb Mass Storage Field -->
<div class="form-group">
    {{ Form::label('connectivity_USB_mass_storage', 'Connectivity Usb Mass Storage:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('connectivity_USB_mass_storage', false) }}
        {{ Form::checkbox('connectivity_USB_mass_storage', true, 'yes') }}
    </label>
</div>

<!-- Connectivity Usb Proprietary Field -->
<div class="form-group">
    {{ Form::label('connectivity_USB_proprietary', 'Connectivity Usb Proprietary:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('connectivity_USB_proprietary', false) }}
        {{ Form::checkbox('connectivity_USB_proprietary', true, 'yes') }}
    </label>
</div>

<!-- Connectivity Sar Europe Field -->
<div class="form-group">
    {{ Form::label('connectivity_SAR_europe', 'Connectivity Sar Europe:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('connectivity_SAR_europe', false) }}
        {{ Form::checkbox('connectivity_SAR_europe', true, 'yes') }}
    </label>
</div>

<!-- Connectivity Sar America Field -->
<div class="form-group">
    {{ Form::label('connectivity_SAR_america', 'Connectivity Sar America:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('connectivity_SAR_america', false) }}
        {{ Form::checkbox('connectivity_SAR_america', true, 'yes') }}
    </label>
</div>

<!-- Connectivity Jack Audio Field -->
<div class="form-group">
    {{ Form::label('connectivity_jack_audio', 'Connectivity Jack Audio:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('connectivity_jack_audio', false) }}
        {{ Form::checkbox('connectivity_jack_audio', true, 'yes') }}
    </label>
</div>

<!-- Connectivity Radio Fm Field -->
<div class="form-group">
    {{ Form::label('connectivity_radio_FM', 'Connectivity Radio Fm:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('connectivity_radio_FM', false) }}
        {{ Form::checkbox('connectivity_radio_FM', true, 'yes') }}
    </label>
</div>

<!-- Connectivity Computer Sync Field -->
<div class="form-group">
    {{ Form::label('connectivity_computer_sync', 'Connectivity Computer Sync:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('connectivity_computer_sync', false) }}
        {{ Form::checkbox('connectivity_computer_sync', true, 'yes') }}
    </label>
</div>

<!-- Connectivity Nfc Field -->
<div class="form-group">
    {{ Form::label('connectivity_NFC', 'Connectivity Nfc:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('connectivity_NFC', false) }}
        {{ Form::checkbox('connectivity_NFC', true, 'yes') }}
    </label>
</div>

<!-- Connectivity Ota Sync Field -->
<div class="form-group">
    {{ Form::label('connectivity_OTA_sync', 'Connectivity Ota Sync:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('connectivity_OTA_sync', false) }}
        {{ Form::checkbox('connectivity_OTA_sync', true, 'yes') }}
    </label>
</div>

<!-- Connectivity Router Field -->
<div class="form-group">
    {{ Form::label('connectivity_router', 'Connectivity Router:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('connectivity_router', false) }}
        {{ Form::checkbox('connectivity_router', true, 'yes') }}
    </label>
</div>

<!-- Connectivity Uma Field -->
<div class="form-group">
    {{ Form::label('connectivity_UMA', 'Connectivity Uma:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('connectivity_UMA', false) }}
        {{ Form::checkbox('connectivity_UMA', true, 'yes') }}
    </label>
</div>

<!-- Connectivity Volte Field -->
<div class="form-group">
    {{ Form::label('connectivity_VoLTE', 'Connectivity Volte:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('connectivity_VoLTE', false) }}
        {{ Form::checkbox('connectivity_VoLTE', true, 'yes') }}
    </label>
</div>

<!-- Battery Capacity Field -->
<div class="form-group">
    {{ Form::label('battery_capacity', 'Battery Capacity:') }}
    {{ Form::text('battery_capacity', null, ['class' => 'form-control']) }}
</div>

<!-- Battery Type Field -->
<div class="form-group">
    {{ Form::label('battery_type', 'Battery Type:') }}
    {{ Form::text('battery_type', null, ['class' => 'form-control']) }}
</div>

<!-- Battery Fast Charging Field -->
<div class="form-group">
    {{ Form::label('battery_fast_charging', 'Battery Fast Charging:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('battery_fast_charging', false) }}
        {{ Form::checkbox('battery_fast_charging', true, 'yes') }}
    </label>
</div>

<!-- Battery Charging Wireless Field -->
<div class="form-group">
    {{ Form::label('battery_charging_wireless', 'Battery Charging Wireless:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('battery_charging_wireless', false) }}
        {{ Form::checkbox('battery_charging_wireless', true, 'yes') }}
    </label>
</div>

<!-- Software Type Field -->
<div class="form-group">
    {{ Form::label('software_type', 'Software Type:') }}
    {{ Form::text('software_type', null, ['class' => 'form-control']) }}
</div>

<!-- Function Music Player Field -->
<div class="form-group">
    {{ Form::label('function_music_player', 'Function Music Player:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('function_music_player', false) }}
        {{ Form::checkbox('function_music_player', true, 'yes') }}
    </label>
</div>

<!-- Function Video Player Field -->
<div class="form-group">
    {{ Form::label('function_video_player', 'Function Video Player:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('function_video_player', false) }}
        {{ Form::checkbox('function_video_player', true, 'yes') }}
    </label>
</div>

<!-- Function Tv Field -->
<div class="form-group">
    {{ Form::label('function_TV', 'Function Tv:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('function_TV', false) }}
        {{ Form::checkbox('function_TV', true, 'yes') }}
    </label>
</div>

<!-- Function Tv Output Field -->
<div class="form-group">
    {{ Form::label('function_TV_output', 'Function Tv Output:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('function_TV_output', false) }}
        {{ Form::checkbox('function_TV_output', true, 'yes') }}
    </label>
</div>

<!-- Function Browser Field -->
<div class="form-group">
    {{ Form::label('function_browser', 'Function Browser:') }}
    {{ Form::text('function_browser', null, ['class' => 'form-control']) }}
</div>

<!-- Function Flash Player Field -->
<div class="form-group">
    {{ Form::label('function_flash_player', 'Function Flash Player:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('function_flash_player', false) }}
        {{ Form::checkbox('function_flash_player', '1', null) }}
    </label>
</div>

<!-- Function Vibration Field -->
<div class="form-group">
    {{ Form::label('function_vibration', 'Function Vibration:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('function_vibration', false) }}
        {{ Form::checkbox('function_vibration', true, 'yes') }}
    </label>
</div>

<!-- Function Speakerphone Field -->
<div class="form-group">
    {{ Form::label('function_speakerphone', 'Function Speakerphone:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('function_speakerphone', false) }}
        {{ Form::checkbox('function_speakerphone', true, 'yes') }}
    </label>
</div>

<!-- Function Ringtones Field -->
<div class="form-group">
    {{ Form::label('function_ringtones', 'Function Ringtones:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('function_ringtones', false) }}
        {{ Form::checkbox('function_ringtones', true, 'yes') }}
    </label>
</div>

<!-- Function Custom Ringtones Field -->
<div class="form-group">
    {{ Form::label('function_custom_ringtones', 'Function Custom Ringtones:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('function_custom_ringtones', false) }}
        {{ Form::checkbox('function_custom_ringtones', true, 'yes') }}
    </label>
</div>

<!-- Function Others Field -->
<div class="form-group">
    {{ Form::label('function_others', 'Function Others:') }}
    {{ Form::textarea('function_others', null, ['class' => 'form-control']) }}
</div>

<!-- Sensor Accelerometer Field -->
<div class="form-group">
    {{ Form::label('sensor_accelerometer', 'Sensor Accelerometer:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('sensor_accelerometer', false) }}
        {{ Form::checkbox('sensor_accelerometer', '1', null) }}
    </label>
</div>

<!-- Sensor Proximity Field -->
<div class="form-group">
    {{ Form::label('sensor_proximity', 'Sensor Proximity:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('sensor_proximity', false) }}
        {{ Form::checkbox('sensor_proximity', '1', null) }}
    </label>
</div>

<!-- Sensor Gyroscope Field -->
<div class="form-group">
    {{ Form::label('sensor_gyroscope', 'Sensor Gyroscope:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('sensor_gyroscope', false) }}
        {{ Form::checkbox('sensor_gyroscope', '1', null) }}
    </label>
</div>

<!-- Sensor Compass Field -->
<div class="form-group">
    {{ Form::label('sensor_compass', 'Sensor Compass:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('sensor_compass', false) }}
        {{ Form::checkbox('sensor_compass', '1', null) }}
    </label>
</div>

<!-- Sensor Barometer Field -->
<div class="form-group">
    {{ Form::label('sensor_barometer', 'Sensor Barometer:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('sensor_barometer', false) }}
        {{ Form::checkbox('sensor_barometer', '1', null) }}
    </label>
</div>

<!-- Sensor Noise Reduction Microphone Field -->
<div class="form-group">
    {{ Form::label('sensor_noise_reduction_microphone', 'Sensor Noise Reduction Microphone:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('sensor_noise_reduction_microphone', false) }}
        {{ Form::checkbox('sensor_noise_reduction_microphone', '1', null) }}
    </label>
</div>

<!-- Sensor Ambient Light Field -->
<div class="form-group">
    {{ Form::label('sensor_ambient_light', 'Sensor Ambient Light:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('sensor_ambient_light', false) }}
        {{ Form::checkbox('sensor_ambient_light', '1', null) }}
    </label>
</div>

<!-- Sensor Fingerprint Field -->
<div class="form-group">
    {{ Form::label('sensor_fingerprint', 'Sensor Fingerprint:') }}
    <label class="checkbox-inline">
        {{ Form::hidden('sensor_fingerprint', false) }}
        {{ Form::checkbox('sensor_fingerprint', '1', null) }}
    </label>
</div>

<!-- Sensor Others Field -->
<div class="form-group">
    {{ Form::label('sensor_others', 'Sensor Others:') }}
    {{ Form::textarea('sensor_others', null, ['class' => 'form-control']) }}
</div>

<!-- Data Download Speed Field -->
<div class="form-group">
    {{ Form::label('data_download_speed', 'Data Download Speed:') }}
    {{ Form::text('data_download_speed', null, ['class' => 'form-control']) }}
</div>

<!-- Data Upload Speed Field -->
<div class="form-group">
    {{ Form::label('data_upload_speed', 'Data Upload Speed:') }}
    {{ Form::text('data_upload_speed', null, ['class' => 'form-control']) }}
</div>

<!-- Submit Field -->
<div class="form-group">
    {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
    <a href="{{ route('smartphones.index') }}" class="btn btn-default">Cancel</a>
</div>
