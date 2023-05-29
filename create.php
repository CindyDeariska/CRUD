<div class="container">
	<div class="card">
		<div class="card-header">Create Data</div>
		<div class="card-body">
			<?php
			if (validation_errors() != false) {
			?>
				<div class="alert alert-danger" role="alert">
					<?php echo validation_errors(); ?>
				</div>
			<?php
			}
			?>
			<form method="post" action="<?php echo base_url(); ?>post/save">
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" id="nama" name="nama">
				</div>

				<div class="form-group">
					<label for="nip">NIP</label>
					<input type="text" class="form-control" id="nip" name="nip">
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email">
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<input type="text" class="form-control" id="password" name="password">
				</div>

				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>