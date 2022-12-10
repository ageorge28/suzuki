<?php $__env->startSection('content'); ?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Workshop Page</h3>
                            </div>
                            <div class="card-body">
                                
                                <form action="<?php echo e(route('admin.workshop.update')); ?>" method="post" enctype="multipart/form-data">

                                    <?php echo csrf_field(); ?>

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Title (English)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="title_en" id="title_ml" value="<?php echo e($workshop->title_en); ?>" />
                                            <?php $__errorArgs = ['title_en'];
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
                                            <label>Title (Malayalam)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="title_ml" id="title_ml" value="<?php echo e($workshop->title_ml); ?>" />
                                            <?php $__errorArgs = ['title_ml'];
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
                                            <label for="logo">Main Image</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <div class="row">
                                                <div class="col-5">
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" onchange="mainimageChange(this)" class="custom-file-input" id="main_image" name="main_image">
                                                            <label class="custom-file-label" for="logo">Choose file</label>
                                                        </div>  
                                                    </div>
                                                    <small class="text-danger">Upload image with width = 1150px and height = 850px</small>
                                                    <?php $__errorArgs = ['main_image'];
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
                                                <div class="col-5">
                                                    <img id="new_main_image" src="<?php echo e(asset('frontend/assets/images/workshop/' . $workshop->main_image)); ?>" style="width:230px;height:172px" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Description (English)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <textarea id="summernote1" name="description_en"><?php echo e($workshop->description_en); ?></textarea>
                                            <?php $__errorArgs = ['description_en'];
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
                                            <label>Description (Malayalam)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <textarea name="description_ml" id="summernote2" ><?php echo e($workshop->description_ml); ?></textarea>
                                            <?php $__errorArgs = ['description_ml'];
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
                                            <label for="image1">Image 1</label>
                                        </div>
                                        <div class="col-10">
                                            <div class="row">
                                                <div class="col-5">
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" onchange="image1Change(this)" class="custom-file-input" id="image1" name="image1">
                                                            <label class="custom-file-label" for="image1">Choose file</label>
                                                        </div>  
                                                    </div>
                                                    <small class="text-danger">Upload image with width = 4000px and height = 1800px</small>
                                                    <?php $__errorArgs = ['image1'];
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
                                                <div class="col-5">
                                                    <img id="new_image1" src="<?php echo e(asset('frontend/assets/images/workshop/' . $workshop->image1)); ?>" style="width:400px;height:180px" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mt-3">
                                        <div class="col-2">
                                            <label for="logo">Image 2</label>
                                        </div>
                                        <div class="col-10">
                                            <div class="row">
                                                <div class="col-5">
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" onchange="image2Change(this)" class="custom-file-input" id="image2" name="image2">
                                                            <label class="custom-file-label" for="image2">Choose file</label>
                                                        </div>  
                                                    </div>
                                                    <small class="text-danger">Upload image with width = 4000px and height = 1800px</small>
                                                    <?php $__errorArgs = ['image2'];
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
                                                <div class="col-5">
                                                    <img id="new_image2" src="<?php echo e(asset('frontend/assets/images/workshop/' . $workshop->image2)); ?>" style="width:400px;height:180px" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mt-3">
                                        <div class="col-2">
                                            <label for="logo">Image 3</label>
                                        </div>
                                        <div class="col-10">
                                            <div class="row">
                                                <div class="col-5">
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" onchange="image3Change(this)" class="custom-file-input" id="image3" name="image3">
                                                            <label class="custom-file-label" for="image3">Choose file</label>
                                                        </div>  
                                                    </div>
                                                    <small class="text-danger">Upload image with width = 4000px and height = 1800px</small>
                                                    <?php $__errorArgs = ['image3'];
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
                                                <div class="col-5">
                                                    <img id="new_image3" src="<?php echo e(asset('frontend/assets/images/workshop/' . $workshop->image3)); ?>" style="width:400px;height:180px" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mt-3">
                                        <div class="col-2">
                                            <label for="logo">Image 4</label>
                                        </div>
                                        <div class="col-10">
                                            <div class="row">
                                                <div class="col-5">
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" onchange="image4Change(this)" class="custom-file-input" id="image4" name="image4">
                                                            <label class="custom-file-label" for="image4">Choose file</label>
                                                        </div>  
                                                    </div>
                                                    <small class="text-danger">Upload image with width = 4000px and height = 1800px</small>
                                                    <?php $__errorArgs = ['image4'];
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
                                                <div class="col-5">
                                                    <img id="new_image4" src="<?php echo e(asset('frontend/assets/images/workshop/' . $workshop->image4)); ?>" style="width:400px;height:180px" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Contacts</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <textarea id="summernote3" name="contacts"><?php echo e($workshop->contacts); ?></textarea>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-12 pr-3 text-right">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                        </div>
                                    </div>

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
        $(document).ready(function() {
            $('#summernote1').summernote();
            $('#summernote2').summernote();
            $('#summernote3').summernote();
        });
    </script>

    <script type="text/javascript">
        function mainimageChange(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#new_main_image').attr('src', e.target.result).width(170).height(50);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <script type="text/javascript">
        function image1Change(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#new_image1').attr('src', e.target.result).width(32).height(32);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

<script type="text/javascript">
    function image2Change(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#new_image2').attr('src', e.target.result).width(32).height(32);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<script type="text/javascript">
    function image3Change(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#new_image3').attr('src', e.target.result).width(32).height(32);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<script type="text/javascript">
    function image4Change(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#new_image4').attr('src', e.target.result).width(32).height(32);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u147280632/domains/suzukipathanamthitta.com/public_html/resources/views/backend/workshop/edit.blade.php ENDPATH**/ ?>