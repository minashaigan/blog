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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        function getMessage($likec){
            $.ajax({
                type:'POST',
                url:'/getmsg'/$likec,
                data:'_token = <?php echo csrf_token() ?>',
                success:function(data){
                    $("#count_like").html(data.likecount);
                }
            });
        }
    </script>
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
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
            background-image: url('./img/searchcopy.jpg');
            background-size: 25px 25px;
            background-position: 10px 10px;
            background-repeat: no-repeat;
            padding: 12px 20px 12px 40px;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in-out;
        }

        #search > input[type=text]:focus {
            background-image: url('./img/search.jpg');
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
        .direction>a:active,.direction>a:focus,.direction>a:hover {
            text-decoration: none;
            color: #fec30f;
        }
        .comment>a:active,.comment>a:focus,.comment>a:hover {
            text-decoration: none;
            color: #fec100;
        }
    </style>
    <style>
        .direction {
            font-size: large;
            margin: 15px;
        }
        .heart:active ,.heart:hover ,.heart:visited ,.heart:focus {
            color: #337ab7;
        }
        .heart {
            color:#000000;
        }
        .comment_no>.like {
            color: #fed136;
        }
    </style>
</head>

<body id="page-top" class="index">
</div>
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
        {{--@foreach($post as $po)--}}
        <div class="row">
            <div class="col-lg-12 text-left">
                <div class="direction">
                    <a href="{{URL::route('blog')}}">blog</a><span style="color: #337ab7;"> / </span><a href="{{URL::route('blog', [$post->categories->category_name])}}">{{$post->categories->category_name}}</a><span style="color: #337ab7;"> /</span><a href="{{URL::route('posts',[$post->post_id])}}">{{$post->post_name}}</a>
                    {{--<i class="material-icons" style="font-size:24px;color:#fed136">chevron_right</i>--}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>{{$post->post_name}}</h2>
                <h5>By <a href="/blog/user/{{$post->user->id}}">{{$post->user->name}}</a></h5>
                <p>{{$post->content}}</p>
            </div>
        </div>
        {{--@endforeach--}}
    </div>
    <!-- /.container -->
</section>
<div class="container">
    <div class="row">
        <hr>
        <h3 style="padding-left: 15px;font-family:'Times New Roman'"><?php echo count($post->comments) ?> <span style="font-family:'Times New Roman';text-transform: capitalize;"> Comment</span></h3>
        <hr>
        <h3 style="padding-left: 15px;font-family:'Times New Roman'"><a href="{{URL::route('posts/like',[$post->post_id])}}" class="like"><span class="glyphicon glyphicon-heart"></span></a><span style="font-family:'Times New Roman';text-transform: capitalize;"> Recommended </span><span style="background-color: #337ab7;color: white;padding: 1px 6px"><?php echo count($likes) ?></span></h3>
        <br>
        <?php $count=0; ?>
        @foreach($comments as $comment)
            <div class="col-lg-12 text-left">
                <div class="comment">
                    <b style="text-transform: capitalize;">{{$comment->user->name}}</b> . <a href="" ><?php echo \Carbon\Carbon::createFromTimeStamp(strtotime($comment -> created_at))->diffForHumans() ?></a>
                    <br>
                    {{$comment->comment}}
                    <br><br>
                    <a href="#reply{{$comment->id}}" id="{{$comment->id}}">Reply</a>
                    <div class="row">
                        <div class="col-lg-1 text-left"></div>
                        @foreach($replies[$count] as $reply)
                            <div class="col-lg-11 text-left">
                                <hr>
                                <b style="text-transform: capitalize;">{{$reply->user->name}}</b> . <a href="" ><?php echo \Carbon\Carbon::createFromTimeStamp(strtotime($reply -> created_at))->diffForHumans() ?></a>
                                <br>
                                {{$reply->comment}}
                                <br><br>
                            </div>
                        @endforeach
                    </div>
                    <?php $count++; ?>

                    <hr>
                    <div class="row">
                        <div class="col-lg-12 text-left" id="reply{{$comment->id}}">
                            <form action="{{URL::route('posts/reply',[$comment->id])}}" method="post" data-toggle="validator"   class="form-horizontal text-left" style="float: left">
                                {{--{{URL::route('posts',[$related->post_id])}}--}}
                                <h3 style="font-family:'Times New Roman';font-size: 15px;text-transform: capitalize">Leave a Reply</h3>
                                {{ csrf_field() }}
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            <li>{{ $errorr }}</li>
                                        </ul>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="name">Name * :</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="Name" id="name" placeholder="Enter name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="email">Email * :</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" name="Email" id="email" placeholder="Enter email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="comment">Comment :</label>
                                    <div class="col-sm-8">
                                        <textarea  class="form-control" id="comment" name="Comment" placeholder="Enter reply" cols="20" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-4 col-sm-8">
                                        <button type="submit" class="btn btn-default">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <hr style="clear: both">
                        </div>
                    </div>
                </div>

            </div>

        @endforeach

        <form action="{{URL::route('posts/comment',[$post->post_id])}}" method="post" data-toggle="validator"   class="form-horizontal text-left" style="float: left">
            {{--{{URL::route('posts',[$related->post_id])}}--}}
            <h3 style="font-family:'Times New Roman';font-size: 15px;text-transform: capitalize">Leave a Comment</h3>
            {{ csrf_field() }}
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-group">
                <label class="control-label col-sm-4" for="name">Name * :</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="Name" id="name" placeholder="Enter name">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="email">Email * :</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" name="Email" id="email" placeholder="Enter email">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="comment">Comment :</label>
                <div class="col-sm-8">
                    <textarea  class="form-control" id="comment" name="Comment" placeholder="Enter comment" cols="20" rows="5"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="container">
    <div class="row">
        <hr>
        <?php $count = 1?>
        @foreach($all as $related)
            <?php
            $relatid=array();
            foreach($related->tags as $relatag){
                array_push($relatid,$relatag->id);
            }
            $id=array();
            foreach($tags as $tag){
                array_push($id,$tag->id);
            }
            $result = array_intersect($id,$relatid);
            ?>
            @if($result && $related->post_id!= $post->post_id)
                @if($count)<h3 style="padding-left: 10px;font-family:'Times New Roman';text-transform: capitalize">Related Post</h3><?php $count =0 ?>@endif
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="{{URL::route('blog',[$related->categories->category_name])}}" class="caption post-content {{$related->categories->category_name}}">{{$related  ->categories->category_name}}</a>
                        <a href="{{URL::route('posts',[$related->post_id])}}">
                            <img src="/img/access.jpg" width="360" height="360"/>
                            <h3>{{$related -> post_name}}</h3>
                        </a>
                        <p class="all">{{ str_limit($related -> content ,50) }}</p>
                        <div class="comment">
                            <hr>
                            <span class="comment_no">
                                       <a href="{{URL::route('posts/like',[$related->post_id])}}" class="like heart"><i  class="glyphicon glyphicon-heart-empty"></i></a>
                                        <span class="count_like"><?php echo count($related->likes) ?></span>
                                    </span>
                            <span class="date"><?php echo \Carbon\Carbon::createFromTimeStamp(strtotime($related -> created_at))->diffForHumans() ?></span>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
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
<script>
    $(document).ready(function(){
        @foreach($comments as $comment)
                    $("#reply"+"{{$comment->id}}").hide();

        @endforeach
    });
    $(document).ready(function(){
        @foreach($comments as $comment)
                $("#"+"{{$comment->id}}").click(function(){
            $("#reply"+"{{$comment->id}}").toggle();
        });
        @endforeach
    });

</script>


</body>
</html>