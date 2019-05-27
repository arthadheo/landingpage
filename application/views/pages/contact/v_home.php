<?php $dist_img = $this->config->item('dist_images_url'); ?>
<!-- section one -->
<section class="section-one zm-bg-light" id="home1">
	<div class="container">
		<div class="zm-content-one">
			<div class="row">
				<div class="col-lg-8">
					<h1 class="zm-content-title zm-font-left">Hubungi Kami</h1>
					<p class="zm-subtitle zm-mb_r-2 zm-font-left">Kami menyediakan solusi gamification untuk HR software Indonesia, khususnya untuk tenaga kerja teknisi, Anda tertarik? <br> Silahkan isi data dibawah ini dan ahli gamification kami akan segera menghubungi Anda kembali.
                    </p>
                    <div class="row">
                        <div class="col-lg-12">
                            <?php echo $this->session->flashdata('msg'); ?>
                            <form action="<?php echo base_url(); ?>contact/send_message" method="POST" enctype='multipart/form-data'>
                                <div class="form-group">
                                    <label class="zm-font-s_16 zm-font-500" for="name">Nama</label>
                                    <input type="text" style="background-color: #D3D3D3" autocomplete="off" class="form-control" 
                                    id="name" name="nameContact" required>
                                </div>
                                <div class="form-group">
                                    <label class="zm-font-s_16 zm-font-500" for="name">Asal Institusi / Perusahaan</label>
                                    <input type="text" style="background-color: #D3D3D3" autocomplete="off" class="form-control" 
                                    id="institusi" name="institusiContact" required>
                                </div>
                                <div class="form-group">
                                    <label class="zm-font-s_16 zm-font-500" for="email">Email</label>
                                    <input type="email" style="background-color: #D3D3D3" autocomplete="off" class="form-control" 
                                    id="email" name="emailContact" aria-describedby="emailHelp" 
                                    required>
                                </div>
                                <div class="form-group" >
                                    <label for="msg">Pesan</label>
                                    <textarea class="zm-font-s_16 zm-font-500 form-control" name="msgContact" 
                                    id="msg" style="height:150px; background-color: #D3D3D3;" required></textarea>
                                </div>
                                <button type="submit" class="btn zm-s_red-ct zm-font-500" title="Kirim pesan">kirim</button>
                            </form>
                        </div>
                    </div>
				</div>
				<div class="col-lg-4 zm-xs-contact_add">
					<h1 class="zm-content-subtitle zm-font-bold zm-font-left zm-mb-5">Alamat</h1>
                    <p class="zm-desc-e_gamify zm-mb_r-3 zm-font-left zm-font-s_16" style="line-height: 23px;">
                        <span class="zm-font-500">Menara Multimedia, Lt.6</span><br> Jl. Kebon Sirih No.12, RT.11/RW.2, Gambir, 
                        Kota Jakarta Pusat, DKI Jakarta 10110</p>
                        <hr size="100%">
					<h1 class="zm-content-subtitle zm-font-bold zm-font-left zm-mb-5" style="padding-top: 30px;">Email</h1>
					<p class="zm-desc-e_gamify zm-mb_r-3 zm-font-left zm-font-s_16" style="line-height: 23px;">
                       <a href="mailto:halo@zoomin.id?Subject=Ini%20pesanku"><span class="zm-font-500">halo@zoomin.id</span></a>
                    </p>
                    <hr size="100%">
					<h1 class="zm-content-subtitle zm-font-bold zm-font-left zm-mb-5" style="padding-top: 30px;">No. Telp</h1>
					<p class="zm-desc-e_gamify zm-mb_r-3 zm-font-left zm-font-s_16" style="line-height: 23px;">
                       <a href=""><span class="zm-font-500">0813-2215-1415</span></a>
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
		$(".zm-nmbr").keypress(function (e) {
			//if the letter is not digit then display error and don't type anything
			if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
				return false;
			}
		});
    })
</script>