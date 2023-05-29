<div class="container">
		<div class="card">
			<div class="card-header">Edit Data</div>
			<div class="card-body">
			<?php 
			if(validation_errors() != false)
			{
				?>
				<div class="alert alert-danger" role="alert">
					<?php echo validation_errors(); ?>
				</div>
				<?php
			}
			?>
			<form method="post" action="<?php echo base_url(); ?>post/update">
			<input type="hidden" name="id_nama" value="<?php echo $data->id_nama; ?>"/>
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" value="<?php echo $data->nama; ?>" class="form-control" id="nama" name="nama">
				</div>

                <div class="form-group">
					<label for="nip">NIP</label>
					<input type="text" value="<?php echo $data->nip; ?>" class="form-control" id="nip" name="nip">
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" value="<?php echo $data->email; ?>" class="form-control" id="email" name="email">
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<input type="text" value="<?php echo  $data->password; ?>" class="form-control" id="password" name="password">
				</div>

				<button type="submit" class="btn btn-primary">Update</button>
			</form>
			</div>
		</div>
	</div>