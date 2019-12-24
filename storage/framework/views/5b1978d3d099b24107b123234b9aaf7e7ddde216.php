<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Edit Order</div>
                <div class="card-body">
                <form method="POST" action="<?php echo e(route('orders.update', $order -> id)); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="form-group">
                      <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?php echo e($order -> title); ?>">
                    </div>
                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea type="text" class="form-control" id="description" name="description" rows="4"><?php echo e($order -> description); ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
  </div>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Besi\Desktop\apps\lrv-apps\laravel-orders-manager\resources\views/orders/edit.blade.php ENDPATH**/ ?>