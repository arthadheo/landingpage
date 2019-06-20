<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
<?php $dist_img = $this->config->item('dist_images_url'); ?>
<!-- footer -->
<footer class="footer py-5 zm-bg-dark">
	<div class="container">
		<div class="row">
            <div class="col-lg-5">
                <div class="zm-d-block;">
                    <img src="<?php echo base_url(); echo $dist_img; ?>logos/zoomin_logo_white.png" width= "141px;" height= "50.08px"; alt="">
                </div>
                <p class="zm-p text-white">Zoomin menyediakan solusi <i>gamification</i> untuk aplikasi
                karyawan, khususnya teknisi, untuk membantu meningkatkan produktivitas kerja teknisi Anda.</p>
            </div>
            <div class="col-lg-2 zm-xs-bottom-nav">
                <div class="zm-d-block zm-xs-d-bottom-block">
                    <a href="<?php echo base_url(); ?>" class="zm-p text-white">Beranda</a>
                </div>
                <div class="zm-mb-10 zm-d-block">
                    <a href="" class="zm-p zm-font-500 text-white">Solusi</a>
                    <ul style="margin-left: 2rem;">
                        <li> <a href="<?php echo base_url(); ?>aplikasi" class="zm-p text-white">Aplikasi</a> </li>
                        <li> <a href="<?php echo base_url(); ?>services" class="zm-p text-white">Teknisi</a> </li>
                    </ul>
                </div>
                <div class="zm-d-block zm-xs-d-bottom-block">
                    <a href="" class="zm-p text-white">Blog</a>
                </div>
                <div class="zm-d-block zm-xs-d-bottom-block">
                    <a href="<?php echo base_url(); ?>contact" class="zm-p text-white">Kontak</a>
                </div>
            </div> -->
            <div class="col-lg-4" style="padding: 0px">
                <div class="zm-mb-10">
                    <p class="zm-font-s_18 zm-font-300 text-white">Subscribe to our newsletter</p>
                    <p class="zm-font-s_14 text-white">Dapatkan berita dan informasi teknisi tentang Zoomin</p>
                </div>
                <!-- Begin Mailchimp Signup Form -->
                <div id="mc_embed_signup">
                <form action="https://zoomin.us20.list-manage.com/subscribe/post?u=876410a7b51e8d1153c365d7a&amp;id=78562d6058" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate style="background-color: #272A2F">
                    <div id="mc_embed_signup_scroll" class="card-block">
                    <div class="card-body">
                        <fieldset class="input-group">
                            <div class="input-group-prepend">
                                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                                <div class="clear"><input type="submit" value="SUBSCRIBE" name="subscribe" id="mc-embedded-subscribe" class="button" style="background-color: #FF3333"></div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                </form>
                </div>

                <!--End mc_embed_signup-->                
                <div class="zm-mb-10 zm-d-block">
                    <p class="zm-p zm-font-500 text-white">Media Sosial</p>
                </div>
                <div class="row">
                    <div class="col-lg-1 col-sm-3 zm-fsosmed-mobile">
                        <a href="https://www.youtube.com/channel/UC6IremYsOD94kXBE35h70CA" class="zm-social" target="_blank" title="Youtube Zoomin Indonesia">
                            <i class="fa fa-youtube-square" style="color:white" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col-lg-1 col-sm-3 zm-fsosmed-mobile">
                        <a href="https://www.linkedin.com/company/zoomin-indonesia/" class="zm-social" target="_blank" title="LinkedIn Zoomin Indonesia">
                            <i class="fa fa-linkedin-square" style="color:white" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col-lg-1 col-sm-3 zm-fsosmed-mobile">
                        <a href="https://web.facebook.com/zoomin.id/" class="zm-social" target="_blank" title="Facebook Zoomin Indonesia">
                            <i class="fa fa-facebook-square" style="color:white" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col-lg-1 col-sm-3 zm-fsosmed-mobile">
                        <a href="https://www.instagram.com/zoominid/" class="zm-social" target="_blank" title="Instagram Zoomin Indonesia">
                            <i class="fa fa-instagram" style="color:white" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
		</div>
	</div>
	<!-- //footer bottom -->
</footer>
<!-- //footer -->

<!-- copyright -->
<!-- 
<section class="copy-right py-4">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<p class="">© 2019 Zoomin Indonesia. All rights reserved 
				</p>
			</div>
		</div>
	</div>
</section>
 -->
 <!-- //copyright -->

<!-- move top -->
<!-- <div class="move-top text-right">
	<a href="#home" class="move-top"> 
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div> -->
<!-- move top -->
	<?php $this->load->view('layout/ext/_js'); ?>

</body>
</html>