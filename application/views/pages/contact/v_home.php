<?php $dist_img = $this->config->item('dist_images_url'); ?>
<div id="home"></div>
<!-- section one -->
<section class="section-one zm-bg-light" id="home1">
	<div class="container">
		<div class="zm-content-one">
			<div class="row">
				<div class="col-lg-8">
                    <div>
					    <h1 class="zm-content-title zm-font-left zm-lh-20">Mau teknisi Anda lebih produktif?</h1>
                    </div>
					<span class="zm-subtitle zm-mb_r-2 zm-font-left zm-font-normal">Kami menyediakan solusi gamification untuk 
                    <h1 class="zm-subtitle zm-mb_r-2 zm-font-left zm-font-normal zm-d-inline">HR software Indonesia, </h1>
                    <span>khususnya untuk tenaga kerja teknisi, Anda tertarik? Silahkan isi data dibawah ini dan ahli gamification kami akan segera menghubungi Anda kembali.</span></span>
                    <div class="row zm-pt-30">
                        <div class="col-lg-12">
                            <?php echo $this->session->flashdata('msg'); ?>
                            <form action="<?php echo base_url(); ?>contact/send_email" method="POST" enctype='multipart/form-data'>
                                <div class="form-group">
                                    <label class="zm-font-s_16 zm-font-500 zm-font-bold" for="name">Nama</label>
                                    <input type="text" autocomplete="off" class="form-control" 
                                    id="name" name="nameContact" required>
                                </div>
                                <div class="form-group">
                                    <label class="zm-font-s_16 zm-font-500 zm-font-bold" for="institusi">Asal Institusi / Perusahaan</label>
                                    <input type="text" autocomplete="off" class="form-control" 
                                    id="institusi" name="institusiContact" required>
                                </div>
                                <div class="form-group">
                                    <label class="zm-font-s_16 zm-font-500 zm-font-bold" for="email">Email</label>
                                    <input type="text" autocomplete="off" class="form-control"  
                                    id="email" name="emailContact" aria-describedby="emailHelp" 
                                    required>
                                </div>
                                <div class="form-group" >
                                    <label class="zm-font-bold" for="msg">Pesan</label>
                                    <textarea class="zm-font-s_16 zm-font-500 form-control zm-height-150" name="msgContact" 
                                    id="msg" required></textarea>
                                </div>
                                <button type="submit" class="btn zm-s_red-ct zm-font-500" title="Kirim pesan">kirim</button>
                            </form>
                        </div>
                    </div>
				</div>
				<div class="col-lg-4 zm-xs-contact_add">
					<h1 class="zm-content-subtitle zm-font-left zm-font-bold zm-mb-5 ">Alamat</h1>
                    <p class="zm-desc-e_gamify zm-mb_r-3 zm-font-left zm-font-s_16 zm-lh-23">
                        <span class="zm-font-500 zm-font-light">Menara Multimedia, Lt.6</span><br> Jl. Kebon Sirih No.12, RT.11/RW.2, Gambir, 
                        Kota Jakarta Pusat, DKI Jakarta 10110</p>
                        <hr size="100%">
					<h1 class="zm-content-subtitle zm-font-bold zm-font-left zm-mb-5 zm-pt-30">Email</h1>
					<p class="zm-desc-e_gamify zm-mb_r-3 zm-font-left zm-font-s_16 zm-lh-23">
                       <span class="zm-font-500">halo@zoomin.id</span></a>
                    </p>
                    <hr size="100%">
					<h1 class="zm-content-subtitle zm-font-bold zm-font-left zm-mb-5 zm-pt-30">No. Telp</h1>
					<p class="zm-desc-e_gamify zm-mb_r-3 zm-font-left zm-font-s_16 zm-lh-23">
                       <span class="zm-font-500">0813-2215-1415</span></a>
                    </p>
                    <hr size="100%" >
				</div>
            </div>
		</div>
	</div>
</section>
<!-- /section one -->
<!-- Javascript start -->
<script>
    $(document).ready(function(){
        $('#contact').addClass('active');
		$(".zm-nmbr").keypress(function (e) {
			//if the letter is not digit then display error and don't type anything
			if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
				return false;
			}
		});
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

