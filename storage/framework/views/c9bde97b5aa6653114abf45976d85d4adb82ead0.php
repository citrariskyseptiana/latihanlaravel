<?php $__env->startSection("content"); ?>

	<form action="<?php echo e(route('biodata.store')); ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">

		<?php echo csrf_field(); ?>

		<div class="form-group">
			<label class="control-label">Nama</label>
			<input type="text" class="form-control" name="name">
		</div>

		<div class="form-group">
			<label class="control-label">NIM</label>
			<input type="text" class="form-control" name="nim">
		</div>

		<div class="form-group">
			<label class="control-label">Alamat</label>
			<textarea name="address" rows="10" class="form-control"></textarea>
		</div>

		<div class="form-group">
			<label class="control-label">Foto</label>
			<input type="file" name="foto" required>
		</div>

		<div class="form-group">
			<button class="btn btn-primary" type="submit">Simpan</button>
			<a href="<?php echo e(route('biodata.index')); ?>" class="btn btn-danger">
				Batal
			</a>
		</div>
	</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\si-mahasiswa\resources\views/biodata/create.blade.php ENDPATH**/ ?>