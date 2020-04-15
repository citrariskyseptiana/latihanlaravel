<?php $__env->startSection("content"); ?>

	<?php if($errors->any()): ?>
        <div class="alert alert-danger alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

	<form action="<?php echo e(route('biodata.update', ['id' => $data->id])); ?>" method="POST" class="form-horizontal">

		<?php echo csrf_field(); ?>

		<div class="form-group">
			<label class="control-label">Nama</label>
			<input type="text" class="form-control" name="name" value="<?php echo e($data-> name); ?>">
		</div>

		<div class="form-group">
			<label class="control-label">NIM</label>
			<input type="text" class="form-control" name="nim" value="<?php echo e($data-> nim); ?>">
		</div>

		<div class="form-group">
			<label class="control-label">Alamat</label>
			<textarea name="address" rows="10" class="form-control"><?php echo e($data-> name); ?></textarea>
		</div>

		<div class="form-group">
			<button class="btn btn-primary" type="submit">Simpan</button>
			<a href="<?php echo e(route('biodata.index')); ?>" class="btn btn-danger">
				Batal
			</a>
		</div>
	</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\si-mahasiswa\resources\views/biodata/edit.blade.php ENDPATH**/ ?>