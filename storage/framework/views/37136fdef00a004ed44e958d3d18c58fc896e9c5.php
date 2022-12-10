

<?php $__env->startSection('content'); ?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Website Settings</h3>
                            </div>
                            <div class="card-body">
                                
                                <form action="<?php echo e(route('admin.site.update')); ?>" method="post" enctype="multipart/form-data">

                                    <?php echo csrf_field(); ?>

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Company Name (English)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="name_en" id="name_en" value="<?php echo e($site->name_en); ?>" />
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
                                            <label>Company Name (Malayalam)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="name_ml" id="name_ml" value="<?php echo e($site->name_ml); ?>" />
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
                                            <label for="logo">Company Logo</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <div class="row">
                                                <div class="col-5">
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" onchange="logoChange(this)" class="custom-file-input" id="logo" name="logo">
                                                            <label class="custom-file-label" for="logo">Choose file</label>
                                                        </div>  
                                                    </div>
                                                    <small class="text-danger">Upload image with width = 170px and height = 50px</small>
                                                    <?php $__errorArgs = ['logo'];
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
                                                    <img id="new_logo" src="<?php echo e(asset('frontend/assets/images/' . $site->logo)); ?>" />
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
                                            <textarea class="form-control" name="description_en" id="description_en" ><?php echo e($site->description_en); ?></textarea>
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
                                            <textarea class="form-control" name="description_ml" id="description_ml" ><?php echo e($site->description_ml); ?></textarea>
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

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Main Phone Number</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="phone" id="phone" value="<?php echo e($site->phone); ?>" />
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

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Address</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="address" id="address" value="<?php echo e($site->address); ?>" />
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
                                        <div class="col-2">
                                            <label>Sales Phone Number</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="sales_phone" id="sales_phone" value="<?php echo e($site->sales_phone); ?>" />
                                            <?php $__errorArgs = ['sales_phone'];
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
                                            <label>Service Phone Number</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="service_phone" id="service_phone" value="<?php echo e($site->service_phone); ?>" />
                                            <?php $__errorArgs = ['service_phone'];
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
                                            <label>Mobile Number 1</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="phone1" id="phone1" value="<?php echo e($site->phone1); ?>" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Mobile Number 2</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="phone2" id="phone2" value="<?php echo e($site->phone2); ?>" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Main Email Address</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="email" class="form-control" name="email" id="email" value="<?php echo e($site->email); ?>" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Sales Email Address</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <input type="email" class="form-control" name="sales_email" id="sales_email" value="<?php echo e($site->sales_email); ?>" />
                                            <?php $__errorArgs = ['sales_email'];
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
                                            <label>Service Email Address</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <input type="email" class="form-control" name="service_email" id="service_email" value="<?php echo e($site->service_email); ?>" />
                                            <?php $__errorArgs = ['service_email'];
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
                                            <label>Facebook Link</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="url" class="form-control" name="facebook" id="facebook" value="<?php echo e($site->facebook); ?>" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Instagram Link</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="url" class="form-control" name="instagram" id="instagram" value="<?php echo e($site->instagram); ?>" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>YouTube Link</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="url" class="form-control" name="youtube" id="youtube" value="<?php echo e($site->youtube); ?>" />
                                        </div>
                                    </div>

                                    <div class="form-group row mt-3">
                                        <div class="col-2">
                                            <label for="favicon">Website Favicon</label>
                                        </div>
                                        <div class="col-10">
                                            <div class="row">
                                                <div class="col-5">
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" onchange="faviconChange(this)" class="custom-file-input" id="favicon" name="favicon">
                                                            <label class="custom-file-label" for="logo">Choose file</label>
                                                        </div>  
                                                    </div>
                                                    <small class="text-danger">Upload image with width = 32px and height = 32px</small>
                                                </div>
                                                <div class="col-5">
                                                    <img id="new_favicon" src="<?php echo e(asset('frontend/assets/images/' . $site->favicon)); ?>" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Website URL Address</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="url" class="form-control" name="url" id="url" value="<?php echo e($site->url); ?>" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Google Map Address</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="url" class="form-control" name="map" id="map" value="<?php echo e($site->map); ?>" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Doorstep Test Ride ?</label>
                                        </div>
                                        <div class="col-10">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch1" name="doorstep" <?php echo e($site->doorstep ? 'checked' : ''); ?> />
                                                <label class="custom-control-label" for="customSwitch1"></label>
                                              </div>
                                            </div>
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
        function logoChange(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#new_logo').attr('src', e.target.result).width(170).height(50);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <script type="text/javascript">
        function faviconChange(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#new_favicon').attr('src', e.target.result).width(32).height(32);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u147280632/domains/suzukipathanamthitta.com/public_html/resources/views/backend/site/edit.blade.php ENDPATH**/ ?>