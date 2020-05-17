<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
<form action="<?php echo e(url('pemasukan/add')); ?>" method="POST">
	<?php echo csrf_field(); ?>
	<div class="form-group">
		<label for="exampleInputEmail" style="color: white;">
			Sumber Pemasukan
		</label>
		<select class="form-control" name="sumber_pemasukan">
			<option selected="" disabled="">Pilih Sumber Pemasukan</option>
			<?php $__currentLoopData = $sumber; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<option value="<?php echo e($sb->id); ?>"><?php echo e($sb->nama); ?></option>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</select>
	</div>

	<div class="form-group">
		<label for="exampleInputPassword1" style="color: white;">
			Nominal
		</label>
		<input type="number" class="form-control" placeholder="Nominal" name="nominal" id="exampleInputPassword1">
	</div>

	<div class="form-group">
		<label for="exampleInputPassword1" style="color: white;">
			Tanggal
		</label>
		<input type="text" class="form-control datepicker" placeholder="Tanggal" name="tanggal" autocomplete="off">
	</div>

	<div class="form-group">
		<label style="color: white;">
			Keterangan
		</label>
		<textarea class="form-control" rows="10" name="keterangan"></textarea>
	</div>

	<button type="submit" class="btn btn-default">Submit</button>
</form>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<script type="text/javascript">
	$(document).ready(function(){
		$( ".datepicker" ).datepicker();
	})
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\si-keuangan\resources\views/pemasukan/pemasukan_add.blade.php ENDPATH**/ ?>