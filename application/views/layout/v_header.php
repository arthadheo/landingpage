<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<title><?php echo $title;?></title>
	<meta name="description" content="<?php echo $meta_description; ?>" />
	<meta name="keywords" content="<?php echo $meta_keywords; ?>" />
	<meta name="robots" content="noindex" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- for-mobile-apps -->
	<?php 
    $img = $this->config->item('dist_images_url');
    $dist_css = $this->config->item('dist_css_url');
?>
	<!-- favicon website -->
	<link rel="shortcut icon" type="image/png" href="<?php echo base_url(); echo $img; ?>/logos/fav-zoomin-black.ico" />

	<!-- css files -->
	<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); echo $dist_css; ?>css_slider.css" rel="stylesheet"><!-- Slider css -->
	<link href="<?php echo base_url(); echo $dist_css; ?>bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- bootstrap css -->
	<link href="<?php echo base_url(); echo $dist_css; ?>style.css" rel='stylesheet' type='text/css' />
	<!-- custom css -->
	<link href="<?php echo base_url(); echo $dist_css; ?>font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->	
</head>

<body>
	<?php $this->load->view('layout/ext/v_navbar'); ?>
