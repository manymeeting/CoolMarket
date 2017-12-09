<?php
session_start();
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>CoolMarket - Products</title>
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
            $("#nav_prod").addClass("active");

        });

        $(document).on("click","#sort_btn", function(){
            submitForm($(this));
        })
    </script>
    <!-- /FACEBOOK WIDGET -->
    <div class="global-wrap">
        <?php require("./includes/cm_header.php"); ?>
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="home.php">Home</a>
                </li>
                <li class="active">Markets</li>
            </ul>
            <h3 class="booking-title">All Products List</h3>
            <div class="row">
                <div class="col-md-3">
                    <form method="get" action="../ctl/productsList.php">
                        <?php
                        if(isset($_SESSION["market_id"]))
                        {
                            echo '<input type="hidden" name="marketID" '.'value="' . $_SESSION["market_id"] . '">';
                        }
                        ?> 
                        <aside class="booking-filters text-white">
                            <h3>View By:</h3>
                            <ul class="list booking-filters-list">
                                <li>
                                    <h5 class="booking-filters-title">Price</h5>
                                    <input type="text" id="price-slider">
                                </li>
                                <li>
                                    <h5 class="booking-filters-title">Sort By</h5>
                                    <div class="radio sort_radio">
                                        <label>
                                            <input class="i-radio" name="sortBy" type="radio" value="price" />Lowest Price</label>
                                    </div>
                                    <div class="radio sort_radio">
                                        <label>
                                            <input class="i-radio" name="sortBy" type="radio" value="rating"/>Highest Ratings</label>
                                    </div>
                                </li>
                            </ul>
                            <div class="container">
                                <p id="sort_btn" class="btn btn-primary btn-ghost" style="margin: ">Refresh</a>
                            </div>
                            
                        </aside>
                        
                    </form>
                </div>
                <div class="col-md-9">
                    <ul class="booking-list">
                        <?php
                        $prodcutsData = $_SESSION["productsData"];
                        foreach ($prodcutsData as $product) {
                            $html =
                            '<li class="prodcuts_container">'. 
                                '<a class="booking-item" href="../ctl/productDetail.php'.'?marketID='.$product['market_id'].'&productName='.$product['product_name'].'">'.
                                    '<div class="row">'.
                                        '<div class="col-md-3">'.
                                        '   <div class="booking-item-img-wrap">'.
                                                '<img src="' . $product['image_url'] .'" alt="Image Alternative text" title="" />'.
                                                '<div class="booking-item-img-num"><i class="fa fa-picture-o"></i>1</div>'.
                                            '</div>'.
                                        '</div>'.
                                        '<div class="col-md-6">'.
                                            '<div class="booking-item-rating">'.
                                                '<span class="booking-item-rating-number"><b >'. $product['rating'] .'</b> of 5</span>'.
                                            '</div>'.
                                            '<h5 class="booking-item-title">'.$product['product_name'].'</h5>'.
                                            '<p class="booking-item-address"><i class="fa fa-gift"></i> Market: '.$product['market_id'].'</p><small class="product-item-status">Status : Available</small>'.
                                        '</div>'.
                                        '<div class="col-md-3">'.
                                            '<div class="booking-item-price-from">from</div>'.
                                            '<div class="booking-item-price">$'.$product['product_price'].'</div>'.
                                            '<div>in USD</div>'.
                                            '<div class="btn btn-primary">Detail</div>'.
                                        '</div>'.
                                    '</div>'.
                                '</a>'.
                            '<li>';
                            print $html. "\n";
                        }
                        
                        ?>
                    </ul>

                </div>
            </div>
            <div class="gap"></div>
        </div>

        <?php require("./includes/cm_footer.php"); ?>
        <?php require("./includes/cm_body_resources.php"); ?>
        
    </div>
</body>

</html>


