<?php  $img = $this->config->item('dist_images_url'); ?>
<!-- header -->
<header>
	<div class="container">
		<!-- nav -->
		<nav class="py-2">
			<div id="logo" >
				 <a href="<?php echo base_url(); ?>"> <img class="zm-logo-brand" src="<?php echo base_url(); echo $img; ?>/logos/zoomin_logo_black.png" alt="zoomin-indonesia-logo"></a>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul id="zm-large-view"class="menu ml-auto mt-2" style="padding-bottom: 5px;">
				<li id="home" class="zm-subtitle"><a href="<?php echo base_url(); ?>">Beranda</a></li>
				<li id="services" class="dropdown">
				<a class="dropdown-toggle red zm-subtitle" id="solusi" data-toggle="dropdown" href="" style="font-size: 14px;">Solusi</a>
				<span class="caret"></span></a>
        			<ul class="dropdown-menu">
          				<li id="aplikasi" class="zm-subtitle"><a href="<?php echo base_url(); ?>aplikasi" style="font-size: 14px;">Aplikasi</a></li>
          				<li id="platform" class="zm-subtitle"><a href="<?php echo base_url(); ?>platform" style="font-size: 14px;">Platform</a></li>
        			</ul>
				<li id="blog" class="zm-subtitle"><a href="//blog.zoomin.id" style="font-size: 14px;">Blog</a></li>
				<li id="contact" class="zm-subtitle"><a href="<?php echo base_url(); ?>contact" style="font-size: 14px;">Kontak</a></li>
			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->