@extends( 'layouts.app' )
@section( 'content' )
    <!-- Main content -->
    <section class="content">
        <!-- Jumbotron -->
        <div class="jumbotron">
            <div class="error-page">
                <div class="text-center"><i class="fas fa-exclamation-triangle text-warning" style="font-size:20rem;margin-bottom:2rem;"></i></div>
                <h2 class="headline text-warning">500</h2>
                <div class="error-content">
                    <h3>Oops! Something went wrong.</h3>
                    <p>
                        We will work on fixing that right away. Meanwhile, you may
                        <a href="{{ url( '/home' ) }}">return to dashboard</a> or try using the search form.
                    </p>

                    {{-- <form class="search-form">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" name="submit" class="btn btn-warning">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.input-group -->
                    </form> --}}
                </div>
                <!-- /.error-content -->
            </div>
            <!-- /.error-page -->
        </div> <!-- /.jumbotron -->
    </section>
    <!-- /.content -->
@endsection