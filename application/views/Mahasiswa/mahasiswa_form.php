<?php $this->load->view('templates/header'); ?>
<form action="<?php echo $action; ?>" method="post">
	<div class="form-group">
		<label>NIM</label>
		<input type="text" class="form-control" name="nim" required placeholder="Masukkan NIM" value="<?php echo $nim; ?>">
	</div>
	<div class="form-group">
		<label>NAMA</label>
		<input type="text" class="form-control" name="nama" required placeholder="Masukkan Nama" value="<?php echo $nama; ?>">
	</div>
	<div class="form-group">
		<label>Jurusan</label>
		<input type="text" class="form-control" name="jurusan" required placeholder="Masukkan Jurusan" value="<?php echo $jurusan; ?>">
	</div>
	<input type="hidden" name="id" value="<?php echo $id; ?>" />
	<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	<a href="<?php echo site_url('mahasiswa') ?>" class="btn btn-primary">Cancel</a>

</form>

<?php $this->load->view('templates/footer'); ?>