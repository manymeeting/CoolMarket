<?php
session_start();
require dirname(__FILE__). '/' . 'checkSession.php';
require dirname(__FILE__). '/' . '../functions/functions.php';

$marketID = $_POST["marketID"];
$productName = $_POST["productName"];
$reviewTitle = $_POST["review_title"];
$reviewContent = $_POST["review_content"];
$rating = $_POST["ratingScore"];

$reviewForm = new ReviewForm;
$productForm = new ProductForm;

// check if this product exist
$product = $productForm->findByMarketAndName($marketID, $productName);

if(sizeof($product) > 0)
{
	$reviewForm->insertReview($productName, $marketID, $_SESSION['member_id'], $reviewTitle, $reviewContent, $rating);
}
else
{
	// insert into products first
	$productForm->insertProduct($marketID, $productName);
	// insert review
	$reviewForm->insertReview($productName, $marketID, $_SESSION['member_id'], $reviewTitle, $reviewContent, $rating);
}

// update rating for this product
$productForm->updateRating($marketID, $productName);

// reload product detail page
$product_details_location = "productDetail.php?marketID=".$marketID."&productName=".$productName;
header("Location: " . $product_details_location);


?>