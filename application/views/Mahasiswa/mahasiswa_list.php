<?php $this->load->view('templates/header') ?>
<div class="row">
	<div class="col-md-12 text-right">
		<div style="margin-top:20px;margin-bottom: 10px;">
			<?php echo anchor(site_url('mahasiswa/tambah'),
				'<i class="fa-plus-circle" aria-hidden="true">
				</i> Tambah Data', 'class="btn btn-primary"');?>
		</div>
	</div>
</div>
<div class="row">
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>

		<th>Id</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>Jurusan</th>
		<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($data_mahasiswa as $key => $row) {?>
		<tr>
		<td><?php echo $row->id; ?></td>
		<td><?php echo $row->nim; ?></td>
		<td><?php echo $row->nama; ?></td>
		<td><?php echo $row->jurusan; ?></td>
		<td>
		<?php echo anchor(site_url('mahasiswa/edit/'.$row->id),
			'<i class="fa fa-pencil"></i>',
			'class="btn btn-warning"'); ?>
		<?php echo anchor(site_url('mahasiswa/delete/'.$row->id),
			'<i class="fa fa-trash"></i>',
			'class="btn btn-danger"'); ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>
</div>
<?php $this->load->view('templates/footer') ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#example').DataTable();
	} );
</script>