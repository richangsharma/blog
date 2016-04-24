@extends('layout.default')

@section('content')
<div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-12">

                <!-- Blog Post -->
					@foreach($posts as $post)
						@include('pages.partials.posts',['post' => $post])
					@endforeach

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
               
                    </div>
                </div>

            </div>

           
        <hr>

        <!-- Footer -->
        
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    @endsection