 

<?php $__env->startSection('content'); ?>

<div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Data Pemasukan</h3>
              <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Sumber Pemasukan</h3>
              <a href="<?php echo e(url('pemasukan/add')); ?>" class="btn btn-outline-primary">+ Tambah Data</a>
            </div>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">#</th>
                    <th scope="col" class="sort" data-sort="budget">Sumber</th>
                    <th scope="col" class="sort" data-sort="status">Nominal</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($index+1); ?></td>
                        <td><?php echo e($dt->nama); ?></td>
                        <td><?php echo e($dt->nominal); ?></td>
                        <td><?php echo e(date('d M Y',strtotime($dt->tanggal))); ?></td>
                        <td>
                          <div>
                          <a href="<?php echo e(url('pemasukan/'.$dt->pemasukan_id)); ?>"><i class="ni ni-ruler-pencil"></i>
                          <span>Edit</span></a>
                          <a class="btn-hapus" href="<?php echo e(url('pemasukan/'.$dt->pemasukan_id)); ?>"><i class="ni ni-fat-remove"></i>
                          <span>Hapus</span></a>
                      </div>
                  </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">
          
            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            
            <div class="modal-body">
              
                <div class="py-3 text-center">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <h4 class="heading mt-4">You should read this!</h4>
                    <p>Apakah anda yakin ingin menghapus data ini?</p>
                </div>
                
            </div>
            
            <div class="modal-footer">
                <form action="" method="POST">
                  <?php echo csrf_field(); ?>
                  <?php echo e(method_field('delete')); ?>

                  <button type="submit" class="btn btn-white">Ok, Got it</button>
                </form>
                <button type="submit" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
            </div>
            
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<script type="text/javascript">
  $(document).ready(function(){
    $('body').on('click','btn-hapus',function(e){
      e.preventDefault();
      $('modal-notification').modal();
    });
  });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\si-keuangan\resources\views/pemasukan/pemasukan_index.blade.php ENDPATH**/ ?>