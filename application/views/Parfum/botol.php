<?php $this->load->view('template/header') ?>
<?php $status = $this->session->userdata('status'); ?>
<div class="row">
	<div class="col-md-12 text-right">
		<div style="margin-top:20px;margin-bottom: 10px;">
			<?php if($status == 'admin'){  echo anchor(site_url('Botol/tambah'),
				'<i class="fa fa-plus" aria-hidden="true">
				</i> Tambah Data', 'class="btn btn-primary"'); }?>
		</div>
	</div>
</div>
<div class="row">
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>

		<th>Kode Botol</th>
		<th>Nama Botol</th>
		<th>Harga Botol</th>
		<?php if($status == 'admin') { ?>
		<th>Action</th>
		<?php } ?>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data_botol as $key => $row) {?>
		<tr>
		<td><?php echo $row->kode_botol; ?></td>
		<td><?php echo $row->nama_botol; ?></td>
		<td><?php echo $row->harga_botol; ?></td>
		<?php if($status == 'admin') { ?>
		<td>
		<?php echo anchor(site_url('Botol/edit/'.$row->kode_botol),
			'<i class="fa fa-pencil"></i>',
			'class="btn btn-warning"'); ?>
		<?php echo anchor(site_url('Botol/delete/'.$row->kode_botol),
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