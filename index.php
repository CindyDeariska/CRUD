<main role="main" class="container">
		<div class="card">
			<div class="card-header">Data Nama</div>
			<div class="card-body">
				<a href="<?php echo base_url(); ?>post/create" class="btn btn-success">Create</a>
				<br/>
				<br/>
				<table class="table table-bordered">
					<tr>
						<th width="5%">No</th>
						<th>Nama</th>
						<th>NIP</th>
						<th>Email</th>
						<th>Password</th>
					</tr>
					<?php 
					$no = 1;
					foreach($data as $row)
					{
						?>
						<tr>
							<td widtd="5%"><?php echo $no++; ?></td>
							<td><?php echo $row->nama; ?></td>
							<td><?php echo $row->nip; ?></td>
							<td><?php echo $row->email; ?></td>
							<td><?php echo $row->password; ?></td>
							
							<td>
                            <a href="<?php echo base_url(); ?>post/detail/<?php echo $row->id_nama; ?>" class="btn btn-danger">Detail</a>
							<a href="<?php echo base_url(); ?>post/edit/<?php echo $row->id_nama; ?>" class="btn btn-warning">Edit</a>
							<a href="<?php echo base_url(); ?>post/delete/<?php echo $row->id_nama; ?>" class="btn btn-danger">Hapus</a>
							</td>
						</tr>
						<?php
					}
					?>
				</table>
			</div>
		</div>
</main>