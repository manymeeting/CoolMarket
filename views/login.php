<?php
$message="";
if(count($_POST)>0) {
    $conn = mysqli_connect("127.0.0.1","root","ChenqicHenqi666", "coolmarket");
    //mysqli_select_db("worldwith_us");
    $result = mysqli_query($conn,"SELECT * FROM members WHERE id='" . $_POST["id"] . "' and password = '". $_POST["password"]."'");

    $count  = mysqli_num_rows($result);
    if($count==0) {
        $message = "Invalid Username or Password!";
    } else {
        //$message = "You are successfully authenticated!";
        ?>
        <script type="text/javascript">
            window.location = "http://www.worldwith.us/users";
        </script>
        <?php
    }
}
?>


<!DOCTYPE HTML>
<html class="full">

<head>
    <title>CoolMarket - Login register</title>
    <?php require("./includes/cm_head_resources.php"); ?>

</head>

<body class="full">

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
    </script>
    <!-- /FACEBOOK WIDGET -->
    <div class="global-wrap">

        <div class="full-page">
            <div class="bg-holder full">
                <div class="bg-mask"></div>
                <div class="bg-img" style="background-image:url(img/backgrounds/nature.jpg);"></div>
                <div class="bg-holder-content full text-white">
                    <a class="logo-holder" href="index.html">
                        <img src="img/logo-invert.png" alt="Image Alternative text" title="Image Title" />
                    </a>
                    <div class="full-center">
                        <div class="container">
                            <div class="row row-wrap" data-gutter="60">
                                <div class="col-md-4">
                                    <div class="visible-lg">
                                        <h3 class="mb15">Welcome to CoolMarket</h3>
                                        <p>CoolMarket is your one-stop online marketplace. And now that we are online, we hope we can serve you even better—giving you more ways to shop, wherever you may be.</p>
                                        <p>Ongoing catalog of brands you love at amazing prices. New arrivals are added every week, so check back often!Easy to search and shop all your favorite styles</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h3 class="mb15">Login</h3>
                                    <form name="frmUser" method="post" action="../ctl/checkLogin.php">
                                        <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-user input-icon input-icon-show"></i>
                                            <label>Email</label>
                                            <input class="form-control" placeholder="e.g. johndoe@gmail.com" name="email" value="" type="text" />
                                        </div>
                                        <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-lock input-icon input-icon-show"></i>
                                            <label>Password</label>
                                            <input class="form-control" placeholder="your password" name="password" value="" type="password" />
                                        </div>
                                        <input class="btn btn-primary" type="submit" value="Sign in" />
                                    </form>
                                    <div class="gap gap-small"></div>
                                    <strong>
                                    <?php
                                    if($message!="") { echo $message; }
                                    ?></strong>
                                </div>
                                <div class="col-md-4">
                                    <h3 class="mb15">New To CoolMarket?</h3>
                                    <form>
                                        <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-user input-icon input-icon-show"></i>
                                            <label>Full Name</label>
                                            <input class="form-control" placeholder="e.g. John Doe" type="text" />
                                        </div>
                                        <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-envelope input-icon input-icon-show"></i>
                                            <label>Emai</label>
                                            <input class="form-control" placeholder="e.g. johndoe@gmail.com" type="text" />
                                        </div>
                                        <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-lock input-icon input-icon-show"></i>
                                            <label>Password</label>
                                            <input class="form-control" type="password" placeholder="my secret password" />
                                        </div>
                                        <input class="btn btn-primary" type="submit" value="Sign up for Traveler" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="footer-links">
                        <li><a href="#">About</a>
                        </li>
                        <li><a href="#">Help</a>
                        </li>
                        <li><a href="#">Developers</a>
                        </li>
                        <li><a href="#">Advertise</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <?php require("./includes/cm_body_resources.php"); ?>
    </div>
</body>

</html>


