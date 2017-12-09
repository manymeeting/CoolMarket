<?php
session_start();
$productDetail = $_SESSION["productDetail"];

?>

<!DOCTYPE HTML>
<html>

<head>
    <title>CoolMarket - Product Detail</title>
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

            // render rating stars for product
            let productRating = parseInt($("#product_rating").text());
            setReviewStars(productRating, $("#product_rating_ul"));

            // render rating stars for comments
            let $review_li_containers = $("#reviews_list").children(".review_li_container");
            $review_li_containers.each(function(){
                let reviewRating = $(this).find(".review_rating_value").text();
                setReviewStars(reviewRating, $(this).find(".booking-item-rating-stars"));
            })
        });

        // calculate rating score
        $(document).on("click", "#submit_review_btn", function(){
            let revA = $("#reviewA").children("li.selected").length;
            let revB = $("#reviewB").children("li.selected").length;
            let revC = $("#reviewC").children("li.selected").length;
            let revD = $("#reviewD").children("li.selected").length;
            let revE = $("#reviewE").children("li.selected").length;

            let score = (revA+revB+revC+revD+revE) / 5;
            $("#ratingScore").val(score);
            submitForm($(this));
        });


    </script>
    <!-- /FACEBOOK WIDGET -->
    <div class="global-wrap">
        <?php require("./includes/cm_header.php"); ?>

        <div class="container">
            <ul class="breadcrumb">
                <li><a href="home.php">Home</a>
                </li>
                <li><a href="products_list.php">Markets</a></li>
                <li class="active">Product Detail</li>
            </ul>
            <div class="booking-item-details">
                <header class="booking-item-header">
                    <div class="row">
                        <div class="col-md-9">
                            <h2 class="lh1em"><?php echo $productDetail["product_name"]?></h2>
                            <p class="lh1em text-small"><i class="fa fa-gift"></i> From Market: <?php echo $productDetail["market_id"]?></p>
                            <ul class="list list-inline text-small">
                                <li><a href="#"><i class="fa fa-envelope"></i> Seller E-mail</a>
                                </li>
                                <li><a href="#"><i class="fa fa-home"></i> Seller Website</a>
                                </li>
                                <li><i class="fa fa-phone"></i> +1 (408) 123-1234</li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <p class="booking-item-header-price"><span class="text-lg">$<?php echo $productDetail["product_price"]?></span>/in USD</p>
                        </div>
                    </div>
                </header>
                <div class="row">
                    <div class="col-md-8">
                        <div class="tabbable booking-details-tabbable">
                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-camera"></i>Photos</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab-1">
                                    <!-- START LIGHTBOX GALLERY -->
                                    <div class="row row-no-gutter" id="popup-gallery">
                                        <div class="col-md-12">
                                            <a class="hover-img popup-gallery-image" <?php echo 'href="'.$productDetail["image_url"].'"'?> data-effect="mfp-zoom-out">
                                                <img <?php echo 'src="'.$productDetail["image_url"].'"'?> alt="Image Alternative text" title="LProduct PORTO BAY SAO PAULO lobby" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- END LIGHTBOX GALLERY -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ml20">
                            <div class="booking-item-meta">
                                <h2 id="general_ranking_text" class="lh1em mt40">Exeptional!</h2>
                                <h3 id="general_ranking_percent">90% <small >of customers recommend</small></h3>
                                <div class="booking-item-rating">
                                    <ul id="product_rating_ul" class="icon-list icon-group booking-item-rating-stars">
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                    </ul><span class="booking-item-rating-number"><b id="product_rating"><?php echo $productDetail["rating"]?></b> of 5 <small class="text-smaller">rating</small></span>
                                    <p><a class="text-default" href="#">based on verified reviews</a>
                                    </p>
                                </div>
                            </div>
                            <h4>About the Product</h4>
                            <p><?php echo $productDetail["product_description"]?></p>
                        </div>
                    </div>
                </div>
                <div class="gap"></div>
                <h3 <?php 
                        if(!$productDetail["reviews"] || sizeof($productDetail["reviews"])==0)
                        { 
                            echo 'class="mb20 hidden"';
                        }
                        else
                        {
                            echo 'class="mb20"';
                        }
                        ?>>Product Reviews</h3>
                <div class="row row-wrap">
                    <div class="col-md-8">
                        <ul id="reviews_list" class="booking-item-reviews list">
                            <?php 
                                $reviews = $productDetail["reviews"];
                                foreach ($reviews as $review) {
                                    $html = 
                                    '<li class="review_li_container">'.
                                    '    <div class="row">'.
                                    '        <div class="col-md-2">'.
                                    '            <div class="booking-item-review-person">'.
                                    '                <a class="booking-item-review-person-avatar round" href="#">'.
                                    '                    <img src="img/70x70.png" alt="Image Alternative text" title="Bubbles" />'.
                                    '                </a>'.
                                    '                <p class="booking-item-review-person-name"><a href="#">'. $review['firstname'] . ' ' . $review['lastname'] .'</a>'.
                                    '                </p>'.
                                    '                <p class="booking-item-review-person-loc">'. $review['homeaddr'] .'</p></small>'.
                                    '            </div>'.
                                    '        </div>'.
                                    '        <div class="col-md-10">'.
                                    '            <div class="booking-item-review-content">'.
                                    '                <h5>'. $review['title'] .'</h5>'.
                                    '                <ul class="icon-group booking-item-rating-stars">'.
                                    '                    <li><i class="fa fa-star"></i>'.
                                    '                    </li>'.
                                    '                    <li><i class="fa fa-star"></i>'.
                                    '                    </li>'.
                                    '                    <li><i class="fa fa-star"></i>'.
                                    '                    </li>'.
                                    '                    <li><i class="fa fa-star"></i>'.
                                    '                    </li>'.
                                    '                    <li><i class="fa fa-star"></i>'.
                                    '                    </li>'.
                                    '                </ul>'.
                                    '                <p>'. $review['content'] .'</p>'.
                                    '                <p class="booking-item-review-rate">Was this review helpful?'.
                                    '                    <a class="fa fa-thumbs-o-up box-icon-inline round" href="#"></a>'.
                                    '                </p>'.
                                    '                <p class="hidden review_rating_value">'. $review['rating'] .'</p>'.                                    
                                    '            </div>'.
                                    '        </div>'.
                                    '    </div>'.
                                    '</li>';

                                    print $html . "\n";
                                }

                            ?>
                        </ul>
                        <div class="gap gap-small"></div>
                        <div <?php 
                            if(!isset($_SESSION["valid"]))
                            { 
                                echo 'class="box bg-gray hidden"';
                            }
                            else
                            {
                                echo 'class="box bg-gray"';
                            }
                        ?>>
                            <h3>Write a Review</h3>
                            <form method="post" action="../ctl/addReview.php">
                                <input type="hidden" name="marketID" <?php echo 'value="' . $productDetail["market_id"] . '"'?>>
                                <input type="hidden" name="productName" <?php echo 'value="' . $productDetail["product_name"] . '"'?>>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Review Title</label>
                                            <input class="form-control" name="review_title" type="text" />
                                        </div>
                                        <div class="form-group">
                                            <label>Review Text</label>
                                            <textarea class="form-control" name="review_content" rows="6"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="list booking-item-raiting-summary-list stats-list-select">
                                            <li>
                                                <div class="booking-item-raiting-list-title">Price</div>
                                                <ul id="reviewA" class="icon-group booking-item-rating-stars">
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="booking-item-raiting-list-title">Quality</div>
                                                <ul id="reviewB" class="icon-group booking-item-rating-stars">
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="booking-item-raiting-list-title">Durability</div>
                                                <ul id="reviewC" class="icon-group booking-item-rating-stars">
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="booking-item-raiting-list-title">Delivery</div>
                                                <ul id="reviewD" class="icon-group booking-item-rating-stars">
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="booking-item-raiting-list-title">Service</div>
                                                <ul id="reviewE" class="icon-group booking-item-rating-stars">
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <input id="ratingScore" type="hidden" name="ratingScore">
                                        <a id="submit_review_btn" class="btn btn-primary">Leave a Review</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap gap-small"></div>
        </div>

        <?php require("./includes/cm_footer.php"); ?>
        <?php require("./includes/cm_body_resources.php"); ?>
    </div>
</body>

</html>


