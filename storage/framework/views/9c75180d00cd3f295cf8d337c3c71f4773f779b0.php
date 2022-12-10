<?php $__env->startSection('content'); ?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Workshop Page</h3>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-2">
                                        <label>Title (English)</label>
                                    </div>
                                    <div class="col-10">
                                        <span><?php echo e($workshop->title_en); ?></span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <label>Title (Malayalam)</label>
                                    </div>
                                    <div class="col-10">
                                        <span><?php echo e($workshop->title_ml); ?></span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <label>Main Image</label>
                                    </div>
                                    <div class="col-10">
                                        <img src="<?php echo e(asset('frontend/assets/images/workshop/' . $workshop->main_image)); ?>" style="width:230px;height:172px" />
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-2">
                                        <label>Description (English)</label>
                                    </div>
                                    <div class="col-10">
                                        <p><?php echo $workshop->description_en; ?></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <label>Description (Malayalam)</label>
                                    </div>
                                    <div class="col-10">
                                        <p><?php echo $workshop->description_ml; ?></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <label>Image 1</label>
                                    </div>
                                    <div class="col-10">
                                        <img src="<?php echo e(asset('frontend/assets/images/workshop/' . $workshop->image1)); ?>" style="width:400px;height:180px" />
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-2">
                                        <label>Image 2</label>
                                    </div>
                                    <div class="col-10">
                                        <img src="<?php echo e(asset('frontend/assets/images/workshop/' . $workshop->image2)); ?>" style="width:400px;height:180px" />
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-2">
                                        <label>Image 3</label>
                                    </div>
                                    <div class="col-10">
                                        <img src="<?php echo e(asset('frontend/assets/images/workshop/' . $workshop->image3)); ?>" style="width:400px;height:180px" />
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-2">
                                        <label>Image 4</label>
                                    </div>
                                    <div class="col-10">
                                        <img src="<?php echo e(asset('frontend/assets/images/workshop/' . $workshop->image4)); ?>" style="width:400px;height:180px" />
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-2">
                                        <label>Contacts</label>
                                    </div>
                                    <div class="col-10">
                                        <p><?php echo $workshop->contacts; ?></p>
                                    </div>
                                </div>

                                <div class="text-right">
                                    <a class="btn btn-primary" href="<?php echo e(route('admin.workshop.edit')); ?>" />Edit</a>
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

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u147280632/domains/suzukipathanamthitta.com/public_html/resources/views/backend/workshop/show.blade.php ENDPATH**/ ?>