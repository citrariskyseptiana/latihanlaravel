<?php $__env->startSection('content'); ?>
		<h1>Edit Data Siswa</h1>
		<?php if(session('sukses')): ?>
		<div class="alert alert-success" role="alert">
			<?php echo e(session('sukses')); ?>

		</div>
		<?php endif; ?>
		<div class="row">
			<div class="col-lg-12">

			        <form action="/siswa/<?php echo e($siswa->id); ?>/update" method="POST">
		        		<?php echo e(csrf_field()); ?>

					  <div class="form-group">
					    <label for="exampleInputEmail1">Nama Lengkap</label>
					    <input name="nama_lengkap" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama lengkap" value="<?php echo e($siswa->nama_lengkap); ?>">
					  </div>

					  <div class="form-group">
					    <label for="exampleInputEmail1">Nomor Induk</label>
					    <input name="nomor_induk" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nomor induk" value="<?php echo e($siswa->nomor_induk); ?>">
					  </div>

					  <div class="form-group">
					    <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
					    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
					      <option value="L" <?php if($siswa->jenis_kelamin == 'L'): ?> selected <?php endif; ?>>Laki-laki</option>
					      <option value="P" <?php if($siswa->jenis_kelamin == 'P'): ?> selected <?php endif; ?>>Perempuan</option>
					    </select>
					  </div>

					  <div class="form-group">
					    <label for="exampleInputEmail1">Agama</label>
					    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan agama" value="<?php echo e($siswa->agama); ?>">
					  </div>

					  <div class="form-group">
					    <label for="exampleFormControlTextarea1">Alamat</label>
					    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo e($siswa->alamat); ?></textarea>
					</div>
			        <button type="submit" class="btn btn-warning">Update</button>
			        </form>
			    	</div>
			      </div>
			  	</div>
				</div>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\latihan2\resources\views/siswa/edit.blade.php ENDPATH**/ ?>