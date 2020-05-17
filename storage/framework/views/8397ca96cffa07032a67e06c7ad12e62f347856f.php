<?php $__env->startSection('content'); ?>
 
<form action="<?php echo e(url('sumber-pemasukan/add')); ?>" method="POST">
	<?php echo csrf_field(); ?>
    <div class="row">
    	<div class="col-md-6">
    		<div class="form-group">
		        <input class="form-control" type="text" id="exampleFormCon trolInput" placeholder="Nama Sumber" name="nama">
	        </div>
	        <div class="form-group">
	        	<button type="submit" class="btn btn-success">Tambah</button>
	        </div>
        </div>
    </div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\si-keuangan\resources\views/sumber/sumber_add.blade.php ENDPATH**/ ?>