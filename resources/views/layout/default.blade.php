<!DOCTYPE html>
<html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale=1">


<!-- Latest compiled and minified CSS -->

{!! Html::style('css/bootstrap.css') !!}
{!! Html::style('css/bootstrap-theme.css') !!}
<!-- Optional theme
<link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" href="./css/bootstrap-theme.css">
<link rel="stylesheet" href="./css/bootstrap-theme.min.css">-->
<title>Blog Post - Start Bootstrap Template</title>

{!! Html::script('js/jquery.js') !!}

{!! Html::script('js/bootstrap.js') !!}

{!! Html::script('js/script.js') !!}
<!--<script type="text/javascript" src="./js/bootstrap.min.js"></script>-->
{!! Html::style('css/style.css') !!}


</head>

<body>
     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>

            </div>
            <!-- /.navbar-collapse -->
            </div>
       
        <!-- /.container -->
    </nav>

<a class="add btn btn-danger" href="new" role="button">Add Post</a>



@yield('content');

        <footer class="copyright">
            <div class="row">
                <div class="col-lg-12">
                    <p>We love copyrights</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>


</body>
</html>