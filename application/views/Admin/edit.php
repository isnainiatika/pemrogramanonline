<div class="container">
	<div class="card">
		<div class="card-header">Edit User</div>
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
			<form method="post" action="<?php echo base_url(); ?>admin/update">
				<input type="hidden" name="id" id="id" value="<?php echo $orang->id; ?>" />
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" value="<?php echo $orang->name; ?>" class="form-control" id="name" name="name">
				</div>

				<div class="form-group">
					<label for="nim">NIM</label>
					<input type="text" class="form-control" id="nim" name="nim" value="<?php echo $orang->nim; ?>">
				</div>

				<div class="form-group">
					<label for="class">Kelas</label>
					<input type="text" class="form-control datepicker" id="class" name="class" value="<?php echo $orang->class; ?>">
				</div>

				<div class="form-group">
					<label for="nama_repl">Nama Repl</label>
					<input type="text" class="form-control datepicker" id="nama_repl" name="nama_repl" value="<?php echo $orang->nama_repl; ?>">
				</div>

				<div class="form-group">
					<label for="role_id">role id</label>
					<input type="text" class="form-control datepicker" id="role_id" name="role_id" value="<?php echo $orang->role_id; ?>">
				</div>

				<button type="submit" class="btn btn-primary">Update</button>
			</form>
		</div>
	</div>
</div>