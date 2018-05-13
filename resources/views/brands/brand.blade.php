@extends( 'layouts.app' ) 
@section( 'content' )
<section class="content">
    <div class="container-fluid">
        <!-- Small Box (Stat card) -->
        <h3 class="text-center mt-4 mb-4">Marcas de Celulares</h3>
        <div class="row">
            @foreach( $brands as $brand )
                <div class="col-md-4">
                    <!-- Widget: user widget style 1 -->
                    <div class="card card-widget">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="brand-widget text-center">
                            <img class="brand-img" src="{{ $brand->logo }}" alt="brands">
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <!-- /.col -->
                                <div class="col align-self-center">
                                    <div class="description-block">
                                        <a href="{{ url( 'marcas-de-celulares' ) . '/' . $brand->slug }}"><h5 class="description-header">{{ $brand->count }}</h5></a>
                                        <span class="description-text">Celulares</span>
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