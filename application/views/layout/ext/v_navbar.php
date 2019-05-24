<?php  $img = $this->config->item('dist_images_url'); ?>
<!-- header -->
<header>
	<div class="container">
		<!-- nav -->
		<nav class="py-3 d-lg-flex">
			<div id="logo">
				<h1> <a href="<?php echo base_url(); ?>"> <img class="zm-logo-brand" src="<?php echo base_url(); echo $img; ?>/logos/zoomin_logo_black.png" alt="zoomin-indonesia-logo" > </a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul id="zm-large-view"class="menu ml-auto mt-3">
				<li id="home" class=""><a href="<?php echo base_url(); ?>">Beranda</a></li>
				<li id="services" class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="">Solusi</a>
				<span class="caret"></span></a>
        			<ul class="dropdown-menu">
          				<li id="aplikasi"><a href="<?php echo base_url(); ?>aplikasi">Aplikasi</a></li>
          				<li><a href="#">Platform</a></li>
        			</ul>
      			</li>
				<li id="blog" class=""><a href="<?php echo base_url(); ?>blog">Blog</a></li>
				<li id="contact" class=""><a href="<?php echo base_url(); ?>contact">Kontak</a></li>
			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->