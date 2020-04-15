<?php $__env->startSection("content"); ?>

	<ul>
		<li>ID Mahasiswa : <?php echo e($data->id); ?></li>
		<li>Nama : <?php echo e($data->name); ?></li>
		<li>NIM : <?php echo e($data->nim); ?></li>
		<li>Alamat : <?php echo e($data->address); ?></li>
		<li>File Path : <?php echo e($data->photo); ?></li>
		<li>Gambar : </li>

		<li><img src="<?php echo e(Storage::url($data->foto)); ?>" height="150px"></li>
	</ul>

	<a href="<?php echo e(route('biodata.index')); ?>">Kembali</a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\si-mahasiswa\resources\views/biodata/show.blade.php ENDPATH**/ ?>