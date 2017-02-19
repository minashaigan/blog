@extends('layouts.master')

@section('content')
<style>
    .portfolio-item .item h3 {
        display: inline-block;
        text-shadow: 1px 1px 10px rgba(0,0,0,0.7);
        -moz-transition: all .25s ease-in-out;
        -o-transition: all .25s ease-in-out;
        -webkit-transition: all .25s ease-in-out;
        transition: all .25s ease-in-out;
    }
    .portfolio-item:hover .item h3:after {
        -moz-box-shadow: 0 0 0 2px #fff;
        -webkit-box-shadow: 0 0 0 2px #fff;
        box-shadow: 0 0 0 2px #fff;
        -moz-transition: all .25s ease-in-out;
        -o-transition: all .25s ease-in-out;
        -webkit-transition: all .25s ease-in-out;
        transition: all .25s ease-in-out;
        -moz-transform: scaleX(1);
        -ms-transform: scaleX(1);
        -webkit-transform: scaleX(1);
        transform: scaleX(1);
    }
    .portfolio-item .item h3:after {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        bottom: 0;
        left: 0;
        -moz-box-shadow: 0 0 0 0 rgba(255,255,255,0);
        -webkit-box-shadow: 0 0 0 0 rgba(255,255,255,0);
        box-shadow: 0 0 0 0 rgba(255,255,255,0);
        -moz-border-radius: 1px;
        -webkit-border-radius: 1px;
        border-radius: 1px;
        -moz-transition: all .25s ease-in-out;
        -o-transition: all .25s ease-in-out;
        -webkit-transition: all .25s ease-in-out;
        transition: all .25s ease-in-out;
        -moz-transform: scaleX(0);
        -ms-transform: scaleX(0);
        -webkit-transform: scaleX(0);
        transform: scaleX(0);
    }
    .sw--padding-hor-4 {
        padding-left: 20px;
        padding-right: 20px;
    }
    .sw--padding-vert-2 {
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .sw--margin-0 {
        margin: 0px;
    }
    .text-white {
        color: white;
    }
    .sw--font-size-28 {
        font-size: 2rem;
    }
    .weight-light {
        font-weight: 300;
    }

    h3 {
        font-size: 1.571rem;
        font-weight: bold;
        line-height: 1.3;
        margin: 0 0 1.2rem 0;
        -webkit-font-smoothing: antialiased;
        zoom: 1;
        margin: 0;
        padding: 0;
        border: 0;
        font: inherit;
        font-size: 100%;
        vertical-align: baseline;
        display: block;
        font-size: 1.17em;
        -webkit-margin-before: 1em;
        -webkit-margin-after: 1em;
        -webkit-margin-start: 0px;
        -webkit-margin-end: 0px;
        font-weight: bold;
    }
    .portfolio-item .item {
        display: inline-table;
        position: absolute;
        z-index: 20;
        top: 50%;
        left: 50%;
        text-align: center;
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
    .item {
        margin: 0;
        padding: 0;
        border: 0;
        font: inherit;
        font-size: 100%;
        vertical-align: baseline;
    }
    .portfolio-item {
        font-size: 100%;
    }
    .portfolio-item .item h3:before {
        content: "";
        position: absolute;
        width: 30%;
        height: 2px;
        bottom: -2px;
        left: 35%;
        background-color: white;
        -moz-transform: scaleX(0.8);
        -ms-transform: scaleX(0.8);
        -webkit-transform: scaleX(0.8);
        transform: scaleX(0.8);
        -moz-box-shadow: 2px 0 0 0 #fff;
        -webkit-box-shadow: 2px 0 0 0 #fff;
        box-shadow: 2px 0 0 0 #fff;
    }
    .sw--font-size-28 {
         font-size:28px;
    }
</style>
<!-- About -->
<section id="about" class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>3D Mad Max is the perfect Model for your next project!</h2>
                <p class="lead">This Model features some wonderful Architected Design to <a target="_blank" href="http://join.deathtothestockphoto.com/">Death to the Stock Photo</a>.</p>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- Services -->
<!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
<section id="services" class="services bg-primary">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-10 col-lg-offset-1">
                <h2>Our Services</h2>
                <hr class="small">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-history fa-stack-1x text-primary"></i>

                            </span>
                            <h4>
                                <strong>Store</strong>
                            </h4>
                            <p>You can Wonderfull Models to buy</p>
                            <a href="{{URL::route('store')}}" class="btn btn-light">View More</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-camera fa-stack-1x text-primary"></i>
                            </span>
                            <h4>
                                <strong>Gallery</strong>
                            </h4>
                            <p>Our works gather together</p>
                            <a href="#" class="btn btn-light">View More</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-flask fa-stack-1x text-primary"></i>
                            </span>
                            <h4>
                                <strong>Projects</strong>
                            </h4>
                            <p>We still go on and go on</p>
                            <a href="#" class="btn btn-light">View More</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="glyphicon glyphicon-blackboard fa-stack-1x text-primary"></i>
                            </span>
                            <h4>
                                <strong>Blog</strong>
                            </h4>
                            <p>3D Models news and innovations</p>
                            <a href="{{URL::route('blog')}}" class="btn btn-light">View More</a>
                        </div>
                    </div>
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<!-- Portfolio -->
<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h2>Our Work</h2>
                <hr class="small">
                <div class="row">
                    <div class="col-md-6">
                        <div class="portfolio-item">
                            <a href="#">
                                <img class="img-portfolio img-responsive" src="img/portfolio-1.jpg">
                            </a>
                            <div class="item">
                                <h3 class="weight-light text-white sw--font-size-28 sw--margin-0 sw--padding-vert-2 sw--padding-hor-4">Miniatures</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="portfolio-item">
                            <a href="#">
                                <img class="img-portfolio img-responsive" src="img/208x156_584477_652939_1459313067.jpg">
                            </a>
                            <div class="item">
                                <h3 class="weight-light text-white sw--font-size-28 sw--margin-0 sw--padding-vert-2 sw--padding-hor-4">Art</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="portfolio-item">
                            <a href="#">
                                <img class="img-portfolio img-responsive" src="img/625x465_9184091_6578393_1459350203.jpg">
                            </a>
                            <div class="item">
                                <h3 class="weight-light text-white sw--font-size-28 sw--margin-0 sw--padding-vert-2 sw--padding-hor-4">Games</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="portfolio-item">
                            <a href="#">
                                <img class="img-portfolio img-responsive" src="img/625x465_516769_579032_1452799930.jpg">
                            </a>
                            <div class="item">
                                <h3 class="weight-light text-white sw--font-size-28 sw--margin-0 sw--padding-vert-2 sw--padding-hor-4">Tech</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row (nested) -->
                <a href="#" class="btn btn-dark">View More Items</a>
            </div>
            <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
@endsection
