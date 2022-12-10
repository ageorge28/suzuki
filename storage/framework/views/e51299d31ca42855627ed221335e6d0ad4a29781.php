

<?php $__env->startSection('content'); ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

                
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Category</h3>
                        </div>
                        <div class="card-body">

                            <form method="post" action="<?php echo e(route('admin.categories.update', $category->id)); ?>"
                                enctype="multipart/form-data">

                                <?php echo method_field('PUT'); ?>
                                <?php echo csrf_field(); ?>

                                <div class="form-group row">
                                  <div class="col-2">
                                      <label>Name (English)</label>
                                      <span class="text-danger">*</span>
                                  </div>
                                  <div class="col-10">
                                      <input type="text" class="form-control" name="name_en" id="name_en" value="<?php echo e($category->name_en); ?>" />
                                      <?php $__errorArgs = ['name_en'];
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
                                  <div class="col-2">
                                      <label>Name (Malayalam)</label>
                                      <span class="text-danger">*</span>
                                  </div>
                                  <div class="col-10">
                                      <input type="text" class="form-control" name="name_ml" id="name_ml" value="<?php echo e($category->name_ml); ?>" />
                                      <?php $__errorArgs = ['name_ml'];
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

                                <div class="form-group row mt-3">
                                    <div class="col-2">
                                        <label for="favicon">Image</label>
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
                                            </div>
                                            <div class="col-6">
                                                <img id="new_image" src="<?php echo e(asset('frontend/assets/images/categories/' . $category->image)); ?>" style="width:100px;height:100px" />
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
                $('#new_image').attr('src', e.target.result).width(100).height(100);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
  </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u147280632/domains/suzukipathanamthitta.com/public_html/resources/views/backend/categories/edit.blade.php ENDPATH**/ ?>