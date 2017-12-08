<!DOCTYPE HTML>
<html>

<head>
    <title>Traveler - User List</title>
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
            <h1 class="page-title">Users</h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped table-booking-history">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Home Address</th>
                                <th>Home Phone</th>
                                <th>Cell Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $conn = mysqli_connect("127.0.0.1","root","ChenqicHenqi666", "coolmarket");
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }
                            $result = mysqli_query($conn,"SELECT * FROM members");
                            while($row = mysqli_fetch_assoc($result)) {
                                $html =
                                '<tr class="text">'. 
                                    "<td>".$row['id']."</td>".
                                    "<td>".$row['first_name']." ".$row['last_name']."</td>".
                                    "<td>".$row['email']."</td>".
                                    "<td>".$row['address']."</td>".
                                    "<td>".$row['home_phone']."</td>".
                                    "<td>".$row['cell_phone']."</td>".
                                '</tr>';
                                print $html. "\n";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="gap"></div>
        <?php require("./includes/cm_footer.php"); ?>
        <?php require("./includes/cm_body_resources.php"); ?>
    </div>
</body>

</html>


