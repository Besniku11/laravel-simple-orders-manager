<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Orders List</div>
                <div class="card-body">
                    <?php if(count($orders) > 0): ?>
                      <a href="<?php echo e(route('orders.create')); ?>" class="btn btn-primary mb-3">Add New Order</a>
                      <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success">
                            <p><?php echo e($message); ?></p>
                        </div>
                      <?php endif; ?>
                      
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <td>Title</td>
                            <td>Descripton</td>
                            <td>Created Date</td>
                            <td>Actions</td>
                          </tr>
                        </thead>                      
                        <tbody>
                        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                              <td><?php echo e($order -> title); ?></td>
                              <td><?php echo e($order -> description); ?></td>
                              <td><?php echo e($order -> created_at ->format('d-m-Y')); ?></td>
                              <td>

                               <form action="<?php echo e(route('orders.destroy',$order->id)); ?>" method="POST">
                                <a href="<?php echo e(route('orders.edit', $order -> id)); ?>" class="btn btn-primary">Edit</a>               
                                <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#modalDelete">Delete</button>               
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete Order</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        Are you sure you want to delele order?
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </form>
                              </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <?php else: ?>
                      <p>No Orders Found</p>
                      <a href="<?php echo e(route('orders.create')); ?>" class="btn btn-primary">Add First One</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
  </div>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Besi\Desktop\apps\lrv-apps\laravel-orders-manager\resources\views/orders/index.blade.php ENDPATH**/ ?>