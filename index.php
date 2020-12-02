<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($con,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
		
		}else{
			$message="Product ID is invalid";
		}
	}
		echo "<script>alert('Product has been added to the cart')</script>";
		echo "<script type='text/javascript'> document.location ='my-cart.php'; </script>";
}


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>Dallas - Plant store.php</title>

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">

		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">

	</head>
    <body class="cnt-home">
	
		
	
		<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">
<?php include('includes/top-header.php');?>
<section class="about py-5" id="about">

        <div style = "font-family: Futura, 'Century Gothic', AppleGothic, sans-serif;" class="container">
		<div class="row max-height justify-content-center align-items-center">
                <div class="col-10 mx-auto banner text-center">
                    <h1 style = "padding-top:20px;"class="text-capitalize">Welcome to <strong class="banner-title"  style = "font-family: 'Pacifico';" >Dallas</strong></h1>
		</div>
            <div  class="row">
                <div style = "padding-top:10px" class="col-10 mx-auto col-md-4 my-5">
                    <h1 class="text-capitalize">Info <strong class="banner-title "> </strong></h1>
                    <p style = "font-size: 16px; " class="my-4 text-muted w-75">
				<ul style='margin: 0px 0px 20px; padding: 0px; border: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 100; font-stretch: inherit; font-size: 15px; line-height: 26px; font-family: Futura, "Century Gothic", AppleGothic, sans-serif; list-style: outside none; color: rgb(64, 64, 64); letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;'>
					<li style="margin: 0px; padding: 6px 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.8em; font-family: inherit; list-style-type: disc; list-style-position: inside;">offering<strong style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit;">&nbsp;<a style="margin: 0px; padding: 0px; border: 0px; font: inherit; color: rgb(136, 8, 8); text-decoration: none; outline: 0px; transition: color 0.3s ease-out 0s; touch-action: manipulation;">delivery</a>&nbsp;</strong>and<strong style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit;">&nbsp;<a style="margin: 0px; padding: 0px; border: 0px; font: inherit; color: rgb(136, 8, 8); text-decoration: none; outline: 0px; transition: color 0.3s ease-out 0s; touch-action: manipulation;">curbside pickup</a></strong></li>
					<li style="margin: 0px; padding: 6px 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.8em; font-family: inherit; list-style-type: disc; list-style-position: inside;"><span style="margin: 0px; padding: 0px; border: 0px; font: inherit;">We&nbsp;</span><strong style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit;">restock</strong><span style="margin: 0px; padding: 0px; border: 0px; font: inherit;">&nbsp;once a week and we keep the website up to date. You can sign up for&nbsp;</span><strong style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit;">email restock alerts&nbsp;</strong><span style="margin: 0px; padding: 0px; border: 0px; font: inherit;">by going into&nbsp;a listing and clicking the email link on the left.</span></li>
					<li style="margin: 0px; padding: 6px 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.8em; font-family: inherit; list-style-type: disc; list-style-position: inside;">Returns and replacements are on a case-by-case basis with the ultimate goal of making you happy. If you&apos;re not satisfied with your recent purchase, please email us at dallasplant@gmail.com</li>
				</ul>
				<p style='margin: 0px 0px 20px; padding: 0px; border: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 100; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: Futura, "Century Gothic", AppleGothic, sans-serif; color: rgb(64, 64, 64); letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;'><span style="margin: 0px; padding: 0px; border: 0px; font: inherit; color: rgb(0, 0, 0);">Hanoi University, km9 Nguyen Trai Thanh Xuan, Ha Noi</span><br><span style="margin: 0px; padding: 0px; border: 0px; font: inherit; color: rgb(0, 0, 0);">Hours: 7 - 9pm</span><br><span style="margin: 0px; padding: 0px; border: 0px; font: inherit; color: rgb(0, 0, 0);">Phone: 123.456.789
				</p>
                    <a style = "font-family: 'Montserrat';" href="store.php" class="btn btn-outline-secondary btn-black text-uppercase">explore</a>
                </div>
                <div class="col-10 mx-auto col-md-5 align-self-center my-4">
                    <div class="about-img__container">
					<img 
					style = "background-image: cover; height: 550px; padding-top: 30px; " src="img/banner.gif" class="img-fluid" alt=""></div>
                </div>
            </div>
		</div>
	
    </section>

	

</body>
</html>