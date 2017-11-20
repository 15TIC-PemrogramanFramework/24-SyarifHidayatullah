<?php $this->load->view('template/header'); ?>
<form action="<?php echo $action; ?>" method="post">
	<div class="form-group">
		<label>Kode Botol</label>
		<input type="text" class="form-control" name="kode_botol" required placeholder="Masukkan Kode Botol" value="<?php echo $kode_botol; ?>">
	</div>
	<div class="form-group">
		<label>Nama Botol</label>
		<input type="text" class="form-control" name="nama_botol" required placeholder="Masukkan Nama" value="<?php echo $nama_botol; ?>">
	</div>
	<div class="form-group">
		<label>Harga Botol</label>
		<input type="text" class="form-control" name="harga_botol" required placeholder="Masukkan Harga Botol" value="<?php echo $harga_botol; ?>">
	</div>
	
	<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	<a href="<?php echo site_url('Botol') ?>" class="btn btn-primary">Cancel</a>

</form>

<?php $this->load->view('template/footer'); ?>