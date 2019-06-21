<style>
    input:focus { 
    outline: none !important;
    border-color: #ED2A2E !important;
    box-shadow: 0 0 3px #ED2A2E !important;
}
</style>

<?php $dist_img = $this->config->item('dist_images_url'); ?>
<div id="home"></div>
<!-- section one -->
<section class="section-one zm-bg-light" id="home1">
<div class="hero-bg" style="background-image: url('<?php echo base_url();?>/dist/Assets/Homepage/hero-homepage.png');" alt="video tentang gamification zoomin">
    <div class="container">
        <div class="zm-content-one">
            <div id="ops_and_main" class="zm-d-initial">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center zm-s-s_wrap">
                        <p class="zm-home-title zm-xs-s_text text-white">Mau teknisi Anda lebih produktif?</p>
                    </div>
					<div class="col-lg-12 d-flex justify-content-center align-items-center zm-xs-s_wrap_img ">
						<div class="bs-example">
					    	<!-- Button HTML (to Trigger Modal) -->
					    	<a href="#myModal" data-toggle="modal">
 								<img src="<?php echo base_url();?>/dist/Assets/Homepage/play-button.png" height="90"> 
							</a>						    
						    <!-- Modal HTML -->
						   	<div id="myModal" class="modal fade">
						       	<div class="modal-dialog">
						           	<div class="modal-content">
					              		<div class="modal-header">
					                    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					                	</div>
					                	<div class="modal-body">
					                    	<iframe id="zoominVideo" width="560" height="315" src="//www.youtube.com/embed/dgPx5HbrOxg" frameborder="0" allowfullscreen></iframe>
						                </div>
						            </div>
						        </div>
						    </div>
						</div>
                    </div>
                        <p class="col-lg-12 zm-content-subtitle text-white" style=" font-size: 14px">Zoomin menyediakan solusi gamification untuk aplikasi karyawan
						, khususunya teknisi, <br>untuk membantu meningkatkan produktivitas kinerja teknisi Anda.<br/></p>
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
			<div id="carouselIndicators" class="carousel slide" style="border-radius: 100%;" data-ride="carousel">
  				<ol class="carousel-indicators">
    				<li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
    				<li data-target="#carouselIndicators" data-slide-to="1"></li>
    				<li data-target="#carouselIndicators" data-slide-to="2"></li>
  				</ol>
  				<div class="carousel-inner">
    				<div class="carousel-item active" style="text-align: center">
						<div class="col-lg-12" style="padding-bottom: 30px;">
                       		<span class="zm-content-title"><img class="zm-xs-s_img" src="<?php echo base_url();?>/dist/Assets/Homepage/gamification.png" alt="" width="40" height="40">&nbsp; Gamification</span>
                    	</div>
						<p class="zm-subtitle">&nbsp; ... menurut <i>Merriam-Webster Dictionary</i> adalah proses penambahan 
						elemen-elemen game (seperti poin, kompetisi, dll) ke dalam aktivitas tertentu untuk meningkatkan engangement
						</p>
    				</div>
    				<div class="carousel-item" style="text-align: center">
						<div class="col-lg-12" style="padding-bottom: 30px;">
                       		<span class="zm-content-title"><img class="zm-xs-s_img" src="<?php echo base_url();?>/dist/Assets/Homepage/77_.png" alt="" width="40" height="40">&nbsp; 77% </span>
                    	</div>
						<p class="zm-subtitle">&nbsp; Menurut survey oleh Gallup, 77% karyawan di Indonesia tidak engaged dengan pekerjaannya, yang menyebabkan karyawan tersebut rentan pindah pekerjaan. Hal ini tentu berdampak terhadap biaya rekrutmen ataupun pelatihan yang harus dikeluarkan perusahaan
						</p>
    				</div>
    				<div class="carousel-item" style="text-align: center">
						<div class="col-lg-12" style="padding-bottom: 30px;">
                       		<span class="zm-content-title"><img class="zm-xs-s_img" src="<?php echo base_url();?>/dist/Assets/Homepage/90_.png" alt="" width="40" height="40">&nbsp; 90%</span>
                    	</div>
						<p class="zm-subtitle">&nbsp; Gamification dapat meningkatkan engagement, motivasi, inisiatif, dan jiwa kompetitif karyawan. Terbukti, berdasarkan penelitian, 90% karyawan merasa lebih produktif ketika bekerja dengan menggunakan gamification
						</p>
    				</div>
  				</div>
			</div>
		</div>
	</div>
</section>
<!-- /section two -->

<!-- section three -->
<section class="section-three zm-bg-light" id="home1">
	<div class="container">
		<div class="zm-content-two" style="padding-top: 30px; padding-bottom: 30px">
			<div class="row zm-mb_r-4">
				<div class="col-lg-12">
					<p class="zm-content-title" style="padding-top: 30px;">Pilih solusi kami yang paling tepat untuk Anda</p>
				</div>
			</div>
			<div class="row row-table">
                <div class="col-lg-6" style="padding-left: 30px; padding-right: 30px">
					<div class="col-10 row">
						<div class="col-2 zm-xs-s_wrap_img">
                        	<img class="zm-xs-s_img" src="<?php echo base_url();?>/dist/Assets/Homepage/icon-app.png" alt="">
                    	</div>
						<p class="col-4 zm-title zm-font-left">Aplikasi</p>
					</div>
					<p class="zm-subtitle zm-mb_r-2 zm-font-left border-bottom" style="padding-bottom: 20px;">Aplikasi mobile dengan fitur gamification di dalamnya
					untuk meningkatkan produktivitas kerja teknisi Anda. Cocok untuk Anda yang belum memiliki aplikasi untuk pekerjaan teknisi Anda</p>
					<div class="row">
						<ul class="dashed zm-subtitle col-6">
							<li> Pembagian Work Order</li>
							<li> Sistem pelaporan dan feedback</li>
							<li> Sistem penilaian</li>
						</ul>
						<ul class="dashed zm-subtitle col-6" style="padding: 0">
							<li> Sistem rewarding</li>
							<li> Dashboard monitoring dan konfigurasi</li>
						</ul>
					</div>
					<div class="text-center" style="padding-top: 20px">
						<a href="<?php echo base_url(); ?>aplikasi"><button id="button-stop" type="button" class="btn btn-float btn-float-lg btn-outline-danger btn-block" style="font-weight: bold; font-size: 14px; padding: 10px;">PELAJARI LEBIH LANJUT</button></a>
					</div>
				</div>
                <div class="col-lg-6 border-left" style="padding-left: 30px;">
					<div class="col-10 row">
						<div class="col-2 zm-xs-s_wrap_img">
                        	<img class="zm-xs-s_img" src="<?php echo base_url();?>/dist/Assets/Homepage/icon-platform.png" alt="">
                    	</div>
						<p class="zm-title zm-font-left">Platform</p>
					</div>
					<p class="zm-subtitle zm-mb_r-2 zm-font-left border-bottom" style="padding-bottom: 20px">Platform gamification untuk menambahkan elemen game ke dalam keseharian teknisi. Cocok untuk Anda yang sudah memiliki aplikasi untuk pekerjaan teknisi Anda.</p>
					<div class="row">
						<ul class="dashed zm-subtitle col-6">
							<li> Berbagai pilihan elemen gamification</li>
							<li> Integrasi mudah menggunakan API</li>
						</ul>
						<ul class="dashed zm-subtitle col-6" style="padding: 0; margin-bottom: 56px;">
							<li> Dashboard monitoring dan konfigurasi</li>
						</ul>
					</div>
					<div class="text-center" style="padding-top: 20px">
						<a href="<?php echo base_url(); ?>platform"><button type="button" class="btn btn-float btn-float-lg btn-outline-danger btn-block" style="font-weight: bold; font-size: 14px; padding: 10px;">PELAJARI LEBIH LANJUT</button></a>
					</div>
			    </div>
			</div>
			<div class="row zm-mb_r-4" style="padding-top: 50px">
				<div class="col-lg-12">
					<p class="zm-content-title" style="padding-top: 30px; padding-bottom: 50px">Kini Anda bisa memiliki tim yang tangguh
						<br>hanya dengan mengimplementasikan Zoomin</br></p>
				</div>
				<div class="col-lg-5" style="padding-left: 30px;">
					<div class="col-10 row">						
                        	<img class="zm-xs-s_img" src="<?php echo base_url();?>/dist/Assets/Homepage/icon-tanpa-zoomin.png" alt="">
						<h5 class="zm-title" style="padding-left: 0px; padding-top: 20px;">Tanpa Gamification</h5>
					</div>
					<ul class="dashed zm-subtitle" style="width: 442px; height: 150px;">
						<li> Perusahaan tidak tahu performansi masing-masing teknisi</li>
						<li> Teknisi merasa kurang diberi apresiasi dan reward oleh perusahaan</li>
						<li> Pelaporan kerja manual dan memakan waktu lama</li> 
						<li> Teknisi tidak betah dan mudah resign</li>
						<li> Target pekerjaan tidak tercapai</li>
					</ul>
				</div>
				<div class="col-lg-7">
					<div class="card" style="width: 640px; height: 270px; padding-left: 30px;">
	  					<div class="card-body">
	  						<div class="col-12 row">
                        		<img class="zm-xs-s_img" src="<?php echo base_url();?>/dist/Assets/Homepage/icon-pakai-zoomin.png" alt="" style="width: 60px; height: 60px; padding-top: 10px;">
	    						<h5 class="zm-title text-danger text-center" style="padding-top: 10px;">Dengan Gamification Zoomin</h5>
	    						<ul class="dashed zm-subtitle" style="width: 522px; height: 150px;">
	    							<li> Pelaporan hasil kerja mudah dan tersistem</li>
	    							<li> Feedback diberikan secara langsung</li>
	    							<li> Penilaian performansi masing-masing individu mudah dengan data gamification</li>
	    							<li> Hasil pekerjaan melebihi target</li>
	    							<li> Tidak perlu rekrut karyawan baru untuk mendapatkan hasil yang sama</li>
								</ul>
	    					</div>
	  					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /section three -->

<!-- section four -->
<section class="section-two zm-bg-light-grey" id="gamification">
	<div class="container">
		<div class="zm-content-three">
			<div class="zm-content-title text-center">Apa Kata Mereka</div>
			<div id="carouselIndicators2" class="carousel slide" style="padding-bottom:30px"data-ride="carousel">
  				<ol class="carousel-indicators">
    				<li data-target="#carouselIndicators2" data-slide-to="0" class="active"></li>
    				<li data-target="#carouselIndicators2" data-slide-to="1"></li>
  				</ol>
  				<div class="carousel-inner" role="listbox">
    				<div class="carousel-item active">
    					<div class="col-lg-12">
							<div class="row">
								<div class="col-lg-7 mx-auto">
									<p class="comment">"Bisa mengetahui Poin, membuat kita berlomba-lomba menjadi yang
									terbaik, dan mendapatkan Reward"</p>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<p class="name-comment">Irsan</p>
									<p class="job-comment">Teknisi Preventive Maintenance Indihome</p>
								</div>
    						</div>
    					</div>
  					</div>
  					<div class="carousel-item">
    					<div class="col-lg-12">
							<div class="row">
								<div class="col-lg-7 mx-auto">
									<p class="comment">"Mempermudah pencarian Work Order. Saya suka dengan adanya Poin, membuat lebih semangat"</p>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<p class="name-comment">Sahidin</p>
									<p class="job-comment">Teknisi Preventive Maintenance Indihome</p>
    							</div>
    						</div>
    					</div>
    				</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /section four -->

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
					<p class="zm-content-title">Mau teknisi Anda lebih produktif?</p>
					<p class="zm-content-subtitle">Ubah cara kerja Anda dan teknisi Anda menjadi sesuatu yang mudah dan menyenangkan</p>
				</div>
				<div class="col-lg-12 d-flex justify-content-center align-items-center" style="padding-top: 50px;">
					<button type="button" class="btn zm-s_red-ct" data-toggle="modal" data-target="#myModal1">
					    YA, SAYA MAU
					</button>
           		</div>
			</div>
		</div>
	</div>
</section>
<!-- Javascript start  -->

<script>
	$(document).ready(function () {
		$('#home').addClass('active');
		var url = $("#zoominVideo").attr('src');
    
    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#myModal").on('hide.bs.modal', function(){
        $("#zoominVideo").attr('src', '');
    });
    
    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed again */
    $("#myModal").on('show.bs.modal', function(){
        $("#zoominVideo").attr('src', url);
    });
});

</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124227942-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-124227942-1');
</script>
