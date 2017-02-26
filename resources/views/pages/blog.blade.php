<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/img/Designcontest-Outline-3D.ico">
    <title>3D Mad Max</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="/css/agency.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>--}}
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
    <link rel="stylesheet" type="text/css" href="/css/slick.css">
    <link rel="stylesheet" type="text/css" href="/css/slick-theme.css">
    <style type="text/css">
        html, body {
            margin: 0;
            padding: 0;
        }

        * {
            box-sizing: border-box;
        }

        .slider {
            width: 100%;
            margin: 100px auto;
        }

        .slick-slide {
            margin: 0 20px;
        }

        .slick-slide .inside_slider {
            width: 100%;
        }

        .slick-prev:before,
        .slick-next:before {
            color: black;
        }
    </style>
    <style>
        /*style slideshow*/
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            width: 100%;
            margin: auto;
        }
        .carousel {
            display: -webkit-box;
            text-align: center;
        }
        .carousel-inner>.item {
            height:500px;
            width: 100%;
            margin: auto;
        }
        .carousel-control .glyphicon-chevron-left {
            top: 90%;
        }
        .carousel-control .glyphicon-chevron-right {
            top: 90%;
        }
    </style>
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
            background-image: url('/img/searchcopy.jpg');
            background-size: 25px 25px;
            background-position: 10px 10px;
            background-repeat: no-repeat;
            padding: 12px 20px 12px 40px;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in-out;
        }

        #search > input[type=text]:focus {
            background-image: url('/img/search.jpg');
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
        .thumbnail.all {
            height: 45px;
        }
        .thumbnail>a>h3 {
            margin-left:10px;
        }
        .like {
            color: #fed136;
        }
    </style>
    <style>
        /**/
        .background {
            background: url(/img/portfolio-1.jpg) no-repeat   ;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            width: 100%;
            height: 500px;
            padding: 30px;
        }
        .transbox {
            width: 40%;
            float: left;
            background-color: #ffffff;
            opacity: 0.9;
            filter: alpha(opacity=60); /* For IE8 and earlier */
            height: 400px;
            margin-left: 5%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        div.transbox h3 {
            text-align: left;
            margin: 3%;
            color: #000000;
        }
        div.transbox p {
            margin: 1%;
            color: #000000;
            text-align: left;
            display: table;
        }
        /*recent part*/
        .recent a>img {
            margin: 0;
            width: 250px;
            height: 250px;
        }
        .recent a>h3 {
            position: absolute;
            top:10px;
            left: 260px;
        }
        .recent p {
            position: absolute;
            top:60px;
            left: 260px;
            display: inline-block;
        }
        /*#recent_line{*/
            /*margin-top: 0;*/
        /*}*/

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
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
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
                            <li><a href="{{URL::route('blog', [$category->category_name])}}">{{$category->category_name}}</a></li>
                        @endforeach
                            <li><hr style="margin:2px;"></li>
                            <li><a href="{{URL::route('blog', ['All'])}}">All</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10">
                <form id="search"  method="get" action="{{URL::route('search')}}" >
                    <input type="text" name="search" placeholder="Search..."/>
                </form>
                {{--@foreach($tags_search as $tag)--}}
                    <div class="tags">
                        @if($tags_search)
                            <style>
                                .tags {
                                    margin: 10px 5px;
                                    padding: 4px 20px;
                                    background-color: #d7ebf6;
                                    color: #337ab7;
                                    border-radius: 159px;
                                    display: inline-block;
                                }
                            </style>
                        {{$tags_search}}
                            @endif
                    </div>
                {{--@endforeach--}}
                </div>
        </div>
    </div>
        <!-- /.row -->
        <hr>


    <!-- /.container -->
</section>
<section class="blog">
    <div class="container">
        @if($important)
        <h3 style="font-family:Droid Serif">Top Post</h3>
        <div class="row text-left">
            <div class="col-md-12 col-sm-6">
                <br>
                <?php $count = count($important) ?>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        @for($i =1;$i<$count;$i++)
                            <li data-target="#myCarousel" data-slide-to="$i"></li>
                        @endfor
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <?php $count = 1 ?>
                        @foreach($important as $imp)
                            @if($count)
                        <div class="item active">
                            <a href="{{URL::route('posts',[$imp->post_id])}}">
                                <div class="background">
                                <div class="transbox">
                                    {{--<div class="item">--}}
                                        {{--<img src="img/portfolio-1.jpg" alt="Chania">--}}
                                    {{--</div>--}}
                                <h3>{{$imp->post_name}}</h3>
                                <p>{{ str_limit($imp -> content ,500) }}</p>
                                </div>
                                    </div>
                            </a>
                        </div>
                                <?php $count =0;?>
                            @else
                        <div class="item">
                            <a href="{{URL::route('posts',[$imp->post_id])}}">
                            <div class="background">
                            <div class="transbox" style="text-align: left;padding-left:5px ">
                                {{--<div class="item">--}}
                                    {{--<img src="img/portfolio-1.jpg" alt="Chania">--}}
                                {{--</div>--}}
                                <h3>{{$imp->post_name}}</h3>
                                <p>{{ str_limit($imp -> content ,500) }}</p>
                            </div>
                                </div>
                                </a>
                            {{--<a href="{{URL::route('posts',[$imp->post_id])}}">--}}
                                {{--<div class="row text-center">--}}
                                    {{--<div class="col-md-6 col-sm-3">--}}
                                        {{--<img src="../img/portfolio-1.jpg">--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-6 col-sm-3" class="top_des">--}}
                                        {{--<h3>{{$imp -> post_name}}</h3>--}}
                                        {{--<p>{{ str_limit($imp -> content ,120) }}</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        </div>
                                @endif
                        @endforeach
                    </div>
                        <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                </div>
            </div>
        </div>
        <hr>
        @endif
        @if($recents)
        <div class="row text-left">
            <h3 style="padding-left: 15px;font-family:Droid Serif">Recent Post</h3>
            <section class="regular slider">
            @foreach($recents as $recent)
                <div class="col-md-6 col-sm-6">
                    <div>
                        <div class="inside_slider">
                            <div class="thumbnail recent">
                                <a href="{{URL::route('blog',[$recent->categories->category_name])}}" class="caption post-content {{$recent->categories->category_name}}">{{$recent->categories->category_name}}</a>
                                <a href="{{URL::route('posts',[$recent->post_id])}}">
                                    <img src="/img/access.jpg" width="360" height="360"/>
                                    <h3>{{$recent -> post_name}}</h3>
                                </a>
                                <p>{{ str_limit($recent -> content ,90) }}</p>
                                <div class="comment">
                                    <hr id="recent_line">
                                <span class="comment_no">
                                    <a href="{{URL::route('posts/like',[$recent->post_id])}}" class="like heart"><i  class="glyphicon glyphicon-heart-empty"></i></a>
                                    {{----}}
                                    <span class="count_like"><?php echo count($recent->likes) ?></span>
                                </span>
                                    <span class="date"><?php echo \Carbon\Carbon::createFromTimeStamp(strtotime($recent -> created_at))->diffForHumans() ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach

            </section>
        </div>
        <hr>
        <h3 style="padding-left: 15px;font-family:Droid Serif">All</h3>
        @endif

        <div class="row text-left">

            @foreach($blogs as $blog)
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="{{URL::route('blog',[$blog->categories->category_name])}}" class="caption post-content {{$blog->categories->category_name}}">{{$blog->categories->category_name}}</a>
                    <a href="{{URL::route('posts',[$blog->post_id])}}">
                        <img src="/img/access.jpg" width="360" height="360"/>
                        <h3>{{$blog -> post_name}}</h3>
                    </a>
                    <p class="all">{{ str_limit($blog -> content ,50) }}</p>
                    <div class="comment">
                        <hr>
                        <span class="comment_no">
                            <a href="{{URL::route('posts/like',[$blog->post_id])}}" class="like heart"><i  class="glyphicon glyphicon-heart-empty"></i></a>
                            {{----}}
                            <span class="count_like"><?php echo count($blog->likes) ?></span>
                        </span>
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
<script src="/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

<!-- Contact Form JavaScript -->
<script src="/js/jqBootstrapValidation.js"></script>
<script src="/js/contact_me.js"></script>

<!-- Theme JavaScript -->
<script src="/js/agency.min.js"></script>

<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="/js/slick.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $(document).on('ready', function() {
        $(".regular").slick({
            dots: true,
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 2
        });
    });
</script>
<script>
    $('.heart').click(function(){
        $(this).find('i').toggleClass('glyphicon-heart-empty').toggleClass('glyphicon-heart');
    });
    $('#menu-toggle').click( function(){
        $(this).find('i').toggleClass('glyphicon-arrow-right').toggleClass('glyphicon-arrow-left');
    });
</script>
<script src="/js/tag-it.js" type="text/javascript" charset="utf-8"></script>

</body>
</html>