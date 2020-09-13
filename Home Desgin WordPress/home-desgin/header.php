<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Home-Desgin
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Favicons -->
	  <link href="<?php bloginfo('stylesheet_directory')?>/images\logo\icon.png" rel="icon">
  	<link href="<?php bloginfo('stylesheet_directory')?>/images\logo\apple-touch.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
		rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Libraries CSS Files -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/vendors/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/vendors/animate.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/vendors/all.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/vendors/lightbox.min.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/style.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/style.css">
  

	<title>الرئيسية</title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--==========================
      Preloader
    ============================-->   
       

<!-- Start contact bar -->
<header>
    <div class="icon-bar">
		  <a href="https://www.facebook.com/homedesignkt/" class="facebook"><i class="fab fa-facebook-f"></i></a> 
		  <a href="https://www.twitter.com" class="instagram"><i class="fab fa-instagram"></i></a> 
      <a href="https://www.youtube.com" class="youtube"><i class="fab fa-youtube"></i></a> 
      <a href="tel:+01006734430" class="phone"><i class="fas fa-phone"></i></a> 
		</div>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="logo wow fadeInUp" style="visibility: visible; animation-duration: 2s; animation-name: fadeInUp;" data-wow-delay=".9s" >
          <a href="#">
          <img src="<?php bloginfo('stylesheet_directory')?>/images\logo\logo.png" alt="" class="img-logo"  width="150px" height="40px">
          </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>  

        <div class="collapse navbar-collapse wow fadeInDown" style="visibility: visible; animation-duration: 2s; animation-name: fadeInDown;"  data-wow-delay=".9s" id="navbarSupportedContent">
      
        <ul class="navbar-nav mr-auto">
            <li class="list-item"><a href="الرئيسية" class="list1">الرئيسية</a></li>
            <li class="list-item"><a href="مطابخ" class="list2">المطابخ</a></li>
            <li class="list-item"><a href="من-نحن" class="list4">من نحــن</a></li>
            <li class="list-item"><a href="اتصل-بنــــا" class="list5">اتصل بنــا</a></li>
          </ul>
        </div>
      </nav>
    </div>

  </header>