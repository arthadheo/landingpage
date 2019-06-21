<style>
    input:focus { 
    outline: none !important;
    border-color: #ED2A2E !important;
    box-shadow: 0 0 3px #ED2A2E !important;
}
</style>

<?php $dist_img = $this->config->item('dist_images_url'); ?>
<div id="home"></div>

<!-- /section one -->
<section class="section-one zm-bg-light" id="home1">
<div class="d-flex flex-column zm-xs-s_wrap_img responsive-image" style="background-image: url('<?php echo base_url();?>/dist/Assets/Solusi - Platform/hero-platform.png');">
    <div class="container">
        <div class="zm-content-one">
            <div id="platform" class="zm-d-initial">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center zm-s-s_wrap">
                        <p class="zm-content-title zm-xs-s_text text-white" style="font-weight: bolder!important;">Mau menambahkan gamification<br> ke dalam aplikasi Anda?<br/></p>
                    </div>
                        <p class="col-lg-12 zm-font-s_14 justify-content-center text-white" style="padding-top: 20px; padding-bottom: 30px; line-height: 146.75%; font-weight: 500; text-align: center;">Apabila anda sudah memiliki aplikasi HRIS untuk teknisi, tambahkan elemen game ke <br> dalam aplikasi tersebut dengan platform gamification Zoomin</p>
                        <div class="col-lg-12 d-flex justify-content-center align-items-center" style="padding-top: 50px;">
							<button type="button" class="btn zm-s_red-ct" data-toggle="modal" data-target="#myModal1">
							    YA, SAYA MAU
							</button>
                   		</div>
                </div>
            </div>
        </div>
	</div>
</div>
</section>
<!-- /section one -->
<!-- section two -->
<section class="section-two zm-bg-light-grey" id="gamification">
	<div class="container">
		<div class="zm-content-three">
			<div class="row zm-mb_r-4">
				<div class="col-lg-12" style="margin: 1rem">
					<h1 class="zm-content-title zm-font-s_30">15++ Elemen Game untuk Anda</h1>
				</div>
			</div>
			<div class="card-deck" style="margin-top: 2rem">
			  <div class="card" class="example z-depth-5">
			    <div class="card-body">
			    	<img src="<?php echo base_url(); echo $dist_img; ?>/elemen/experience-point.png" alt="">
                        <span class="zm-type-service-title zm-font-bolder">Experience Point (XP)</span>
			      <p class="zm-subtitle zm-font-normal" style="padding-top: 20px; padding-left: 3%; border-radius: 8px;">Diberikan setelah menyelesaikan tugas. Dapat dikumpulkan untuk naik level.</p>
			    </div>
			  </div>
			  <div class="card">
			    <div class="card-body">
			    	<img src="<?php echo base_url(); echo $dist_img; ?>/elemen/redeemable-point.png" alt="">
                        <span class="zm-type-service-title zm-font-bolder">Redeemable Point (Coin)</span>
			      <p class="zm-subtitle zm-font-normal" style="padding-top: 20px; padding-left: 3%; border-radius: 8px;">Diberikan setelah menyelesaikan tugas. Dapat ditukarkan dengan rewards yang tersedia.</p>
			    </div>
			  </div>
			  <div class="card">
			    <div class="card-body">
			     <img src="<?php echo base_url(); echo $dist_img; ?>/elemen/badge.png" alt="">
                        <span class="zm-type-service-title zm-font-bolder">Badge</span>
			      <p class="zm-subtitle zm-font-normal" style="padding-top: 20px; padding-left: 3%; border-radius: 8px;">Lencana sebagai bentuk pengakuan kepada teknisi untuk mendapatkan <i>sense of achievement</i></p>
			    </div>
			  </div>
			</div>

			<div class="card-deck" style="margin-top: 2rem">
			  <div class="card">
			    <div class="card-body">
			      <img src="<?php echo base_url(); echo $dist_img; ?>/elemen/voucher.png" alt="">
                        <span class="zm-type-service-title zm-font-bolder">Voucher</span>
			      <p class="zm-subtitle zm-font-normal" style="padding-top: 20px; padding-left: 3%; border-radius: 8px;">Hadiah yang dapat ditukarkan dengan Coin. Voucher dapat berupa voucher belanja, pulsa, dll.</p>
			    </div>
			  </div>
			  <div class="card">
			    <div class="card-body">
			      <img src="<?php echo base_url(); echo $dist_img; ?>/elemen/promo-code.png" alt="">
                        <span class="zm-type-service-title zm-font-bolder">Promo Code</span>
			      <p class="zm-subtitle zm-font-normal" style="padding-top: 20px; padding-left: 3%; border-radius: 8px;">Hadiah yang diberikan perusahaan kepada teknisi dalam bentuk kode khusus, misalnya kode promo diskon, gratis ongkir, dll.</p>
			    </div>
			  </div>
			  <div class="card">
			    <div class="card-body">
			     <img src="<?php echo base_url(); echo $dist_img; ?>/elemen/coupon.png" alt="">
                        <span class="zm-type-service-title zm-font-bolder">Coupon</span>
			      <p class="zm-subtitle zm-font-normal" style="padding-top: 20px; padding-left: 3%; border-radius: 8px;">Hadiah yang diberikan setelah teknisi berhasil melakukan tugas tertentu. Dapat berupa Coupon cuti 1 hari, liburan keluarga, dll.</p>
			    </div>
			  </div>
			</div>

			<div class="card-deck" style="margin-top: 2rem">
			  <div class="card">
			    <div class="card-body">
			     <img src="<?php echo base_url(); echo $dist_img; ?>/elemen/lucky-spin.png" alt="">
                        <span class="zm-type-service-title zm-font-bolder">Lucky Spin</span>
			      <p class="zm-subtitle zm-font-normal" style="padding-top: 20px; padding-left: 3%; border-radius: 8px;">Hadiah yang diberikan setelah teknisi berhasil melakukan tugas tertentu dalam bentuk roda berputar.</p>
			    </div>
			  </div>
			  <div class="card">
			    <div class="card-body">
			     <img src="<?php echo base_url(); echo $dist_img; ?>/elemen/level.png" alt="">
                        <span class="zm-type-service-title zm-font-bolder">Level</span>
			      <p class="zm-subtitle zm-font-normal" style="padding-top: 20px; padding-left: 3%; border-radius: 8px;">Representasi dari semua progress yang telah dilakukan teknisi. Kenaikan level didapatkan ketika XP mencapai angka tertentu.</p>
			    </div>
			  </div>
			  <div class="card">
			    <div class="card-body">
			      <img src="<?php echo base_url(); echo $dist_img; ?>/elemen/leaderboard.png" alt="">
                        <span class="zm-type-service-title zm-font-bolder">Leaderboard</span>
			      <p class="zm-subtitle zm-font-normal" style="padding-top: 20px; padding-left: 3%; border-radius: 8px;">Menampilkan ranking yang diperoleh oleh teknisi berdasarkan akumulasi XP yang didapat.</p>
			    </div>
			  </div>
			</div>
			<center>
				 <h3 class="zm-content-subtitle" style="margin-top: 5rem; padding-bottom: 10px;">...dan masih banyak lagi</h6>
				 	<hr size="10px">
				 </center>	
			</div>
		<div class="row zm-xs-product" style="margin-bottom: 50px;">
				<div class="col-md-6 d-flex align-items-right zm-xs-s_wrap_img">
				        <img class="zm-xs-s_img" style="max-height: 300px;" src="<?php echo base_url();?>dist/images/illustrations/platform-1.png" alt="">
				</div>
				<div class="col-lg-6">
				     <p class="zm-title zm-font-left" style="text-align: justify-all;">Integrasikan API gamification ke dalam aplikasi Anda</p>
				        <div class="pull-left col-lg-3 d-md-block p-1 bg-danger"></div>
				    		<p class="zm-subtitle zm-mb_r-2 zm-font-left" style="text-align: justify-all; padding-top:30px; padding-bottom:30px"> Berbagai elemen game dapat dengan mudah Anda integrasikan ke dalam aplikasi teknisi Anda dengan menggunakan API</p>
				</div>
		</div>
		<div class="row zm-xs-product" style="margin-bottom: 50px;">		
				<div class="col-lg-6">
     				<p class="zm-title zm-font-left" style="text-align: justify-all;">Dashboard untuk monitor dan mengatur sistem rewarding</p>
                        <div class="col-lg-3 d-md-block p-1 bg-danger"></div>
    						 <p class="zm-subtitle zm-mb_r-2 zm-font-left" style="text-align: justify-all; padding-top:30px; padding-bottom:30px">Anda dapat mengevaluasi kinerja masing-masing teknisi melalui dashboard. Selain itu, Anda juga dapat mengatur Mission dan Reward yang ingin Anda berikan kepada tim teknisi. Berikan 10 XP atau 20 XP, semua dapat Anda atur melalui dashboard</p>
       					</div>
		                <div class="col-md-6 d-flex align-items-left zm-xs-s_wrap_img" style="margin-bottom: 50px;">
		                    <img class="zm-xs-s_img" style="max-height: 300px;" src="<?php echo base_url();?>dist/images/illustrations/platform-2.png" alt="">
		                </div>
			</div>
		</div>

</section>
<!-- /section two -->

<!-- MockUp Modal --> 
          <!-- Modal HTML -->
          <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document"	>
                  <div class="modal-content">
                      <div class="modal-footer" style="border-radius: 8px; margin-left: 10px;">
                      	<div style="width: 100%;">
                      		<button  type="button" class="close pull-right" data-dismiss="modal" aria-hidden="true" style="width: 40px; margin-top: 30px; margin-right: 30px;"><img src="<?php echo base_url();?>dist/Assets/Solusi - Platform/elemen/close.png"></button>
                  			<div class="zm-content-title" style="text-align: left; padding-bottom: 30px; padding-top: 30px;">Saya mau meningkatkan produktivitas teknisi saya
                  			</div>
	                          <form action="<?php echo base_url(); ?>contact/send_wa" method="POST" enctype='multipart/form-data'>
							  	<div class="form-group">
					                <label class=" zm-font-bolder" style="color: black;" for="name">Nama Lengkap</label>
					                <input type="text" autocomplete="off" class="form-control"
					                id="name" name="nameContact" required>
					            </div>
					          	<div class="form-group">
				                    <label class="zm-font-bolder" style="color: black;" for="institusi">Asal Institusi / Perusahaan</label>
				                    <input type="text" autocomplete="off" class="form-control"
				                    id="institusi" name="institusiContact" required>
				              	 </div>
				              	<div class="form-group"> 
				                    <label class="zm-font-bolder" style="color: black;" for="institusi">Email</label>
				                    <input type="text" autocomplete="off" class="form-control" 
				                    id="institusi" name="emailContact" required>
				              	 </div>
				              	 <div class="form-group" style=" padding-bottom: 10px; padding-top: 20px;"> 
				              	<button class="btn zm-s_red-ct col-lg-12" type="submit">HUBUNGI SAYA</button>
				              	<!-- <a class="btn zm-s_red-ct col-lg-12" href="https://api.whatsapp.com/send?phone=6282217212700?">HUBUNGI SAYA</a> -->
				              	</div>
				              </form>
                      	</div>
                      </div>
                  </div>
              </div>
          </div>
<!-- /MockUp Modal -->

<!-- contact us -->

<section class="section-three zm-bg-light" id="home1">
	<div class="container">
		<div class="zm-content-three">
			<div class="row ">
				<div class="col-lg-12 zm-mb_r-3">
					<p class="zm-content-title">Mau menambahkan gamification<br>ke dalam aplikasi Anda?</p>
					<p class="zm-subtitle" style="text-align: center;">Ubah cara kerja Anda dan teknisi Anda menjadi sesuatu yang mudah dan menyenangkan</p>
				</div>
				<div class="col-lg-12 d-flex justify-content-center align-items-center">
					<button type="button" class="btn zm-s_red-ct" data-toggle="modal" data-target="#myModal1">
							YA, SAYA MAU
					</button>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- /contact us -->

<!-- Javascript start  -->

<script>
	$(document).ready(function () {
		$('#solusi').css("color","red");

	})

</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124227942-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-124227942-1');
</script>
