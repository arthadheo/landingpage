<?php $dist_img = $this->config->item('dist_images_url'); ?>
<!-- section one -->
<section class="section-one zm-bg-light" id="home1">
	<div class="container">
		<div class="zm-content-one">
			<div class="row">
				<div class="col-lg-8">
					<h1 class="zm-content-title zm-font-left">Hubungi Kami</h1>
					<p class="zm-content-subtitle zm-mb_r-3 zm-font-left">Ahli Gamification terbaik 
                        kami akan segera menghubungi anda kembali.
                    </p>
                    <div class="row">
                        <div class="col-lg-12">
                            <?php echo $this->session->flashdata('msg'); ?>
                            <form action="<?php echo base_url(); ?>contact/send_message" method="POST" enctype='multipart/form-data'>
                                <div class="form-group">
                                    <label class="zm-font-s_16 zm-font-500" for="name">Nama</label>
                                    <input type="text" autocomplete="off" class="form-control" 
                                    id="name" name="nameContact" placeholder="Masukkan Namamu" required>
                                </div>
                                <div class="form-group">
                                    <label class="zm-font-s_16 zm-font-500" for="name">No. HP/Telp</label>
                                    <input type="text" autocomplete="off" class="form-control zm-nmbr" 
                                    id="hp" name="hpContact" placeholder="Masukkan No Hp" required>
                                </div>
                                <div class="form-group">
                                    <label class="zm-font-s_16 zm-font-500" for="email">Email</label>
                                    <input type="email" autocomplete="off" class="form-control" 
                                    id="email" name="emailContact" aria-describedby="emailHelp" 
                                    placeholder="Masukkan Emailmu" required>
                                </div>
                                <div class="form-group">
                                    <label class="zm-font-s_16 zm-font-500" for="msg">Pesan</label>
                                    <input type="text" autocomplete="off" class="form-control" name="msgContact" 
                                    id="msg" placeholder="Saya ingin..." required>
                                </div>
                                <button type="submit" class="btn zm-s_red-ct zm-font-500" title="Kirim pesan">kirim</button>
                            </form>
                        </div>
                    </div>
				</div>
				<div class="col-lg-4 zm-xs-contact_add">
					<h1 class="zm-content-subtitle zm-font-bold zm-font-left zm-mb-5">Alamat</h1>
                    <p class="zm-desc-e_gamify zm-mb_r-3 zm-font-left zm-font-s_16" style="line-height: 23px;">
                        <span class="zm-font-500">Jakarta Digital Valley, 
                        Menara Multimedia</span> 6th Floor - Jalan Kebon Sirih No. 12, 
                        Gambir, Jakarta Pusat 10110</p>
					<h1 class="zm-content-subtitle zm-font-bold zm-font-left zm-mb-5">Email</h1>
					<p class="zm-desc-e_gamify zm-mb_r-3 zm-font-left zm-font-s_16" style="line-height: 23px;">
                       <a href="mailto:halo@zoomin.id?Subject=Ini%20pesanku"><span class="zm-font-500">halo@zoomin.id</span></a>
                    </p>
					<h1 class="zm-content-subtitle zm-font-bold zm-font-left zm-mb-5">No. Telp</h1>
					<p class="zm-desc-e_gamify zm-mb_r-3 zm-font-left zm-font-s_16" style="line-height: 23px;">
                       <a href=""><span class="zm-font-500">0813-2215-1415</span></a>
                    </p>
				</div>
            </div>
		</div>
	</div>
</section>
<!-- /section one -->
<!-- Javascript start -->
<script>
    $(document).ready(function(){
		$(".zm-nmbr").keypress(function (e) {
			//if the letter is not digit then display error and don't type anything
			if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
				return false;
			}
		});
    })
</script>