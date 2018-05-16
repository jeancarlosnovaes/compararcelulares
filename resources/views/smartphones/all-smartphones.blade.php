@extends( 'layouts.app' ) 
@section( 'content' )
<section class="content">
    <div class="container-fluid">
        <!-- Small Box (Stat card) -->
        <h3 class="text-center mt-4 mb-4">{{ $smartphones[0]->brand->name }}</h3>
        <div class="row">
            @foreach( $smartphones as $smartphone )
                <div class="col-md-4">
                    <!-- Widget: user widget style 1 -->
                    <div class="card card-widget">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="brand-widget text-center">
                            <img class="brand-img" src="../{{ $smartphone->product_image }}" alt="{{ $smartphone->product_name }}">
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <!-- /.col -->
                                <div class="col align-self-center">
                                    <div class="description-block">
                                        <a href="{{ url( 'smartphones/' . $smartphone->brand->name . '/' . $smartphone->slug ) }}"><h5 class="description-header">{{ $smartphone->product_name }}</h5></a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
                <!-- /.col -->
            @endforeach
        </div>
    </div>
</section>
@endsection