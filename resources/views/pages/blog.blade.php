<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../img/Designcontest-Outline-3D.ico">
    <title>3D Mad Max</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="../css/agency.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .navbar-custom {
            background-color: #337ab7;;
        }

        .about {
            padding-bottom: 5px;
            padding-top: 100px;
        }

        #search > input[type=text] {
            width: 130px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            background-color: white;
            background-image: url('../img/searchcopy.jpg');
            background-size: 25px 25px;
            background-position: 10px 10px;
            background-repeat: no-repeat;
            padding: 12px 20px 12px 40px;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in-out;
        }

        #search > input[type=text]:focus {
            background-image: url('../img/search.jpg');
            background-size: 25px 25px;
            width: 70%;
        }

        .search {

            margin-bottom: 10px;
        }

        .dropdown .btn-primary {
            font-weight: 500;
            padding-top: 14px;
            padding-bottom: 14px;
            vertical-align: middle;
        }

        .dropdown .btn-primary:hover, .btn-primary:focus, .btn-primary:visited, .btn-primary:active {
            background-color: rgba(254, 209, 54, 0.81);
            border-color: rgba(254, 209, 54, 0.81);
        }

        .dropdown-menu {
            min-width: 170px;
        }
        section {
            padding-top: 5px;
            padding-bottom: 5px;
        }
        .post-content {
            top:0;
            left:0;
            position: absolute;
        }

        .thumbnail{
            position:relative;
        }
        .thumbnail>p {
            height: 70px;
        }
        .thumbnail .post-content {
            margin: 0;
            background-color: #fff;
            color:rgb(51, 122, 183);
        }
        .thumbnail .comment .comment_no {
            float: left;
        }
        .thumbnail .comment .date {
            float:right;
        }
        .thumbnail .comment {
            margin:5px 10px;
            padding:20px 10px;
            padding-top: 5px;
            vertical-align: middle;
        }
        .thumbnail>a {
            color:#000;
            text-decoration: none;
        }
        .thumbnail>.post-content {
            color:#337ab7;
            text-decoration: none;
            padding:5px 10px;
        }
        .thumbnail>.post-content:active,.thumbnail>.post-content:focus,.thumbnail>.post-content:hover {
            color:#fff;
            background-color: #fed136;
            padding:5px 10px;
        }
        ul.social-buttons li a {
            background-color: #337ab7;
        }
        nav .load {
            display: inline-block;
            padding: 21px 80px;
            border-radius: 159px;
            outline: none;
            background: rgb(51, 122, 183);
            color: #fff;
            text-decoration: none;
            margin: 10px 20px;
        }
        nav>.load>a {
            text-decoration: none;
        }
        nav a:active,nav a:focus,nav a:hover {
            color: #fed136;;
        }
        .thumbnail .Art{
            background-color: #d90051;
            color: #fff;
        }
        .thumbnail>.Art:focus,.thumbnail>.Art:hover,.thumbnail>.Art:active {
            background-color: #fff;
            color: #d90051;
        }
        .thumbnail .Games{
            background-color: #00a21d;
            color: #fff;
        }
        .thumbnail>.Games:focus,.thumbnail>.Games:hover,.thumbnail>.Games:active {
            background-color: #fff;
            color: #00a21d;
        }
        .thumbnail .Accessories{
            background-color: #9a0ba2;
            color: #fff;
        }
        .thumbnail>.Accessories:focus,.thumbnail>.Accessories:hover,.thumbnail>.Accessories:active {
            background-color: #fff;
            color: #9a0ba2;
        }
    </style>
</head>

<body id="page-top" class="index">

<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="{{URL::route('home')}}" title="3D Mad Max">3D Mad Max</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="{{URL::route('store')}}" >Store</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{URL::route('store')}}">Gallery</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{URL::route('store')}}">Project</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{URL::route('blog')}}">Blog</a>
                </li>
            </ul>

        </div>

        <!-- /.navbar-collapse -->
    </div>
{{--<hr>--}}
<!-- /.container-fluid -->
</nav>
<!-- About -->
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>The 3D Mad Max Blog</h2>
                <p class="lead">3D Printing News and Innovation</p>
            </div>
        </div>
        <!-- /.row -->
        <hr>
    </div>
    <!-- /.container -->
</section>
<section class="search">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select Category
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        @foreach($categories as $category)
                            <li><a href="{{URL::route('blog', [$category->category])}}">{{$category->category}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-10">
                <form id="search"  method="get" action="{{URL::route('search')}}">
                    <input type="text" name="category" placeholder="Search..."/>
                </form>
            </div>
        </div>
        <!-- /.row -->
        <hr>
    </div>
    <!-- /.container -->
</section>
<section class="blog">
    <div class="container">
        <div class="row text-center">
            @foreach($blogs as $blog)
            <div class="col-md-4 col-sm-6">

                <div class="thumbnail">
                    <a href="#" class="caption post-content {{$blog -> category}}">{{$blog -> category}}</a>
                    <a href="">
                        <img src="../img/access.jpg" width="360" height="360"/>
                        <h3>{{$blog -> blog_name}}</h3>
                    </a>
                    <p>{{ str_limit($blog -> content,90) }}</p>
                    <div class="comment">
                        <hr>
                        <span class="comment_no">
                        <a href="#"><span class="glyphicon glyphicon-heart-empty"></span></a>
                        12</span>
                        <span class="date"><?php echo \Carbon\Carbon::createFromTimeStamp(strtotime($blog -> created_at))->diffForHumans() ?></span>
                    </div>
                </div>

            </div>
            @endforeach
        </div>

        <nav  style="display: block;text-align:center">
            <a href="#" class="load">Load More</a><br>
            <span class="pagination-current-page">Page <span class="pagination-active-page">1</span> of 66</span>
        </nav>
        <!-- /.row -->
        <hr>
    </div>

    <!-- /.container -->
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; Your Website 2016</span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-telegram"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li><a href="#">Privacy Policy</a>
                    </li>
                    <li><a href="#">Terms of Use</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- jQuery -->
<script src="../js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

<!-- Contact Form JavaScript -->
<script src="../js/jqBootstrapValidation.js"></script>
<script src="../js/contact_me.js"></script>

<!-- Theme JavaScript -->
<script src="../js/agency.min.js"></script>
</body>
</html>