

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Motorcycles</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive">

                                <a href="<?php echo e(route('admin.motorcycles.create')); ?>" class="btn btn-success">Add Motorcycle</a>
                                <br />                               
                                <br />

                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Image</th>
                                            <th>Name (English)</th>
                                            <th>Name (Malayalam)</th>
                                            <th>Category</th>
                                            <th>Subcategory</th>
                                            <th>Model Number</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $motorcycles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $motorcycle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($loop->index + 1); ?></td>
                                                <td>
                                                    <img src="<?php echo e(asset('uploads/motorcycles/thumbnails/' . $motorcycle->thumbnail)); ?>"
                                                        style="width:50px; height:50px" />
                                                </td>
                                                <td><?php echo e($motorcycle->name_en); ?></td>
                                                <td><?php echo e($motorcycle->name_ml); ?></td>
                                                <td><?php echo e($motorcycle->category->name_en); ?></td>
                                                <td><?php echo e($motorcycle->subcategory->name_en); ?></td>
                                                <td><?php echo e($motorcycle->code); ?></td>
                                                <td>
                                                    <?php if($motorcycle->status == 1): ?>
                                                        <span class="badge badge-pill badge-success">Visible</span>
                                                    <?php else: ?>
                                                        <span class="badge badge-pill badge-danger">Invisible</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <a class="btn btn-warning btn-xs"
                                                        href="<?php echo e(route('admin.motorcycles.edit', $motorcycle->id)); ?>"><i class="fas fa-edit"></i> Edit</a>
                                                    <a id="delete" class="btn btn-danger btn-xs"
                                                        href="<?php echo e(route('admin.motorcycles.delete', $motorcycle->id)); ?>"><i class="fas fa-trash"></i> Delete</a>
                                                        <?php if($motorcycle->status == 1): ?>
                                                            <a class="btn btn-info btn-xs" href="<?php echo e(route('admin.motorcycles.deactivate', $motorcycle->id)); ?>"><i class="fas fa-eye-slash"></i> Hide</a>
                                                        <?php else: ?>
                                                            <a class="btn btn-info btn-xs" href="<?php echo e(route('admin.motorcycles.activate', $motorcycle->id)); ?>"><i class="fas fa-eye"></i> Show</a>
                                                        <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>





                </div>
            </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u147280632/domains/suzukipathanamthitta.com/public_html/resources/views/backend/motorcycles/index.blade.php ENDPATH**/ ?>