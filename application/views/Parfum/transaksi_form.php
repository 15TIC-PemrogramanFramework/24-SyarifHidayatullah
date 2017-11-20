<?php $this->load->view('template/header'); ?>
<form action="<?php echo $action; ?>" method="post">
	<div class="form-group">
		<label>Tanggal</label>
		<input type="date" class="form-control" name="tanggal" required placeholder="Masukkan Tanggal" value="<?php echo $tanggal; ?>" />

	</div>

	<div class="form-group">
		<label>Kode Parfum</label>
		<select class="form-control" name="kode_parfum">
<?php
$this->db->select('kode_parfum');
$id_mkn = $this->db->get('tb_parfum');

foreach($id_mkn->result() as $row){
echo "<option value='".$row->kode_parfum."'>".$row->kode_parfum."</option>";
}
?></select>
	</div>

	<div class="form-group">
		<label>Kode Botol</label>
		<select class="form-control" name="kode_botol">
<?php
$this->db->select('kode_botol');
$id_mkn = $this->db->get('tb_botol');

foreach($id_mkn->result() as $row){
echo "<option value='".$row->kode_botol."'>".$row->kode_botol."</option>";
}
?></select>

	</div>

	<div class="form-group">
		<label>Jumlah Bibit</label>
		<input type="text" class="form-control" name="bibit" required placeholder="Masukkan Jumlah Bibit" value="<?php echo $bibit; ?>">
	</div>

	

	<div class="form-group">
		<label>Jumlah Campuran</label>
		<input type="text" class="form-control" name="campuran" required placeholder="Masukkan Jumlah Campuran" value="<?php echo $campuran; ?>">
	</div>

	

	<div class="form-group">
		<label>Jumlah Biaya</label>
		<input type="text" class="form-control" name="jumlah" required placeholder="Masukkan Jumlah Bibit" value="<?php echo $jumlah; ?>">
	</div>

	

	<div class="form-group">
		<label>Jumlah Total</label>
		<input type="text" class="form-control" name="total" required placeholder="Masukkan Jumlah Bibit" value="<?php echo $total; ?>">
	</div>
	
	<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	<a href="<?php echo site_url('Botol') ?>" class="btn btn-primary">Cancel</a>

</form>

<?php $this->load->view('template/footer'); ?>