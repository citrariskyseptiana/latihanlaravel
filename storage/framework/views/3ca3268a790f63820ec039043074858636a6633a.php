<?php $__env->startSection('content'); ?>
		<?php if(session('sukses')): ?>
		<div class="alert alert-success" role="alert">
			<?php echo e(session('sukses')); ?>

		</div>
		
		<?php endif; ?>
		<br>
		<br>
		<div class="row">
			<div class="col-6">
				<h1>Data Siswa</h1>
			</div>

				<div class="col-6">
					<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">Tambah Data
					</button>
				</div>
		
		<table class="table table-hover table-striped">
	<tr style="text-align: center;">
		<th>NAMA LENGKAP</th>
		<th>NOMOR INDUK</th>
		<th>JENIS KELAMIN</th>
		<th>AGAMA</th>
		<th>ALAMAT</th>
		<th>AKSI</th>
	</tr>
	<?php $__currentLoopData = $data_siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr style="text-align: center;">
		<td><?php echo e($siswa->nama_lengkap); ?></td>
		<td><?php echo e($siswa->nomor_induk); ?></td>
		<td><?php echo e($siswa->jenis_kelamin); ?></td>
		<td><?php echo e($siswa->agama); ?></td>
		<td><?php echo e($siswa->alamat); ?></td>
		<td>
			<a href="/siswa/<?php echo e($siswa->id); ?>/detail" class="btn btn-info btn-sm">Detail</a>
			<a href="/siswa/<?php echo e($siswa->id); ?>/edit" class="btn btn-warning btn-sm">Edit</a>
			<a href="/siswa/<?php echo e($siswa->id); ?>/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data ini ingin dihapus ?')">Hapus</a>
			
		</td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>
			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>

			      <div class="modal-body">
			        <form action="/siswa/create" method="POST">
		        		<?php echo e(csrf_field()); ?>

					  <div class="form-group">
					    <label for="exampleInputEmail1">Nama Lengkap</label>
					    <input name="nama_lengkap" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama lengkap">
					  </div>

					  <div class="form-group">
					    <label for="exampleInputEmail1">Nomor Induk</label>
					    <input name="nomor_induk" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nomor_induk">
					  </div>

					  <div class="form-group">
					    <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
					    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
					      <option value="L">Laki-laki</option>
					      <option value="P">Perempuan</option>
					    </select>
					  </div>

					  <div class="form-group">
					    <label for="exampleInputEmail1">Agama</label>
					    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan agama">
					  </div>

					  <div class="form-group">
					    <label for="exampleFormControlTextarea1">Alamat</label>
					    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
					  </div>
					

					</div>
			      	<div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-info">Submit</button>
			        </form>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\latihan2\resources\views/siswa/index.blade.php ENDPATH**/ ?>