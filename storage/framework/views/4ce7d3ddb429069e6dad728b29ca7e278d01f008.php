<?php $__env->startSection('content'); ?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">SEO Settings</h3>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-2">
                                        <label>Meta Title</label>
                                    </div>
                                    <div class="col-10">
                                        <span><?php echo e($seo->meta_title); ?></span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <label>Meta Description</label>
                                    </div>
                                    <div class="col-10">
                                        <p><?php echo e($seo->meta_description); ?></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <label>Meta Keywords</label>
                                    </div>
                                    <div class="col-10">
                                        <p>
                                            <?php $__currentLoopData = \Str::of($seo->meta_keywords)->explode(','); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyword): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <span class="badge badge-pill badge-success"><?php echo e($keyword); ?></span>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <label>Alt Attribute For Images</label>
                                    </div>
                                    <div class="col-10">
                                        <span><?php echo e($seo->alt); ?></span>
                                    </div>
                                </div>

                                <div class="text-right">
                                    <a class="btn btn-primary" href="<?php echo e(route('admin.seo.edit')); ?>" />Edit</a>
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

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u147280632/domains/suzukipathanamthitta.com/public_html/resources/views/backend/seo/show.blade.php ENDPATH**/ ?>