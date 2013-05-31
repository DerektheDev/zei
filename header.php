<?php
  $site_live  = true;
  $site_live  ==  true ? $root='' : $root='/content'
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="icon" 
      type="image/png" 
      href="<?php echo $root; ?>/images/favicon.ico" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="keywords" content="text/html" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="<?php echo $root; ?>/vendor/assets/bootstrap/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $root; ?>/vendor/assets/bootstrap/css/bootstrap-responsive.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $root; ?>/styles/styles.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $root; ?>/styles/slider-styles.css" type="text/css" />

<style type="text/css">
img, div, a, input { behavior: url(css/iepngfix.htc) }
</style>
<script type='text/javascript' src='/js/jquery-1.9.1.js'></script>
<script type='text/javascript' src='/vendor/assets/bootstrap/js/bootstrap.js'></script>
<script type='text/javascript' src='/vendor/assets/jquery-smooth-scroll/jquery.smooth-scroll.min.js'></script>
<script type='text/javascript' src='/js/custom_scripts.js'></script>


<script type='text/javascript'>

$(function(){
  
  $('.thumbnail').hover(
    function(){
      $(this).find('h5').addClass('thumbHovered');
    },
    function(){
      $(this).find('h5').removeClass('thumbHovered');
  });
  
  $('a').smoothScroll();
});

</script>

<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Unna' rel='stylesheet' type='text/css'>
<link href='/vendor/assets/font-awesome/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
<!--[if lte IE 7]>
  <link href='/vendor/assets/font-awesome/css/font-awesome-ie7.min.css' rel='stylesheet' type='text/css'>
<![endif]-->

<title>Zeller Electric, Inc. Providing excellent electrical contracting service in Central Illinois with honesty and integrity since 1979</title>

</head>

<body>

<div class="container">

<header id="header">
  <?php include('header_nav.php'); ?>
</header> <!--end header-->

<div id="content">
  <div class="padded">
