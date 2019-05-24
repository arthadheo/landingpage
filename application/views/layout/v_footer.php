<?php $dist_img = $this->config->item('dist_images_url'); ?>
<!-- footer -->
<footer class="footer py-5">
	<div class="container pt-lg-4">
		<div class="row">
            <div class="col-lg-6">
                <div class="zm-d-block;">
                    <img src="<?php echo base_url(); echo $dist_img; ?>logos/zoomin_logo_black.png" alt="">
                </div>
                <p class="zm-p">Zoomin menyediakan solusi <i>gamification</i> untuk aplikasi karyawan, khususnya teknisi, untuk membantu meningkatkan produktivitas kerja teknisi Anda.</p>
            </div>
            <div class="col-lg-2 zm-xs-bottom-nav">
                <div class="zm-d-block zm-xs-d-bottom-block">
                    <a href="<?php echo base_url(); ?>" class="zm-p">Beranda</a>
                </div>
                <div class="zm-d-block zm-xs-d-bottom-block">
                    <a href="" class="zm-p">Solusi</a>
                    <ul style="margin-left: 2rem;">
                        <li> <a href="" class="zm-p">Aplikasi</a> </li>
                        <li> <a href="" class="zm-p">Platform</a></li>
                    </ul>
                </div>
                <div class="zm-d-block zm-xs-d-bottom-block">
                    <a href="" class="zm-p">Blog</a>
                </div>
                <div class="zm-d-block zm-xs-d-bottom-block">
                    <a href="<?php echo base_url(); ?>contact" class="zm-p zm-color-red">Kontak</a>
                </div>
            </div>
           <!--  <div class="col-lg-3">
                <div class="zm-mb-10 zm-d-block">
                    <a href="" class="zm-p zm-font-500">Layanan</a>
                    <ul style="margin-left: 2rem;">
                        <li> <a href="<?php echo base_url(); ?>services" class="zm-p">Operation and Maintenance</a> </li>
                        <li> <a href="<?php echo base_url(); ?>services" class="zm-p">Sales Management</a> </li>
                        <li> <a href="<?php echo base_url(); ?>services" class="zm-p">Project Management</a> </li>
                        <li> <a href="<?php echo base_url(); ?>services" class="zm-p">E-Learning</a> </li>
                        <li> <a href="<?php echo base_url(); ?>services" class="zm-p">Loyalty Program</a> </li>
                    </ul>
                </div>
                <div class="zm-mb-10 zm-d-block">
                    <a href="<?php echo base_url(); ?>products" class="zm-p zm-font-500">Produk</a>
                </div>
            </div> -->
            <div class="col-lg-3">
                <div class="zm-mb-10 zm-d-block">
                    <h6><b>Subscribe</b></h6>
                    <p class="zm-p zm-font-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                </div>
                <div class="zm-mb-10 zm-d-block">
                    <p class="zm-p zm-font-500">Media Sosial</p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-3 zm-fsosmed-mobile">
                        <a href="https://www.youtube.com/channel/UC6IremYsOD94kXBE35h70CA" class="zm-social" target="_blank" title="Youtube Zoomin Indonesia">
                            <i class="fa fa-youtube-square" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-3 zm-fsosmed-mobile">
                        <a href="https://www.linkedin.com/company/zoomin-indonesia/" class="zm-social" target="_blank" title="LinkedIn Zoomin Indonesia">
                            <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-3 zm-fsosmed-mobile">
                        <a href="https://web.facebook.com/zoomin.id/" class="zm-social" target="_blank" title="Facebook Zoomin Indonesia">
                            <i class="fa fa-facebook-square" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-3 zm-fsosmed-mobile">
                        <a href="https://www.instagram.com/zoominid/" class="zm-social" target="_blank" title="Instagram Zoomin Indonesia">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
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