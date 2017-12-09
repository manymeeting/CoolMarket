<!DOCTYPE HTML>
<html>

<head>
    <title>CoolMarket - About Us</title>


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
            $("#nav_about").addClass("active");
        });
    </script>
    <!-- /FACEBOOK WIDGET -->
    <div class="global-wrap">
        <?php require("./includes/cm_header.php"); ?>

        <div class="container">
            <h1 class="page-title">About Us</h1>
        </div>




        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p class="text-bigger">Cool Market is where style meets savings,  a premier flash sale site featuring top brands at incredible savings, we’re giving you even more ways to shop.</p>
                    <p class="text-bigger">Whether in-store, online or on the go with our mobile apps, shopping your way is easier (and better) than ever!</p>
                </div>
            </div>
            <div class="gap"></div>
        </div>
        <div class="bg-holder">
            <div class="bg-parallax" style="background-image:url(img/backgrounds/beach.jpg);"></div>
            <div class="bg-mask"></div>
            <div class="bg-holder-content">
                <div class="container">
                    <div class="gap gap-big text-white">
                        <div class="row">
                            <div class="col-md-10">
                                <h2>About Our Brand</h2>
                                <p class="text-bigger">CoolMarket is your one-stop online marketplace. And now that we are online, we hope we can serve you even better—giving you more ways to shop, wherever you may be.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="gap"></div>
            <h2>Key Facts</h2>
            <div class="row">
                <div class="col-md-10">
                    <p class="text-bigger mb30">Ongoing catalog of brands you love at amazing prices.New arrivals are added every week, so check back often!Easy to search and shop all your favorite styles</p>
                </div>
            </div>
            <div class="row row-wrap" data-gutter="60">
                <div class="col-md-3">
                    <div class="thumb text-center">
                        <header class="thumb-header">
                            <img class="round" src="img/memberA.png" alt="Image Alternative text" title="AMaze" />
                        </header>
                        <div class="thumb-caption">
                            <h5 class="thumb-title">Mutian Wang</h5>
                            <p class="thumb-meta text-small">Project Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb text-center">
                        <header class="thumb-header">
                            <img class="round" src="img/memberD.png" alt="Image Alternative text" title="Chiara" />
                        </header>
                        <div class="thumb-caption">
                            <h5 class="thumb-title">Wenqi Wang</h5>
                            <p class="thumb-meta text-small">Back-End Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb text-center">
                        <header class="thumb-header">
                            <img class="round" src="img/memberE.jpg" alt="Image Alternative text" title="Bubbles" />
                        </header>
                        <div class="thumb-caption">
                            <h5 class="thumb-title">Na Yue</h5>
                            <p class="thumb-meta text-small">Back-End Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb text-center">
                        <header class="thumb-header">
                            <img class="round" src="img/memberE.jpg" alt="Image Alternative text" title="Gamer Chick" />
                        </header>
                        <div class="thumb-caption">
                            <h5 class="thumb-title">Ruifeng Sheng</h5>
                            <p class="thumb-meta text-small">Designer, Front-End Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb text-center">
                        <header class="thumb-header">
                            <img class="round" src="img/memberD.png" alt="Image Alternative text" title="Afro" />
                        </header>
                        <div class="thumb-caption">
                            <h5 class="thumb-title">Nancy Xiao</h5>
                            <p class="thumb-meta text-small">Database Developer</p>
                        </div>
                    </div>
                </div>
            </div>
            <h2>Want to Join Our Team?</h2>
            <div class="row">
                <div class="col-md-10">
                    <p class="text-bigger mb30">Nascetur metus morbi nibh magnis semper elit proin vivamus hac vivamus ultricies hac nulla sodales himenaeos luctus nascetur lacus sed placerat penatibus sociosqu lectus semper tincidunt pellentesque volutpat egestas porttitor</p>
                </div>
            </div>
            <div class="gap"></div>
        </div>
        <div class="container">
        </div>

        <?php require("./includes/cm_footer.php"); ?>
        <?php require("./includes/cm_body_resources.php"); ?>
    </div>
</body>

</html>


