<!DOCTYPE HTML>
<html>

<head>
    <title>Cool Market</title>


    <?php require("./includes/cm_head_resources.php"); ?>
</head>

<body>

    <!-- FACEBOOK WIDGET -->
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

        $(document).ready(function(){
            $("#nav_home").addClass("active");
        });
    </script>
    <!-- /FACEBOOK WIDGET -->
    <div class="global-wrap">
        <?php require("./includes/cm_header.php"); ?>
       
        <!-- TOP AREA -->
        <div class="top-area show-onload">
            <div class="bg-holder full">
                <div class="bg-mask"></div>
                <div class="bg-img" style="background-image:url(img/2048x1365.png);"></div>
                <video class="bg-video hidden-sm hidden-xs" preload="auto" autoplay="true" loop="loop" muted="muted" poster="img/video-bg.jpg">
                    <source src="media/loop.webm" type="video/webm" />
                    <source src="media/loop.mp4" type="video/mp4" />
                </video>
                <div class="bg-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-7">
                                <!-- START TESTIMONIAL -->
                                <div class="testimonial testimonial-color text-white mt50 hidden-sm hidden-xs">
                                    <div class="testimonial-inner">
                                        <blockquote>
                                            <p>Welcome to our online market place!</p>
                                        </blockquote>
                                    </div>
                                    <div class="testimonial-author">
                                        <img src="img/50x50.png" alt="Image Alternative text" title="Gamer Chick" />
                                        <p class="testimonial-author-name">Mutian Wang, Nancy, Ruifeng, Vencci, Yue</p><cite>from <a class="text-udl" href="#">CMPE272</a> San Jose State University</cite>
                                    </div>
                                </div>
                                <!-- END TESTIMONIAL -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-front full-height">
                    <div class="container rel full-height">
                        <div class="search-tabs search-tabs-bg search-tabs-bottom">
                            <div class="tabbable">
                                <ul class="nav nav-tabs" id="myTab">
                                    <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-smile-o"></i> <span >Products</span></a>
                                    </li>
                                    <li><a href="#tab-5" data-toggle="tab"><i class="fa fa-bolt"></i> <span >Activities</span></a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab-1">
                                        <h2>Search Products in Our Market</h2>
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-gift input-icon"></i>
                                                        <label>What are you looking for?</label>
                                                        <input class="typeahead form-control" placeholder="Product Name, Brand, or Model" type="text" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-daterange" data-date-format="M d, D">
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <div class="form-group form-group-lg">
                                                                    <label>Select Market</label>
                                                                    <select class="form-control" name="marketType" >
                                                                        <option selected="selected">Mutian's Market</option>
                                                                        <option>Nancy's Market</option>
                                                                        <option>Ruifeng's Market</option>
                                                                        <option>Vencci's Market</option>
                                                                        <option>Yue's Market</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary btn-lg" type="submit">Search for Products</button>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="tab-5">
                                        <h2>Search for Activities</h2>
                                        <form>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                        <label>Where are you going?</label>
                                                        <input class="typeahead form-control" placeholder="City, Airport, Point of Interest or U.S. Zip Code" type="text" />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-daterange" data-date-format="M d, D">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                    <label>From</label>
                                                                    <input class="form-control" name="start" type="text" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                    <label>To</label>
                                                                    <input class="form-control" name="end" type="text" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary btn-lg" type="submit">Search for Activities</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END TOP AREA  -->

        <div class="gap"></div>


        <div class="container">
            <div class="text-center row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="row row-wrap" data-gutter="60">
                        <div class="col-md-4">
                            <div class="thumb">
                                <header class="thumb-header"><i class="fa fa-dollar box-icon-gray box-icon-center round box-icon-border box-icon-big animate-icon-top-to-bottom"></i>
                                </header>
                                <div class="thumb-caption">
                                    <h5 class="thumb-title"><a class="text-darken" href="#">Best Price Guarantee</a></h5>
                                    <p class="thumb-desc">Facilisis sollicitudin dolor dignissim pulvinar ultrices nullam vel ultricies phasellus</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumb">
                                <header class="thumb-header"><i class="fa fa-lock box-icon-gray box-icon-center round box-icon-border box-icon-big animate-icon-top-to-bottom"></i>
                                </header>
                                <div class="thumb-caption">
                                    <h5 class="thumb-title"><a class="text-darken" href="#">Trust & Safety</a></h5>
                                    <p class="thumb-desc">Risus porttitor dignissim nibh purus ornare imperdiet nullam convallis mattis</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumb">
                                <header class="thumb-header"><i class="fa fa-send box-icon-gray box-icon-center round box-icon-border box-icon-big animate-icon-top-to-bottom"></i>
                                </header>
                                <div class="thumb-caption">
                                    <h5 class="thumb-title"><a class="text-darken" href="#">Best Destinations</a></h5>
                                    <p class="thumb-desc">Sollicitudin enim ad mauris lacus lectus a iaculis lorem pellentesque</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap gap-small"></div>
        </div>
        <div class="bg-holder">
            <div class="bg-mask"></div>
            <div class="bg-blur" style="background-image:url(img/1024x672.png);"></div>
            <div class="bg-content">
                <div class="container">
                    <div class="gap gap-big text-center text-white">
                        <h2 class="text-uc mb20">Last Minute Deal</h2>
                        <ul class="icon-list list-inline-block mb0 last-minute-rating">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                        </ul>
                        <h5 class="last-minute-title">The Peninsula - New York</h5>
                        <p class="last-minute-date">Fri 14 Mar - Sun 16 Mar</p>
                        <p class="mb20"><b>$120</b> / person</p><a class="btn btn-lg btn-white btn-ghost" href="#">Book Now <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="gap"></div>
            <h2 class="text-center">Top Destinations</h2>
            <div class="gap">
                <div class="row row-wrap">
                    <div class="col-md-3">
                        <div class="thumb">
                            <header class="thumb-header">
                                <a class="hover-img curved" href="#">
                                    <img src="img/800x600.png" alt="Image Alternative text" title="Upper Lake in New York Central Park" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i>
                                </a>
                            </header>
                            <div class="thumb-caption">
                                <h4 class="thumb-title">USA</h4>
                                <p class="thumb-desc">Tellus cum ante sed mus vulputate scelerisque eu</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thumb">
                            <header class="thumb-header">
                                <a class="hover-img curved" href="#">
                                    <img src="img/800x600.png" alt="Image Alternative text" title="lack of blue depresses me" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i>
                                </a>
                            </header>
                            <div class="thumb-caption">
                                <h4 class="thumb-title">Greece</h4>
                                <p class="thumb-desc">Per fermentum etiam nisi platea dui posuere nibh</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thumb">
                            <header class="thumb-header">
                                <a class="hover-img curved" href="#">
                                    <img src="img/800x600.png" alt="Image Alternative text" title="people on the beach" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i>
                                </a>
                            </header>
                            <div class="thumb-caption">
                                <h4 class="thumb-title">Australia</h4>
                                <p class="thumb-desc">Netus eros sed nisl senectus natoque sapien maecenas</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thumb">
                            <header class="thumb-header">
                                <a class="hover-img curved" href="#">
                                    <img src="img/400x300.png" alt="Image Alternative text" title="the journey home" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i>
                                </a>
                            </header>
                            <div class="thumb-caption">
                                <h4 class="thumb-title">Africa</h4>
                                <p class="thumb-desc">Himenaeos proin in natoque porta sociis semper posuere</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require("./includes/cm_footer.php"); ?>
        <?php require("./includes/cm_body_resources.php"); ?>
    </div>
</body>

</html>


