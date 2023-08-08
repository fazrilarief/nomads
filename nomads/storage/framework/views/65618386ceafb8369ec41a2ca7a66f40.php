

<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Gallery</h1>
            <a href="<?php echo e(route('gallery.create')); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Gallery
            </a>
        </div>

        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" width="100%" cellspasing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Travel</th>
                                <th>Gambar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <th><?php echo e($loop->iteration); ?></th>
                                    <th><?php echo e($item->travel_package->title); ?></th>
                                    <th>
                                        <img src="<?php echo e(storage::ur($item->image)); ?>" alt="#" width="150px"
                                            class="img-thumbnail">
                                    </th>
                                    <th>
                                        <a href="<?php echo e(route('gallery.edit', $item->id)); ?>" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <form action="<?php echo e(route('gallery.destroy', $item->id)); ?>" method="POST"
                                            class="d-inline">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                            <button class="btn btn-danger">
                                                <i class="fa fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </th>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="7" class="text-center">Data Kosong</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ThinkPad T480s\OneDrive - Microsoft 365\Learning\BWA\nomads-template\nomads\resources\views/pages/admin/gallery/index.blade.php ENDPATH**/ ?>