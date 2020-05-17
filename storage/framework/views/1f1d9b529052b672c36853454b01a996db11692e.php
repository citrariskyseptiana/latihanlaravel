<?php $__env->startSection('content'); ?>
 
<form action="<?php echo e(url('sumber-pemasukan/'.$data->id)); ?>" method="POST">
	<?php echo csrf_field(); ?>
	<?php echo e(method_field('put')); ?>

    <div class="row">
    	<div class="col-md-6">
    		<div class="form-group">
		        <input class="form-control" type="text" id="exampleFormCon trolInput" placeholder="Nama Sumber" value="<?php echo e($data->nama); ?>" name="nama">
	        </div>
	        <div class="form-group">
	        	<button type="submit" class="btn btn-success">Edit Sumber</button>
	        </div>
        </div>
    </div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\si-keuangan\resources\views/sumber/sumber_edit.blade.php ENDPATH**/ ?>