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
                    <form>
                        <aside class="booking-filters text-white">
                            <h3>View By:</h3>
                            <ul class="list booking-filters-list">
                                <li>
                                    <h5 class="booking-filters-title">Price</h5>
                                    <input type="text" id="price-slider">
                                </li>
                                <li>
                                    <h5 class="booking-filters-title">Advanced</h5>
                                    <div class="radio">
                                        <label>
                                            <input class="i-check" name="viewType" type="radio" />Recently Viewed</label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input class="i-check" name="viewType" type="radio" />Highest Ratings</label>
                                    </div>
                                </li>
                            </ul>
                            <input type="submit" value="Refresh" class="btn btn-ghost btn-primary" style="margin-left: 1.8rem">
                        </aside>
                        
                    </form>
                </div>
                <div class="col-md-9">
                    <ul class="booking-list">
                        <li>
                            <a class="booking-item" href="product_details.php">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="booking-item-img-wrap">
                                            <img src="img/800x600.png" alt="Image Alternative text" title="LHOTEL PORTO BAY SAO PAULO suite lhotel living room" />
                                            <div class="booking-item-img-num"><i class="fa fa-picture-o"></i>1</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="booking-item-rating">
                                            <ul class="icon-group booking-item-rating-stars">
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star-half-empty"></i>
                                                </li>
                                            </ul><span class="booking-item-rating-number"><b >4.4</b> of 5</span>
                                        </div>
                                        <h5 class="booking-item-title">Fly Me to the Moon</h5>
                                        <p class="booking-item-address"><i class="fa fa-gift"></i> Mutian's Market</p><small class="product-item-status">Status : Available</small>
                                    </div>
                                    <div class="col-md-3">
                                        <span class="booking-item-price-from">from</span>
                                        <span class="booking-item-price">$207</span>
                                        <span>in USD</span>
                                        <span class="btn btn-primary">Detail</span>
                                    </div>
                                </div>
                            </a>
                        </li>

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


