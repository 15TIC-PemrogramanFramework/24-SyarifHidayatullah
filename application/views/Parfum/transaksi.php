<?php $this->load->view('template/header') ?>
<?php $status = $this->session->userdata('status'); ?>
<div class="row">
	<div class="col-md-12 text-right">
		<div style="margin-top:20px;margin-bottom: 10px;">
			<?php if($status == 'admin'){ echo anchor(site_url('Transaksi/tambah'),
				'<i class="fa fa-plus" aria-hidden="true">
				</i> Tambah Data', 'class="btn btn-primary"'); }?>
		</div>
	</div>
</div>
<div class="row">
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>

		<th>Kode Transaksi</th>
		<th>Tanggal</th>
		<th>Kode Parfum</th>
		<th>Kode Botol</th>
		<th>Bibit</th>
		<th>Campuran</th>
		<th>Jumlah</th>
		<th>Total</th>
		<?php if($status == 'admin') { ?>
		<th>Action</th>
		<?php } ?>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data_transaksi as $key => $row) {?>
		<tr>
		<td><?php echo $row->kode_transaksi; ?></td>
		<td><?php echo $row->tanggal; ?></td>
		<td><?php echo $row->kode_parfum; ?></td>
		<td><?php echo $row->kode_botol; ?></td>
		<td><?php echo $row->bibit; ?></td>
		<td><?php echo $row->campuran; ?></td>
		<td><?php echo $row->jumlah; ?></td>
		<td><?php echo $row->total; ?></td>
		<?php if($status == 'admin') { ?>
		<td>
		<?php echo anchor(site_url('Transaksi/edit/'.$row->kode_transaksi),
			'<i class="fa fa-pencil"></i>',
			'class="btn btn-warning"'); ?>
		<?php echo anchor(site_url('Transaksi/delete/'.$row->kode_transaksi),
			'<i class="fa fa-trash"></i>',
			'class="btn btn-danger"'); ?></td>
			<?php } ?>
		</tr>
		<?php } ?>
	</tbody>
</table>

<?php $this->load->view('template/footer') ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#example').DataTable();
	} );
</script>