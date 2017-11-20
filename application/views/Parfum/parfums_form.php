<?php $this->load->view('template/header'); ?>
<form action="<?php echo $action; ?>" method="post">
	<div class="form-group">
		<label>Kode Parfum</label>
		<input type="text" class="form-control" name="kode_parfum" required placeholder="Masukkan Kode Parfum" value="<?php echo $kode_parfum; ?>">
	</div>
	<div class="form-group">
		<label>Nama Parfum</label>
		<input type="text" class="form-control" name="nama_parfum" required placeholder="Masukkan Nama" value="<?php echo $nama_parfum; ?>">
	</div>
	<div class="form-group">
		<label>Harga per ml</label>
		<input type="text" class="form-control" name="harga_ml" required placeholder="Masukkan Harga per ml" value="<?php echo $harga_ml; ?>">
	</div>
	
	<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	<a href="<?php echo site_url('Parfums') ?>" class="btn btn-primary">Cancel</a>

</form>

<?php $this->load->view('template/footer'); ?>