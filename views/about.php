<!DOCTYPE HTML>
<html>

<head>
    <title>Traveler - About Us</title>


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
                    <p class="text-bigger">Felis turpis nostra arcu tempus rutrum hac ullamcorper torquent volutpat pellentesque adipiscing ut elementum sollicitudin sodales congue quam rutrum habitant accumsan elit scelerisque accumsan proin varius purus scelerisque taciti nam</p>
                    <p class="text-bigger">Venenatis diam malesuada faucibus euismod congue eleifend ultricies bibendum augue dapibus nostra diam amet tincidunt commodo ullamcorper lorem maecenas nibh</p>
                </div>
            </div>
            <div class="gap"></div>
        </div>
        <div class="bg-holder">
            <div class="bg-parallax" style="background-image:url(img/1280x852.png);"></div>
            <div class="bg-mask"></div>
            <div class="bg-holder-content">
                <div class="container">
                    <div class="gap gap-big text-white">
                        <div class="row">
                            <div class="col-md-10">
                                <h2>Work hard. Play hard.</h2>
                                <p class="text-bigger">Scelerisque ornare ante pellentesque id ad eget volutpat consequat aptent lacus penatibus consectetur vivamus magnis ornare venenatis mattis rhoncus interdum quam tempor commodo ultrices augue risus senectus ornare aliquam leo rutrum nam duis nisi fringilla convallis praesent libero faucibus fermentum convallis pretium aptent nisl morbi odio justo vel nascetur tristique pulvinar senectus etiam quam taciti dignissim etiam tincidunt cras molestie</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="gap"></div>
            <h2>Our Approach</h2>
            <div class="row">
                <div class="col-md-8">
                    <p class="text-bigger">Cubilia gravida mus senectus donec consectetur dis ac vel quis a suscipit potenti purus aptent nibh gravida aliquet vestibulum varius dictum consectetur semper consectetur at varius donec sociis habitasse vivamus eget faucibus tempus donec lorem etiam volutpat blandit aliquam varius molestie nibh mattis adipiscing sodales dictumst volutpat quam rhoncus sodales</p>
                </div>
            </div>
            <div class="gap"></div>
            <h2>Rockstar Team</h2>
            <div class="row">
                <div class="col-md-10">
                    <p class="text-bigger mb30">Auctor sit parturient aenean sodales maecenas fusce potenti tristique lectus dapibus hendrerit habitant tristique vulputate vehicula quisque nisl curabitur varius enim quam maecenas facilisis inceptos auctor gravida massa facilisis risus</p>
                </div>
            </div>
            <div class="row row-wrap" data-gutter="60">
                <div class="col-md-3">
                    <div class="thumb text-center">
                        <header class="thumb-header">
                            <img class="round" src="img/300x300.png" alt="Image Alternative text" title="AMaze" />
                        </header>
                        <div class="thumb-caption">
                            <h5 class="thumb-title">Joseph Hudson</h5>
                            <p class="thumb-meta text-small">Project Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb text-center">
                        <header class="thumb-header">
                            <img class="round" src="img/300x300.png" alt="Image Alternative text" title="Chiara" />
                        </header>
                        <div class="thumb-caption">
                            <h5 class="thumb-title">Leah Kerr</h5>
                            <p class="thumb-meta text-small">Product Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb text-center">
                        <header class="thumb-header">
                            <img class="round" src="img/300x300.png" alt="Image Alternative text" title="Bubbles" />
                        </header>
                        <div class="thumb-caption">
                            <h5 class="thumb-title">Cheryl Gustin</h5>
                            <p class="thumb-meta text-small">Producer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb text-center">
                        <header class="thumb-header">
                            <img class="round" src="img/300x300.png" alt="Image Alternative text" title="Gamer Chick" />
                        </header>
                        <div class="thumb-caption">
                            <h5 class="thumb-title">Sarah Slater</h5>
                            <p class="thumb-meta text-small">CEO</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb text-center">
                        <header class="thumb-header">
                            <img class="round" src="img/300x300.png" alt="Image Alternative text" title="Afro" />
                        </header>
                        <div class="thumb-caption">
                            <h5 class="thumb-title">Oliver Ross</h5>
                            <p class="thumb-meta text-small">Office Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb text-center">
                        <header class="thumb-header">
                            <img class="round" src="img/300x300.png" alt="Image Alternative text" title="Me with the Uke" />
                        </header>
                        <div class="thumb-caption">
                            <h5 class="thumb-title">John Mathis</h5>
                            <p class="thumb-meta text-small">Product Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb text-center">
                        <header class="thumb-header">
                            <img class="round" src="img/300x300.png" alt="Image Alternative text" title="Andrea" />
                        </header>
                        <div class="thumb-caption">
                            <h5 class="thumb-title">Neil Davidson</h5>
                            <p class="thumb-meta text-small">Project Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb text-center">
                        <header class="thumb-header">
                            <img class="round" src="img/300x300.png" alt="Image Alternative text" title="Spidy" />
                        </header>
                        <div class="thumb-caption">
                            <h5 class="thumb-title">Oliver Ross</h5>
                            <p class="thumb-meta text-small">Office Manager</p>
                        </div>
                    </div>
                </div>
            </div>
            <h4>Want to Join Our Team</h4>
            <div class="row">
                <div class="col-md-10">
                    <p>Nascetur metus morbi nibh magnis semper elit proin vivamus hac vivamus ultricies hac nulla sodales himenaeos luctus nascetur lacus sed placerat penatibus sociosqu lectus semper tincidunt pellentesque volutpat egestas porttitor</p>
                    <a href="#">Explore open positions</a>
                </div>
            </div>
            <div class="gap"></div>
            <h2 class="mb20">Behing the Scenes</h2>
        </div>
        <div class="row row-no-gutter">
            <div class="col-md-3">
                <img src="img/800x600.png" alt="Image Alternative text" title="The Big Showoff-Take 2" />
            </div>
            <div class="col-md-3">
                <img src="img/800x600.png" alt="Image Alternative text" title="Gaviota en el Top" />
            </div>
            <div class="col-md-3">
                <img src="img/800x600.png" alt="Image Alternative text" title="Street" />
            </div>
            <div class="col-md-3">
                <img src="img/800x600.png" alt="Image Alternative text" title="Playstation controller" />
            </div>
            <div class="col-md-3">
                <img src="img/800x600.png" alt="Image Alternative text" title="Branding  iPad Interactive Design" />
            </div>
            <div class="col-md-3">
                <img src="img/800x600.png" alt="Image Alternative text" title="Old No7" />
            </div>
            <div class="col-md-3">
                <img src="img/800x600.png" alt="Image Alternative text" title="Going out tonight" />
            </div>
            <div class="col-md-3">
                <img src="img/800x600.png" alt="Image Alternative text" title="me" />
            </div>
        </div>
        <div class="container">
        </div>

        <?php require("./includes/cm_footer.php"); ?>
        <?php require("./includes/cm_body_resources.php"); ?>
    </div>
</body>

</html>


