<!DOCTYPE HTML>
<html>

<head>
    <title>CoolMarket - Account Settings</title>
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
            $("#nav_users").addClass("active");
        });
    </script>
    <!-- /FACEBOOK WIDGET -->
    <div class="global-wrap">
        <?php require("./includes/cm_header.php"); ?>

        <div class="container">
            <h1 class="page-title">Create New User</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <p><span class="error">* required field.</span></p>
                            <form method="post" action="">
                                <h4>Personal Infomation</h4>
                                <div class="form-group form-group-icon-left"><i class="fa fa-user input-icon"></i>
                                    <label>Username</label>
                                    <input class="form-control" name="id" value="<?php echo $id;?>" type="text" /><span class="error"> * <?php echo $idErr;?></span>
                                </div>
                                <div class="form-group form-group-icon-left"><i class="fa fa-user input-icon"></i>
                                    <label>Password</label>
                                    <input class="form-control" name="password" value="<?php echo $password;?>" type="password" /><span class="error"> * <?php echo $passwordErr;?></span>
                                </div>
                                <div class="form-group form-group-icon-left"><i class="fa fa-user input-icon"></i>
                                    <label>First Name</label>
                                    <input class="form-control" name="firstname" value="<?php echo $firstname;?>" type="text" /><span class="error"> * <?php echo $nameErr;?></span>
                                </div>
                                <div class="form-group form-group-icon-left"><i class="fa fa-user input-icon"></i>
                                    <label>Last Name</label>
                                    <input class="form-control" name="lastname" value="<?php echo $lastname;?>" type="text" /><span class="error"> * <?php echo $nameErr;?></span>
                                </div>
                                <div class="form-group form-group-icon-left"><i class="fa fa-envelope input-icon"></i>
                                    <label>E-mail</label>
                                    <input class="form-control" name="email" value="<?php echo $email;?>" type="text" /><span class="error"> * <?php echo $emailErr;?></span>
                                </div>
                                <div class="form-group form-group-icon-left"><i class="fa fa-phone input-icon"></i>
                                    <label>Home Phone Number</label>
                                    <input class="form-control" name="homephone" value="<?php echo $homephone;?>" type="text" placeholder="XXX-XXX-XXXX" /><span class="error"><?php echo $phoneErr;?></span>
                                </div>
                                <div class="form-group form-group-icon-left"><i class="fa fa-phone input-icon"></i>
                                    <label>Cell Phone Number</label>
                                    <input class="form-control" name="cellphone" value="<?php echo $cellphone;?>" placeholder="XXX-XXX-XXXX" type="text" /><span class="error"><?php echo $phoneErr;?></span>
                                </div>
                                <div class="form-group form-group-icon-left"><i class="fa fa-phone input-icon"></i>
                                    <label>Home Address</label>
                                    <input class="form-control" name="homeaddress" value="<?php echo $homeaddress;?>" type="text" />
                                </div>
                                <div class="gap gap-small"></div>
                                
                                <hr>
                                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                            </form>
                            <div class="gap gap-small"></div>
                            <strong>
                            <?php
                            if($message!="") { echo $message; }
                            ?></strong>

                        </div>
                    </div>

                </div>
            </div>
        </div>



        <div class="gap"></div>
        <?php require("./includes/cm_footer.php"); ?>
        <?php require("./includes/cm_body_resources.php"); ?>
    </div>
</body>

</html>


