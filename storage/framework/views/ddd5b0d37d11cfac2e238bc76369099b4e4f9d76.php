<?php $__env->startSection("content"); ?>
	<h1>Daftar Mahasiswa</h1>
	<div class="col-6">
					<a href="<?php echo e(route('biodata.create')); ?>" class="btn btn-primary">Tambah Data
					</a>
					<a href="/biodata-mahasiswa/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>

				</div>
	<table class="table table-striped table-hover" id="datatable">
		<thead>
			<tr>
				<th>ID</th>
				<th>NAMA</th>
				<th>NIM</th>
				<th>FOTO</th>
				<th>ACTION</th>
			</tr>
		</thead>
		<tbody>
			<?php $__empty_1 = true; $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
				<tr>
					<td><?php echo e($data->id); ?></td>
					<td><?php echo e($data->name); ?></td>
					<td><?php echo e($data->nim); ?></td>
					<td><?php echo e($data->photo); ?></td>
					<td>
						<a href="<?php echo e(route('biodata.show', ['id' => $data->id])); ?>" class="btn btn-success">Detail</a>
						<a href="<?php echo e(route('biodata.edit', ['id' => $data->id])); ?>" class="btn btn-warning">Edit</a>
						<a onclick="return confirm('Apakah Anda Yakin?');" href="<?php echo e(route('biodata.destroy', ['id' => $data->id])); ?>" class="btn btn-danger">Delete</a>
						
					</td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
				<tr>
					<td colspan="4">Data Belum Tersedia!</td>
				</tr>
			<?php endif; ?>
		</tbody>
	</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\si-mahasiswa\resources\views/biodata/index.blade.php ENDPATH**/ ?>