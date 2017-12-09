<!DOCTYPE HTML>
<html>

<head>
    <title>CoolMarket - News</title>
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
            $("#nav_news").addClass("active");
        });
    </script>
    <!-- /FACEBOOK WIDGET -->
    <div class="global-wrap">
        <?php require("./includes/cm_header.php"); ?>
        <div class="container">
            <h1 class="page-title">News</h1>
        </div>
        <div class="container">
            <!-- START BLOG POST -->
            <div class="article post">
                <header class="post-header">
                    <a class="hover-img" href="#">
                        <img src="img/backgrounds/beach.jpg" alt="Image Alternative text" title="196_365" /><i class="fa fa-link box-icon-# hover-icon round"></i>
                    </a>
                </header>
                <div class="post-inner">
                    <h4 class="post-title"><a class="text-darken" href="#">Image Sales Plan</a></h4>
                    <ul class="post-meta">
                        <li><i class="fa fa-calendar"></i><a href="#">15 October, 2014</a>
                        </li>
                        <li><i class="fa fa-user"></i><a href="#">Joseph Hudson</a>
                        </li>
                        <li><i class="fa fa-tags"></i><a href="#">Digital</a>, <a href="#">Travel</a>, <a href="#">Design</a>
                        </li>
                        <li><i class="fa fa-comments"></i><a href="#">8 Comments</a>
                        </li>
                    </ul>
                    <p class="post-desciption">Ut luctus rhoncus proin mattis aenean cubilia molestie velit tincidunt hac vehicula nisl mi metus dictum fames ullamcorper eget velit interdum mauris nam malesuada purus fames consectetur mi per quam volutpat erat ad semper risus integer cubilia vitae natoque dignissim tempus dignissim venenatis fringilla nec varius ante aptent augue dictumst</p>
                </div>
            </div>
            <!-- END BLOG POST -->
            <!-- START BLOG POST -->
            <div class="article post">
                <header class="post-header">
                    <blockquote>A ante ipsum curabitur diam nascetur gravida penatibus augue arcu hac feugiat sapien quis fames congue ultricies himenaeos metus maecenas</blockquote>
                </header>
                <div class="post-inner">
                    <h4 class="post-title"><a class="text-darken" href="#">Quoute Sales Plan</a></h4>
                    <ul class="post-meta">
                        <li><i class="fa fa-calendar"></i><a href="#">08 October, 2014</a>
                        </li>
                        <li><i class="fa fa-user"></i><a href="#">Alison Mackenzie</a>
                        </li>
                        <li><i class="fa fa-tags"></i><a href="#">Lifestyle</a>, <a href="#">Design</a>
                        </li>
                        <li><i class="fa fa-comments"></i><a href="#">9 Comments</a>
                        </li>
                    </ul>
                    <p class="post-desciption">Nam conubia suscipit lacinia facilisis pulvinar orci in eget lacinia pulvinar habitasse vehicula turpis luctus sagittis montes interdum posuere parturient nostra odio ridiculus lacinia erat semper mattis auctor arcu per etiam aptent consequat interdum tristique habitasse aenean quam pulvinar lacus tempus ultricies nunc enim est orci ultrices facilisi euismod conubia</p>
                </div>
            </div>
            <!-- END BLOG POST -->
            <!-- START BLOG POST -->
            <div class="article post">
                <header class="post-header">
                    <div class="fotorama" data-allowfullscreen="true">
                        <img src="img/backgrounds/keyboard" alt="Image Alternative text" title="196_365" />
                        <img src="img/backgrounds/bridge" alt="Image Alternative text" title="196_365" />
                        <img src="img/backgrounds/taxi" alt="Image Alternative text" title="196_365" />
                    </div>
                </header>
                <div class="post-inner">
                    <h4 class="post-title"><a class="text-darken" href="#">Slider Sales Plan</a></h4>
                    <ul class="post-meta">
                        <li><i class="fa fa-calendar"></i><a href="#">27 September, 2014</a>
                        </li>
                        <li><i class="fa fa-user"></i><a href="#">John Mathis</a>
                        </li>
                        <li><i class="fa fa-tags"></i><a href="#">Lifestyle</a>, <a href="#">Design</a>, <a href="#">Travel</a>
                        </li>
                        <li><i class="fa fa-comments"></i><a href="#">9 Comments</a>
                        </li>
                    </ul>
                    <p class="post-desciption">Mus eros sit ipsum potenti enim faucibus nascetur ante nostra ligula tempus turpis senectus hac nibh conubia sociosqu nostra interdum arcu convallis faucibus morbi montes pharetra aliquet proin ultricies urna tristique dictumst amet tempor magnis nostra enim vivamus tortor enim id dolor praesent sed rutrum accumsan amet magnis fames imperdiet</p>
                </div>
            </div>
            <!-- END BLOG POST -->
            <!-- START BLOG POST -->
            <div class="article post">
                <header class="post-header"><a class="post-link" href="#">Google.com</a>
                </header>
                <div class="post-inner">
                    <h4 class="post-title"><a class="text-darken" href="#">Link Sales Plan</a></h4>
                    <ul class="post-meta">
                        <li><i class="fa fa-calendar"></i><a href="#">05 September, 2014</a>
                        </li>
                        <li><i class="fa fa-user"></i><a href="#">John Mathis</a>
                        </li>
                        <li><i class="fa fa-tags"></i><a href="#">Typography</a>, <a href="#">Web</a>, <a href="#">Travel</a>
                        </li>
                        <li><i class="fa fa-comments"></i><a href="#">2 Comments</a>
                        </li>
                    </ul>
                    <p class="post-desciption">Porta nam tempor fringilla eleifend per velit nibh faucibus feugiat lacus auctor adipiscing purus cubilia proin vel ornare lectus aptent dolor enim dapibus vulputate hendrerit et penatibus aenean molestie urna risus consequat facilisis vel sollicitudin purus quisque montes pretium taciti mattis laoreet purus vel orci sociosqu quis vivamus purus lorem</p>
                </div>
            </div>
            <!-- END BLOG POST -->
            <!-- START BLOG POST -->
            <div class="article post">
                <header class="post-header">
                    <iframe src="//www.youtube.com/embed/6iHwPfirtUg" frameborder="0" allowfullscreen></iframe>
                </header>
                <div class="post-inner">
                    <h4 class="post-title"><a class="text-darken" href="#">Youtube Sales Plan</a></h4>
                    <ul class="post-meta">
                        <li><i class="fa fa-calendar"></i><a href="#">20 July, 2014</a>
                        </li>
                        <li><i class="fa fa-user"></i><a href="#">Carl Butler</a>
                        </li>
                        <li><i class="fa fa-tags"></i><a href="#">Digital</a>
                        </li>
                        <li><i class="fa fa-comments"></i><a href="#">12 Comments</a>
                        </li>
                    </ul>
                    <p class="post-desciption">Cras nunc ac purus ligula euismod mattis elementum amet mollis metus tellus quam habitasse odio habitasse ultrices dis varius ultrices imperdiet aliquam aliquam etiam malesuada gravida ac ornare condimentum bibendum libero quam montes primis lobortis sem pellentesque enim ornare molestie scelerisque congue bibendum cum scelerisque eu hendrerit himenaeos ad eleifend</p>
                </div>
            </div>
            <!-- END BLOG POST -->
            <!-- START BLOG POST -->
            <div class="article post">
                <header class="post-header">
                    <iframe src="http://player.vimeo.com/video/103721959" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                </header>
                <div class="post-inner">
                    <h4 class="post-title"><a class="text-darken" href="#">Vimeo Sales Plan</a></h4>
                    <ul class="post-meta">
                        <li><i class="fa fa-calendar"></i><a href="#">19 April, 2014</a>
                        </li>
                        <li><i class="fa fa-user"></i><a href="#">Leah Kerr</a>
                        </li>
                        <li><i class="fa fa-tags"></i><a href="#">Travel</a>
                        </li>
                        <li><i class="fa fa-comments"></i><a href="#">11 Comments</a>
                        </li>
                    </ul>
                    <p class="post-desciption">Nulla sagittis morbi posuere aptent nulla quis eget tellus velit velit platea penatibus molestie magna mus metus mus dis sapien amet quam lacus tempor fermentum fringilla aenean rhoncus vehicula adipiscing fringilla ut ad aliquet dignissim habitasse conubia condimentum vehicula magna hendrerit lacinia lectus fames feugiat proin adipiscing eu congue elit</p>
                </div>
            </div>
            <!-- END BLOG POST -->
            <!-- START BLOG POST -->
            <div class="article post">
                <header class="post-header">
                    <iframe width="100%" height="150" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/150793348&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=false"></iframe>
                </header>
                <div class="post-inner">
                    <h4 class="post-title"><a class="text-darken" href="#">Audio Sales Plan</a></h4>
                    <ul class="post-meta">
                        <li><i class="fa fa-calendar"></i><a href="#">21 October, 2013</a>
                        </li>
                        <li><i class="fa fa-user"></i><a href="#">Joseph Watson</a>
                        </li>
                        <li><i class="fa fa-tags"></i><a href="#">Web</a>, <a href="#">Design</a>, <a href="#">Digital</a>
                        </li>
                        <li><i class="fa fa-comments"></i><a href="#">12 Comments</a>
                        </li>
                    </ul>
                    <p class="post-desciption">Eleifend sociosqu varius lobortis nam cras arcu ad quam purus aliquam dictum curabitur cras vehicula cursus nisl et inceptos platea libero nullam luctus volutpat montes cursus sagittis quisque dui hac ipsum elementum felis diam vel cras dignissim bibendum magnis pharetra pharetra ante odio nascetur consequat morbi lorem aliquet himenaeos montes</p>
                </div>
            </div>
            <!-- END BLOG POST -->
            <!-- START BLOG POST -->
            <div class="article post">
                <div class="post-inner">
                    <h4 class="post-title"><a class="text-darken" href="#">Default Sales Plan</a></h4>
                    <ul class="post-meta">
                        <li><i class="fa fa-calendar"></i><a href="#">22 October, 2012</a>
                        </li>
                        <li><i class="fa fa-user"></i><a href="#">Carl Butler</a>
                        </li>
                        <li><i class="fa fa-tags"></i><a href="#">Design</a>, <a href="#">Travel</a>, <a href="#">Digital</a>
                        </li>
                        <li><i class="fa fa-comments"></i><a href="#">6 Comments</a>
                        </li>
                    </ul>
                    <p class="post-desciption">Dapibus rutrum ligula est commodo ante cubilia metus purus facilisi turpis ut duis pulvinar nisl lobortis commodo condimentum natoque nisi maecenas non parturient eu vitae vitae dignissim a parturient interdum aliquam potenti consequat orci metus tortor lobortis torquent massa mattis euismod tellus felis aliquam phasellus scelerisque sem lacus eleifend integer</p>
                </div>
            </div>
        </div>

        <div class="gap"></div>
        <?php require("./includes/cm_footer.php"); ?>
        <?php require("./includes/cm_body_resources.php"); ?>
    </div>
</body>

</html>


