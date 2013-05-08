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

<link rel="stylesheet" href="<?php echo $root; ?>/styles/styles.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $root; ?>/styles/slider-styles.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $root; ?>/vendor/assets/bootstrap/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $root; ?>/vendor/assets/bootstrap/css/bootstrap-responsive.min.css" type="text/css" />

<style type="text/css">
img, div, a, input { behavior: url(css/iepngfix.htc) }
</style>
<script type='text/javascript' src='<?php echo $root; ?>/js/jquery-1.6.2.min.js'></script>
<script type='text/javascript' src='<?php echo $root; ?>/js/custom_scripts.js'></script>
<script type='text/javascript' src='<?php echo $root; ?>/vendor/assets/bootstrap/js/bootstrap.min.js'></script>

<script type='text/javascript'>

$(function(){
  
  $('.thumbnail').hover(
    function(){
      $(this).find('h5').addClass('thumbHovered');
    },
    function(){
      $(this).find('h5').removeClass('thumbHovered');
  });
});

</script>

<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Unna' rel='stylesheet' type='text/css'>

<title>Zeller Electric, Inc. Providing excellent electrical contracting service in Central Illinois with honesty and integrity since 1979</title>

</head>

<body>

<div class="container">

<header id="header" class="row-fluid">
  <div class="padded span12">
    <!-- <h1 class="span5">Zeller Electric, Inc.</h1> -->
    <a href='<?php echo $root; ?>/' class="span5">
      <div class="row-fluid">
        <img src='<?php echo $root; ?>/images/header_logo_only.gif' class='span12' />
      </div>
    </a>
    <?php include('header_nav.php'); ?>
  </div>
</header> <!--end header-->

<div id="content">
  <div class="padded">
