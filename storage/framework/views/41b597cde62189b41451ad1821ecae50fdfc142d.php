

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-md-7">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Slider &nbsp;
                                    <small class="font-italic">(The moving slider at the bottom of every page)</small>                                    
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Slide</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($loop->index + 1); ?></td>
                                                <td>
                                                    <img src="<?php echo e(asset('frontend/assets/images/sliders/' . $slider->image)); ?>"
                                                        style="width:190px; height:75px" />
                                                </td>
                                                <td>
                                                    <a class="btn btn-warning btn-xs"
                                                        href="<?php echo e(route('admin.sliders.edit', $slider->id)); ?>"><i class="fas fa-edit"></i> Edit</a>
                                                    <a id="delete" class="btn btn-danger btn-xs"
                                                        href="<?php echo e(route('admin.sliders.delete', $slider->id)); ?>"><i class="fas fa-trash"></i> Delete</a>
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


                    <div class="col-md-5">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Add Slide</h3>
                            </div>
                            <div class="card-body">

                                <form method="post" action="<?php echo e(route('admin.sliders.store')); ?>"
                                    enctype="multipart/form-data">

                                    <?php echo csrf_field(); ?>

                                    <div class="form-group row mt-3">
                                        <div class="col-2">
                                            <label for="favicon">Slide</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" onchange="imageChange(this)"
                                                                class="custom-file-input" id="image" name="image">
                                                            <label class="custom-file-label" for="image">Choose file</label>
                                                        </div>
                                                    </div>
                                                    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="text-danger"><small><?php echo e($message); ?></small></div>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>          
                                                </div>
                                                <div class="col-6">
                                                    <img id="new_image" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success">Save</button>

                                </form>

                            </div>

                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>


                </div>
            </div>
        </div>

    </div>

    <script type="text/javascript">
        function imageChange(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#new_image').attr('src', e.target.result).width(190).height(75);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u147280632/domains/suzukipathanamthitta.com/public_html/resources/views/backend/sliders/index.blade.php ENDPATH**/ ?>