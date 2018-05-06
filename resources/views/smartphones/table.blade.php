<div class="table-responsive">
    <table class="table table-bordered table-hover" id="smartphone-table">
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
            @foreach($smartphones as $smartphone)
            <tr>
                <td>{{ $smartphone->product_name }}</td>
                <td><img src="{{ $smartphone->product_image }}" alt="{{ $smartphone->product_name }}"></td>
                <td>{{ $smartphone->product_description }}</td>
                <td>{{ $smartphone->brand->name}}</td>
                <td>{{ $smartphone->product_availability }}</td>
                <td>{{ $smartphone->product_status }}</td>
                <td>{{ $smartphone->price_history }}</td>
                <td>{{ $smartphone->product_size }}</td>
                <td>{{ $smartphone->product_screen }}</td>
                <td>{{ $smartphone->product_weight }}</td>
                <td>{{ $smartphone->product_useful_surface }}</td>
                <td>{{ $smartphone->product_material }}</td>
                <td>{{ $smartphone->product_colors }}</td>
                <td>{{ $smartphone->screen_size }}</td>
                <td>{{ $smartphone->screen_type }}</td>
                <td>{{ $smartphone->screen_resolution }}</td>
                <td>{{ $smartphone->screen_density }}</td>
                <td>{{ $smartphone->screen_colors }}</td>
                <td>{{ $smartphone->screen_toushscreen }}</td>
                <td>{{ $smartphone->screen_multitouch }}</td>
                <td>{{ $smartphone->screen_protect }}</td>
                <td>{{ $smartphone->processor_model }}</td>
                <td>{{ $smartphone->processor_CPU }}</td>
                <td>{{ $smartphone->processor_type }}</td>
                <td>{{ $smartphone->processor_frequency }}</td>
                <td>{{ $smartphone->processor_bits }}</td>
                <td>{{ $smartphone->graphic_GPU }}</td>
                <td>{{ $smartphone->momory_RAM }}</td>
                <td>{{ $smartphone->memory_max }}</td>
                <td>{{ $smartphone->memory_expandable }}</td>
                <td>{{ $smartphone->camera_resolution }}</td>
                <td>{{ $smartphone->camera_aperture_size }}</td>
                <td>{{ $smartphone->camera_sensor }}</td>
                <td>{{ $smartphone->camera_type }}</td>
                <td>{{ $smartphone->camera_flash }}</td>
                <td>{{ $smartphone->camera_stabilization }}</td>
                <td>{{ $smartphone->camera_autofocus }}</td>
                <td>{{ $smartphone->camera_touch }}</td>
                <td>{{ $smartphone->camera_zoom_optico }}</td>
                <td>{{ $smartphone->camera_HDR }}</td>
                <td>{{ $smartphone->camera_localization }}</td>
                <td>{{ $smartphone->camera_face_detection }}</td>
                <td>{{ $smartphone->camera_smile_detection }}</td>
                <td>{{ $smartphone->camera_front }}</td>
                <td>{{ $smartphone->camera_4k }}</td>
                <td>{{ $smartphone->camera_panoramic }}</td>
                <td>{{ $smartphone->camera_zoom_digital }}</td>
                <td>{{ $smartphone->camera_dual }}</td>
                <td>{{ $smartphone->camera_exposure_compensation }}</td>
                <td>{{ $smartphone->camera_ISO }}</td>
                <td>{{ $smartphone->camera_macro }}</td>
                <td>{{ $smartphone->camera_manual_focus }}</td>
                <td>{{ $smartphone->camera_RAW }}</td>
                <td>{{ $smartphone->camera_scene_mode }}</td>
                <td>{{ $smartphone->camera_self_timer }}</td>
                <td>{{ $smartphone->camera_tactile_focus }}</td>
                <td>{{ $smartphone->camera_selfie }}</td>
                <td>{{ $smartphone->camera_FPS }}</td>
                <td>{{ $smartphone->camera_slow_motion }}</td>
                <td>{{ $smartphone->camera_dual_rec }}</td>
                <td>{{ $smartphone->camera_video_photo }}</td>
                <td>{{ $smartphone->connectivity_4G }}</td>
                <td>{{ $smartphone->connectivity_3G }}</td>
                <td>{{ $smartphone->connectivity_2G }}</td>
                <td>{{ $smartphone->connectivity_SIM_Card }}</td>
                <td>{{ $smartphone->connectivity_wifi }}</td>
                <td>{{ $smartphone->connectivity_bluetooth }}</td>
                <td>{{ $smartphone->connectivity_navigation }}</td>
                <td>{{ $smartphone->connectivity_USB_charging }}</td>
                <td>{{ $smartphone->connectivity_USB_mass_storage }}</td>
                <td>{{ $smartphone->connectivity_USB_proprietary }}</td>
                <td>{{ $smartphone->connectivity_SAR_europe }}</td>
                <td>{{ $smartphone->connectivity_SAR_america }}</td>
                <td>{{ $smartphone->connectivity_jack_audio }}</td>
                <td>{{ $smartphone->connectivity_radio_FM }}</td>
                <td>{{ $smartphone->connectivity_computer_sync }}</td>
                <td>{{ $smartphone->connectivity_NFC }}</td>
                <td>{{ $smartphone->connectivity_OTA_sync }}</td>
                <td>{{ $smartphone->connectivity_router }}</td>
                <td>{{ $smartphone->connectivity_UMA }}</td>
                <td>{{ $smartphone->connectivity_VoLTE }}</td>
                <td>{{ $smartphone->battery_capacity }}</td>
                <td>{{ $smartphone->battery_type }}</td>
                <td>{{ $smartphone->battery_fast_charging }}</td>
                <td>{{ $smartphone->battery_charging_wireless }}</td>
                <td>{{ $smartphone->software_type }}</td>
                <td>{{ $smartphone->function_music_player }}</td>
                <td>{{ $smartphone->function_video_player }}</td>
                <td>{{ $smartphone->function_TV }}</td>
                <td>{{ $smartphone->function_TV_output }}</td>
                <td>{{ $smartphone->function_browser }}</td>
                <td>{{ $smartphone->function_flash_player }}</td>
                <td>{{ $smartphone->function_vibration }}</td>
                <td>{{ $smartphone->function_speakerphone }}</td>
                <td>{{ $smartphone->function_ringtones }}</td>
                <td>{{ $smartphone->function_custom_ringtones }}</td>
                <td>{{ $smartphone->function_others }}</td>
                <td>{{ $smartphone->sensor_accelerometer }}</td>
                <td>{{ $smartphone->sensor_proximity }}</td>
                <td>{{ $smartphone->sensor_gyroscope }}</td>
                <td>{{ $smartphone->sensor_compass }}</td>
                <td>{{ $smartphone->sensor_barometer }}</td>
                <td>{{ $smartphone->sensor_noise_reduction_microphone }}</td>
                <td>{{ $smartphone->sensor_ambient_light }}</td>
                <td>{{ $smartphone->sensor_fingerprint }}</td>
                <td>{{ $smartphone->sensor_others }}</td>
                <td>{{ $smartphone->data_download_speed }}</td>
                <td>{{ $smartphone->data_upload_speed }}</td>
                <td>
                    {{ Form::open(['route' => ['smartphones.destroy', $smartphone->id], 'method' => 'delete']) }}
                    <div class='btn-group d-flex justify-content-center'>
                        <a href="{{ route('smartphones.show', [$smartphone->id]) }}" class='btn btn-outline-secondary btn-sm'>
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('smartphones.edit', [$smartphone->id]) }}" class='btn btn-outline-secondary btn-sm'>
                            <i class="fas fa-edit"></i>
                        </a>
                        {{ Form::button('
                        <i class="fas fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-outline-danger btn-sm', 'onclick' => "return confirm('Are
                        you sure?')"]) }}
                    </div>
                    {{ Form::close() }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>