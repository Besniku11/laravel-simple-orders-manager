<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Create New Order</div>
                <div class="card-body">
                <form method="POST" action="<?php echo e(route('orders.store')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea type="text" class="form-control" id="description" name="description" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
  </div>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Besi\Desktop\apps\lrv-apps\laravel-orders-manager\resources\views/orders/create.blade.php ENDPATH**/ ?>