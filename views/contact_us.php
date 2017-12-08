<!DOCTYPE HTML>
<html>

<head>
    <title>CoolMarket - Contact Us</title>
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
            $("#nav_contact").addClass("active");
        });
    </script>
    <!-- /FACEBOOK WIDGET -->
    <div class="global-wrap">
        <?php require("./includes/cm_header.php"); ?>

        <div class="container">
            <h1 class="page-title">Contact Us</h1>
        </div>
        <div class="container">
            <div class="gap"></div>
            <div class="row">
                <div class="col-md-7">
                    <p>Cool Market is where style meets savings,  a premier flash sale site featuring top brands at incredible savings, we’re giving you even more ways to shop. </p>
                    <p>Whether in-store, online or on the go with our mobile apps, shopping your way is easier (and better) than ever!</p>
                    <form class="mt30">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" type="text" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input class="form-control" type="text" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control"></textarea>
                        </div>
                        <input class="btn btn-primary" type="submit" value="Send Message" />
                    </form>
                </div>
                <div class="col-md-4">
                    <aside class="sidebar-right">
                        <ul class="address-list list">
                            <li>
                                <h5>Email</h5><a href="#">info@coolmarket.com</a>
                            </li>
                            <li>
                                <h5>Phone Number</h5><a href="#">+1 (123) 456-7890</a>
                            </li>
                            <li>
                                <h5>Skype</h5><a href="#">contact_CoolMarket</a>
                            </li>
                            <li>
                                <h5>Address</h5><address>CoolMarket Ltd.<br />168 Market St, Suite 888<br />San Francisco, CA 94103<br />United States<br /></address>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>
            <div class="gap"></div>
        </div>

        <?php require("./includes/cm_footer.php"); ?>
        <?php require("./includes/cm_body_resources.php"); ?>
    </div>
</body>

</html>


