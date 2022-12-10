<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-md-7">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Branches</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Name</th>
                                            <th>Town</th>
                                            <th>Phone</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($loop->index + 1); ?></td>
                                                <td><?php echo e($branch->name); ?></td>
                                                <td><?php echo e($branch->town); ?></td>
                                                <td><?php echo e($branch->phone); ?></td>
                                                <td>
                                                    <a class="btn btn-warning btn-xs"
                                                        href="<?php echo e(route('admin.branches.edit', $branch->id)); ?>"><i class="fas fa-edit"></i> Edit</a>
                                                    <a id="delete" class="btn btn-danger btn-xs"
                                                        href="<?php echo e(route('admin.branches.delete', $branch->id)); ?>"><i class="fas fa-trash"></i> Delete</a>                                                    
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
                                <h3 class="card-title">Add Branch</h3>
                            </div>
                            <div class="card-body">

                                <form method="post" action="<?php echo e(route('admin.branches.store')); ?>">

                                    <?php echo csrf_field(); ?>

                                    <div class="form-group row">
                                      <div class="col-4">
                                          <label>Name</label>
                                          <span class="text-danger">*</span>
                                      </div>
                                      <div class="col-8">
                                          <input type="text" class="form-control" name="name" id="name" />
                                          <?php $__errorArgs = ['name'];
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
                                    </div>

                                    <div class="form-group row">
                                      <div class="col-4">
                                          <label>Address</label>
                                          <span class="text-danger">*</span>
                                      </div>
                                      <div class="col-8">
                                          <input type="text" class="form-control" name="address" id="address" />
                                          <?php $__errorArgs = ['address'];
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
                                    </div>
                                    
                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Town</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="town" id="town" />
                                            <?php $__errorArgs = ['town'];
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
                                    </div>

                                      
                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Pin Code</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="number" class="form-control" name="pincode" id="pincode" />
                                            <?php $__errorArgs = ['pincode'];
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
                                    </div>

                                    
                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Mobile</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="phone" id="mobile" />
                                            <?php $__errorArgs = ['phone'];
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
                                      </div>

                                    <button type="submit" class="btn btn-success">Add</button>

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
                    $('#new_image').attr('src', e.target.result).width(100).height(100);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u147280632/domains/suzukipathanamthitta.com/public_html/resources/views/backend/branches/index.blade.php ENDPATH**/ ?>