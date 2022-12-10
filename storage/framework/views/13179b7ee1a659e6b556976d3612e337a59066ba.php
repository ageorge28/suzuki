

<?php $__env->startSection('content'); ?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Profile</h3>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-2">
                                        <label>Name</label>
                                    </div>
                                    <div class="col-10">
                                        <span><?php echo e($admin->name); ?></span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-10">
                                        <span><?php echo e($admin->email); ?></p>
                                    </div>
                                </div>

                                <div class="text-right">
                                    <a class="btn btn-primary" href="<?php echo e(route('admin.profile.edit')); ?>" />Edit</a>
                                </div>

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

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u147280632/domains/suzukipathanamthitta.com/public_html/resources/views/backend/profile/show.blade.php ENDPATH**/ ?>