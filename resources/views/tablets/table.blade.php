<table class="table table-responsive" id="tablets-table">
    <thead>
        <tr>
            <th>Product Name</th>
        <th>Product Image</th>
        <th>Product Description</th>
        <th>Brand Id</th>
        <th>Product Availability</th>
        <th>Product Status</th>
        <th>Price History</th>
        <th>Product Size</th>
        <th>Product Screen</th>
        <th>Product Weight</th>
        <th>Product Useful Surface</th>
        <th>Product Material</th>
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
        <th>Processor Cpu</th>
        <th>Processor Type</th>
        <th>Processor Frequency</th>
        <th>Processor Bits</th>
        <th>Graphic Gpu</th>
        <th>Momory Ram</th>
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
        <th>Camera Hdr</th>
        <th>Camera Localization</th>
        <th>Camera Face Detection</th>
        <th>Camera Smile Detection</th>
        <th>Camera Front</th>
        <th>Camera 4K</th>
        <th>Camera Panoramic</th>
        <th>Camera Zoom Digital</th>
        <th>Camera Dual</th>
        <th>Camera Exposure Compensation</th>
        <th>Camera Iso</th>
        <th>Camera Macro</th>
        <th>Camera Manual Focus</th>
        <th>Camera Raw</th>
        <th>Camera Scene Mode</th>
        <th>Camera Self Timer</th>
        <th>Camera Tactile Focus</th>
        <th>Camera Selfie</th>
        <th>Camera Fps</th>
        <th>Camera Slow Motion</th>
        <th>Camera Dual Rec</th>
        <th>Camera Video Photo</th>
        <th>Connectivity 4G</th>
        <th>Connectivity 3G</th>
        <th>Connectivity 2G</th>
        <th>Connectivity Sim Card</th>
        <th>Connectivity Wifi</th>
        <th>Connectivity Bluetooth</th>
        <th>Connectivity Navigation</th>
        <th>Connectivity Usb Charging</th>
        <th>Connectivity Usb Mass Storage</th>
        <th>Connectivity Usb Proprietary</th>
        <th>Connectivity Sar Europe</th>
        <th>Connectivity Sar America</th>
        <th>Connectivity Jack Audio</th>
        <th>Connectivity Radio Fm</th>
        <th>Connectivity Computer Sync</th>
        <th>Connectivity Nfc</th>
        <th>Connectivity Ota Sync</th>
        <th>Connectivity Router</th>
        <th>Connectivity Uma</th>
        <th>Connectivity Volte</th>
        <th>Battery Capacity</th>
        <th>Battery Type</th>
        <th>Battery Fast Charging</th>
        <th>Battery Charging Wireless</th>
        <th>Software Type</th>
        <th>Function Music Player</th>
        <th>Function Video Player</th>
        <th>Function Tv</th>
        <th>Function Tv Output</th>
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
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tablets as $tablet)
        <tr>
            <td>{!! $tablet->product_name !!}</td>
            <td>{!! $tablet->product_image !!}</td>
            <td>{!! $tablet->product_description !!}</td>
            <td>{!! $tablet->brand_id !!}</td>
            <td>{!! $tablet->product_availability !!}</td>
            <td>{!! $tablet->product_status !!}</td>
            <td>{!! $tablet->price_history !!}</td>
            <td>{!! $tablet->product_size !!}</td>
            <td>{!! $tablet->product_screen !!}</td>
            <td>{!! $tablet->product_weight !!}</td>
            <td>{!! $tablet->product_useful_surface !!}</td>
            <td>{!! $tablet->product_material !!}</td>
            <td>{!! $tablet->product_colors !!}</td>
            <td>{!! $tablet->screen_size !!}</td>
            <td>{!! $tablet->screen_type !!}</td>
            <td>{!! $tablet->screen_resolution !!}</td>
            <td>{!! $tablet->screen_density !!}</td>
            <td>{!! $tablet->screen_colors !!}</td>
            <td>{!! $tablet->screen_toushscreen !!}</td>
            <td>{!! $tablet->screen_multitouch !!}</td>
            <td>{!! $tablet->screen_protect !!}</td>
            <td>{!! $tablet->processor_model !!}</td>
            <td>{!! $tablet->processor_CPU !!}</td>
            <td>{!! $tablet->processor_type !!}</td>
            <td>{!! $tablet->processor_frequency !!}</td>
            <td>{!! $tablet->processor_bits !!}</td>
            <td>{!! $tablet->graphic_GPU !!}</td>
            <td>{!! $tablet->momory_RAM !!}</td>
            <td>{!! $tablet->memory_max !!}</td>
            <td>{!! $tablet->memory_expandable !!}</td>
            <td>{!! $tablet->camera_resolution !!}</td>
            <td>{!! $tablet->camera_aperture_size !!}</td>
            <td>{!! $tablet->camera_sensor !!}</td>
            <td>{!! $tablet->camera_type !!}</td>
            <td>{!! $tablet->camera_flash !!}</td>
            <td>{!! $tablet->camera_stabilization !!}</td>
            <td>{!! $tablet->camera_autofocus !!}</td>
            <td>{!! $tablet->camera_touch !!}</td>
            <td>{!! $tablet->camera_zoom_optico !!}</td>
            <td>{!! $tablet->camera_HDR !!}</td>
            <td>{!! $tablet->camera_localization !!}</td>
            <td>{!! $tablet->camera_face_detection !!}</td>
            <td>{!! $tablet->camera_smile_detection !!}</td>
            <td>{!! $tablet->camera_front !!}</td>
            <td>{!! $tablet->camera_4k !!}</td>
            <td>{!! $tablet->camera_panoramic !!}</td>
            <td>{!! $tablet->camera_zoom_digital !!}</td>
            <td>{!! $tablet->camera_dual !!}</td>
            <td>{!! $tablet->camera_exposure_compensation !!}</td>
            <td>{!! $tablet->camera_ISO !!}</td>
            <td>{!! $tablet->camera_macro !!}</td>
            <td>{!! $tablet->camera_manual_focus !!}</td>
            <td>{!! $tablet->camera_RAW !!}</td>
            <td>{!! $tablet->camera_scene_mode !!}</td>
            <td>{!! $tablet->camera_self_timer !!}</td>
            <td>{!! $tablet->camera_tactile_focus !!}</td>
            <td>{!! $tablet->camera_selfie !!}</td>
            <td>{!! $tablet->camera_FPS !!}</td>
            <td>{!! $tablet->camera_slow_motion !!}</td>
            <td>{!! $tablet->camera_dual_rec !!}</td>
            <td>{!! $tablet->camera_video_photo !!}</td>
            <td>{!! $tablet->connectivity_4G !!}</td>
            <td>{!! $tablet->connectivity_3G !!}</td>
            <td>{!! $tablet->connectivity_2G !!}</td>
            <td>{!! $tablet->connectivity_SIM_Card !!}</td>
            <td>{!! $tablet->connectivity_wifi !!}</td>
            <td>{!! $tablet->connectivity_bluetooth !!}</td>
            <td>{!! $tablet->connectivity_navigation !!}</td>
            <td>{!! $tablet->connectivity_USB_charging !!}</td>
            <td>{!! $tablet->connectivity_USB_mass_storage !!}</td>
            <td>{!! $tablet->connectivity_USB_proprietary !!}</td>
            <td>{!! $tablet->connectivity_SAR_europe !!}</td>
            <td>{!! $tablet->connectivity_SAR_america !!}</td>
            <td>{!! $tablet->connectivity_jack_audio !!}</td>
            <td>{!! $tablet->connectivity_radio_FM !!}</td>
            <td>{!! $tablet->connectivity_computer_sync !!}</td>
            <td>{!! $tablet->connectivity_NFC !!}</td>
            <td>{!! $tablet->connectivity_OTA_sync !!}</td>
            <td>{!! $tablet->connectivity_router !!}</td>
            <td>{!! $tablet->connectivity_UMA !!}</td>
            <td>{!! $tablet->connectivity_VoLTE !!}</td>
            <td>{!! $tablet->battery_capacity !!}</td>
            <td>{!! $tablet->battery_type !!}</td>
            <td>{!! $tablet->battery_fast_charging !!}</td>
            <td>{!! $tablet->battery_charging_wireless !!}</td>
            <td>{!! $tablet->software_type !!}</td>
            <td>{!! $tablet->function_music_player !!}</td>
            <td>{!! $tablet->function_video_player !!}</td>
            <td>{!! $tablet->function_TV !!}</td>
            <td>{!! $tablet->function_TV_output !!}</td>
            <td>{!! $tablet->function_browser !!}</td>
            <td>{!! $tablet->function_flash_player !!}</td>
            <td>{!! $tablet->function_vibration !!}</td>
            <td>{!! $tablet->function_speakerphone !!}</td>
            <td>{!! $tablet->function_ringtones !!}</td>
            <td>{!! $tablet->function_custom_ringtones !!}</td>
            <td>{!! $tablet->function_others !!}</td>
            <td>{!! $tablet->sensor_accelerometer !!}</td>
            <td>{!! $tablet->sensor_proximity !!}</td>
            <td>{!! $tablet->sensor_gyroscope !!}</td>
            <td>{!! $tablet->sensor_compass !!}</td>
            <td>{!! $tablet->sensor_barometer !!}</td>
            <td>{!! $tablet->sensor_noise_reduction_microphone !!}</td>
            <td>{!! $tablet->sensor_ambient_light !!}</td>
            <td>{!! $tablet->sensor_fingerprint !!}</td>
            <td>{!! $tablet->sensor_others !!}</td>
            <td>{!! $tablet->data_download_speed !!}</td>
            <td>{!! $tablet->data_upload_speed !!}</td>
            <td>
                {!! Form::open(['route' => ['tablets.destroy', $tablet->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tablets.show', [$tablet->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tablets.edit', [$tablet->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>