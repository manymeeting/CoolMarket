<?php
// define variables and set to empty values
$message="";
$idErr = $passwordErr = $nameErr = $emailErr = $phoneErr = "";
$id = $password = $firstname = $lastname = $email =  $homeaddress = $homephone = $cellphone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $conn = mysqli_connect("127.0.0.1","root","ChenqicHenqi666", "coolmarket");
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  if (empty($_POST["id"])) {
    $idErr = "Username is required";
  } else {
    $id = test_input($_POST["id"]);
  }

  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }

  if (empty($_POST["firstname"])) {
    $nameErr = "First Name is required";
  } else {
    $firstname = test_input($_POST["firstname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["lastname"])) {
    $nameErr = "Last Name is required";
  } else {
    $lastname = test_input($_POST["lastname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

  if (empty($_POST["homeaddress"])) {
    $homeaddress = "";
  } else {
    $homeaddress = test_input($_POST["homeaddress"]);
  }

  if (empty($_POST["homephone"])) {
    $homephone = "";
  } else {
    $homephone = test_input($_POST["homephone"]);
    if(!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $homephone)) {
      $phoneErr = "Invalid phone number format";
    }
  }

  if (empty($_POST["cellphone"])) {
    $cellphone = "";
  } else {
    $cellphone = test_input($_POST["cellphone"]);
    if(!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $cellphone)) {
      $phoneErr = "Invalid phone number format";
    }
  }
  
  $result = mysqli_query($conn,"SELECT * FROM members WHERE id='" . $_POST["id"] . "'");
  $count  = mysqli_num_rows($result);
  if($count!=0) {
    $message = "User Already Exists!";
  } else if(!empty($_POST["firstname"]) && !empty($_POST["lastname"]) && !empty($_POST["email"])){
    //$sql = "INSERT INTO users (FirstName, LastName, Email, HomeAddress, HomePhone, CellPhone) VALUES ('"$firstname"', '"$lastname"', '"$email"', '"$homeaddress"', '"$homephone"', '"$cellphone"')";
    $sql = "INSERT INTO members (id, password, first_name, last_name, email, address, home_phone, cell_phone) VALUES ('$id', '$password', '$firstname', '$lastname', '$email', '$homeaddress', '$homephone', '$cellphone')";
    if (mysqli_query($conn, $sql)) {
      $message = "New User Created!";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



<!DOCTYPE HTML>
<html>

<head>
    <title>Traveler - Account Settings</title>


    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Template, html, premium, themeforest" />
    <meta name="description" content="Traveler - Premium template for travel companies">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
    <!-- /GOOGLE FONTS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/mystyles.css">
    <script src="js/modernizr.js"></script>


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
    </script>
    <!-- /FACEBOOK WIDGET -->
    <div class="global-wrap">
        <header id="main-header">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a class="logo" href="index.html">
                                <img src="img/logo-invert.png" alt="Image Alternative text" title="Image Title" />
                            </a>
                        </div>
                        <div class="col-md-3 col-md-offset-2">
                            <form class="main-header-search">
                                <div class="form-group form-group-icon-left">
                                    <i class="fa fa-search input-icon"></i>
                                    <input type="text" class="form-control">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <div class="top-user-area clearfix">
                                <ul class="top-user-area-list list list-horizontal list-border">
                                    <li class="top-user-area-avatar">
                                        <a href="user-profile.html">
                                            <img class="origin round" src="img/40x40.png" alt="Image Alternative text" title="AMaze" />Welcome</a>
                                    </li>
                                    <li><a href="#">Sign Out</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="nav">
                    <ul class="slimmenu" id="slimmenu">
                        <li class="active"><a href="index.html">Home</a>
                        </li>
                        <li><a href="success-payment.html">About</a>
                        </li>
                        <li><a href="feature-typography.html">Markets</a>
                            <ul>
                                <li><a href="#">Mutian</a>
                                </li>
                                <li><a href="#">Nancy</a>
                                </li>
                                <li><a href="#">Ruifeng</a>
                                </li>
                                <li><a href="#">Vencci</a>
                                </li>
                                <li><a href="#">Yue</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">News</a>
                        </li>
                        <li><a href="#">Contacts</a>
                        </li>
                        <li><a href="#">Activities</a>
                        </li>
                        <li><a href="#">Users</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

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
        <footer id="main-footer">
            <div class="container">
                <div class="row row-wrap">
                    <div class="col-md-3">
                        <a class="logo" href="index.html">
                            <img src="img/logo-invert.png" alt="Image Alternative text" title="Image Title" />
                        </a>
                        <p class="mb20">Booking, reviews and advices on hotels, resorts, flights, vacation rentals, travel packages, and lots more!</p>
                        <ul class="list list-horizontal list-space">
                            <li>
                                <a class="fa fa-facebook box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-twitter box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-google-plus box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-linkedin box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-pinterest box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4>Newsletter</h4>
                        <form>
                            <label>Enter your E-mail Address</label>
                            <input type="text" class="form-control">
                            <p class="mt5"><small>*We Never Send Spam</small>
                            </p>
                            <input type="submit" class="btn btn-primary" value="Subscribe">
                        </form>
                    </div>
                    <div class="col-md-2">
                        <ul class="list list-footer">
                            <li><a href="#">About US</a>
                            </li>
                            <li><a href="#">Press Centre</a>
                            </li>
                            <li><a href="#">Best Price Guarantee</a>
                            </li>
                            <li><a href="#">Travel News</a>
                            </li>
                            <li><a href="#">Jobs</a>
                            </li>
                            <li><a href="#">Privacy Policy</a>
                            </li>
                            <li><a href="#">Terms of Use</a>
                            </li>
                            <li><a href="#">Feedback</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h4>Have Questions?</h4>
                        <h4 class="text-color">+1-202-555-0173</h4>
                        <h4><a href="#" class="text-color">support@traveler.com</a></h4>
                        <p>24/7 Dedicated Customer Support</p>
                    </div>

                </div>
            </div>
        </footer>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/slimmenu.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/bootstrap-timepicker.js"></script>
        <script src="js/nicescroll.js"></script>
        <script src="js/dropit.js"></script>
        <script src="js/ionrangeslider.js"></script>
        <script src="js/icheck.js"></script>
        <script src="js/fotorama.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script src="js/typeahead.js"></script>
        <script src="js/card-payment.js"></script>
        <script src="js/magnific.js"></script>
        <script src="js/owl-carousel.js"></script>
        <script src="js/fitvids.js"></script>
        <script src="js/tweet.js"></script>
        <script src="js/countdown.js"></script>
        <script src="js/gridrotator.js"></script>
        <script src="js/custom.js"></script>
    </div>
</body>

</html>


