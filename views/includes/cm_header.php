        <header id="main-header">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a class="logo" href="home.php">
                                <img src="img/logo-invert.png" alt="Image Alternative text" title="Image Title" />
                            </a>
                        </div>
                        <div class="col-md-4 col-md-offset-5">
                            <div class="top-user-area clearfix">
                                <ul class="top-user-area-list list list-horizontal list-border">
                                    <li class="top-user-area-avatar">
                                        <a href="#">
                                            <img class="origin round" src="img/memberA.png" alt="Image Alternative text" title="AMaze" />Welcome</a>
                                    </li>
                                    <?php 
                                    if (isset($_SESSION["valid"])) {
                                        echo '<li><a href="../ctl/logout.php">Sign Out</a>';
                                    }
                                    else
                                    {
                                        echo '<li><a href="login.php">Sign In</a>';   
                                    }
                                    ?>
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
                        <li id="nav_home"><a href="home.php">Home</a>
                        </li>
                        <li id="nav_about"><a href="about.php">About</a>
                        </li>
                        <li id="nav_prod"><a href="../ctl/productsList.php">Markets</a>
                            <ul>
                                <li><a href="../ctl/productsList.php?marketID=mutian">Mutian</a>
                                </li>
                                <li><a href="../ctl/productsList.php?marketID=nancy">Nancy</a>
                                </li>
                                <li><a href="../ctl/productsList.php?marketID=ruifeng">Ruifeng</a>
                                </li>
                                <li><a href="../ctl/productsList.php?marketID=vencci">Vencci</a>
                                </li>
                                <li><a href="../ctl/productsList.php?marketID=yue">Yue</a>
                                </li>
                                <li><a href="../ctl/productsList.php?marketID=history">History</a>
                                </li>
                            </ul>
                        </li>
                        <li id="nav_news"><a href="news.php">News</a>
                        </li>
                        <li id="nav_contact"><a href="contact_us.php">Contacts</a>
                        </li>
                        <?php 
                        if (isset($_SESSION["valid"])) {
                            echo '<li id="nav_users"><a href="users_list.php">Users</a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </header>