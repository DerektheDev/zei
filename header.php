<?php
	$site_live	=	true;
	$site_live	==	true ? $root='' : $root='/content'
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link rel="icon" 
      type="image/png" 
      href="<?php echo $root; ?>/images/favicon.ico" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="keywords" content="text/html" />

<link rel="stylesheet" href="<?php echo $root; ?>/styles/styles.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $root; ?>/styles/slider-styles.css" type="text/css" />

<style type="text/css">
img, div, a, input { behavior: url(css/iepngfix.htc) }
</style>
<script type='text/javascript' src='<?php echo $root; ?>/js/jquery-1.6.2.min.js'></script>
<script type='text/javascript' src='<?php echo $root; ?>/js/custom_scripts.js'></script>
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

<div id="wrapper">

<div id="container">

<div id="header">

<h1>Zeller Electric, Inc.</h1>

<div id="menu">
 <ul class="dropdown">
 <li><a href="<?php echo $root; ?>/">Home</a></li>
  <li>Showcase
    <ul>
    	<li><a href="<?php echo $root; ?>/showcase/commercial.php">Commercial</a></li>
    	<li><a href="#">Residential</a></li>
		<li><a href="<?php echo $root; ?>/showcase/agricultural.php">Agricultural</a></li>
		<li><a href="<?php echo $root; ?>/showcase/design-build.php">Design/Build</a></li>
		<li><a href="#">Data Communication</a></li>
	</ul>
  </li>
  <li><a href="<?php echo $root; ?>/services.php">Services</a></li>
  <li><a href="<?php echo $root; ?>/affiliations.php">Affiliations</a></li>
  <li><a href="<?php echo $root; ?>/contact.php">Contact</a></li>
</ul>
</div> <!--end menu-->

</div> <!--end header-->