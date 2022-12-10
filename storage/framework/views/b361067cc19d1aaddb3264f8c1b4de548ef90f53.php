<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Motorcycle</h3>
                            </div>
                            <div class="card-body">

                                <form method="post" action="<?php echo e(route('admin.motorcycles.update', $motorcycle->id)); ?>" enctype="multipart/form-data">
                                    <?php echo method_field('PUT'); ?>
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group row">
                                      <div class="col-4">
                                          <label>Name (English)</label>
                                          <span class="text-danger">*</span>
                                      </div>
                                      <div class="col-8">
                                          <input type="text" class="form-control" name="name_en" id="name_en" value="<?php echo e($motorcycle->name_en); ?>" />
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
                                      <div class="col-4">
                                          <label>Name (Malayalam)</label>
                                          <span class="text-danger">*</span>
                                      </div>
                                      <div class="col-8">
                                          <input type="text" class="form-control" name="name_ml" id="name_ml" value="<?php echo e($motorcycle->name_ml); ?>" />
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
                                        <div class="col-4">
                                            <label for="image">Main Image</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" onchange="thumbnailChange(this)"
                                                                class="custom-file-input" id="thumbnail" name="thumbnail">
                                                            <label class="custom-file-label" for="thumbnail">Choose
                                                                file</label>
                                                        </div>
                                                    </div>
                                                    <?php $__errorArgs = ['thumbnail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="text-danger"><small><?php echo e($message); ?></small></div>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    <small class="text-danger">Upload images with width = 650px and height = 428px</small>
                                                </div>
                                                <div class="col-4">
                                                    <img id="new_thumbnail" src="<?php echo e('/uploads/motorcycles/thumbnails/' . $motorcycle->thumbnail); ?>" style="width:65px; height:42px" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mt-3">
                                        <div class="col-4">
                                            <label for="favicon">Category</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <select name="category_id" id="category_id" class="form-control">
                                                <option>-- Select Category -- </option>
                                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option <?php echo e($category->id == $motorcycle->category_id ? 'selected' : ''); ?> value="<?php echo e($category->id); ?>"><?php echo e($category->name_en); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php $__errorArgs = ['category_id'];
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
                                        <div class="col-4">
                                            <label for="subcategory_id">Subcategory</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <select name="subcategory_id" id="subcategory_id" class="form-control">
                                                <option value="" disabled>-- Select Subcategory --</option>
                                                <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option <?php echo e($subcategory->id == $motorcycle->subcategory_id ? 'selected' : ''); ?> value="<?php echo e($subcategory->id); ?>"><?php echo e($subcategory->name_en); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php $__errorArgs = ['subcategory_id'];
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
                                            <label>Model Number</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="code" id="code" value="<?php echo e($motorcycle->code); ?>" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Price</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="number" step=".01" class="form-control" name="price" id="price" value="<?php echo e($motorcycle->price); ?>" />
                                            <small class="text-danger">Price is not visible on the website</small>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Description (English)</label>
                                        </div>
                                        <div class="col-8">
                                            <textarea class="form-control" name="description_en" id="description_en"><?php echo e($motorcycle->details->description_en); ?></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Description (Malayalam)</label>
                                        </div>
                                        <div class="col-8">
                                            <textarea class="form-control" name="description_ml" id="description_ml"><?php echo e($motorcycle->details->description_ml); ?></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row mt-3">
                                        <div class="col-4">
                                            <label for="image">Overview Image</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" onchange="overviewChange(this)"
                                                                class="custom-file-input" id="overview_image" name="overview_image">
                                                            <label class="custom-file-label" for="overview_image">Choose
                                                                file</label>
                                                        </div>
                                                    </div>
                                                    <small class="text-danger">Upload images with width = 650px and height = 428px</small>
                                                </div>
                                                <div class="col-4">
                                                    <img id="new_overview_image" src="<?php echo e('/uploads/motorcycles/overviews/' . $motorcycle->details->overview_image); ?>" style="width:100px; height:75px"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Features (English)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" data-role="tagsinput" class="form-control" name="features_en" id="features_en" value="<?php echo e($motorcycle->details->features_en); ?>" />
                                            <small class="text-danger">Separate each value with a comma</small>
                                            <?php $__errorArgs = ['features_en'];
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
                                            <label>Features (Malayalam)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" data-role="tagsinput" class="form-control" name="features_ml" id="features_ml" value="<?php echo e($motorcycle->details->features_ml); ?>" />
                                            <small class="text-danger">Separate each value with a comma</small>
                                            <?php $__errorArgs = ['features_ml'];
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
                                            <label>Accessories (English)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" data-role="tagsinput" class="form-control" name="accessories_en" id="accessories_en" value="<?php echo e($motorcycle->details->accessories_en); ?>" />
                                            <small class="text-danger">Separate each value with a comma</small>
                                            <?php $__errorArgs = ['accessories_en'];
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
                                            <label>Accessories (Malayalam)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" data-role="tagsinput" class="form-control" name="accessories_ml" id="accessories_ml" value="<?php echo e($motorcycle->details->accessories_ml); ?>" />
                                            <small class="text-danger">Separate each value with a comma</small>
                                            <?php $__errorArgs = ['accessories_ml'];
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
                                            <label>Displacement (cm<sup>3</sup>)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="number" class="form-control" name="displacement" id="displacement" value="<?php echo e($motorcycle->details->displacement); ?>" />
                                            <?php $__errorArgs = ['displacement'];
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
                                            <label>Engine Type (English)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="engine_type_en" id="engine_type_en" value="<?php echo e($motorcycle->details->engine_type_en); ?>" />
                                            <?php $__errorArgs = ['engine_type_en'];
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
                                            <label>Engine Type (Malayalam)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="engine_type_ml" id="engine_type_ml" value="<?php echo e($motorcycle->details->engine_type_ml); ?>" />
                                            <?php $__errorArgs = ['engine_type_ml'];
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
                                            <label>Fuel System (English)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="fuel_system_en" id="fuel_system_en" value="<?php echo e($motorcycle->details->fuel_system_en); ?>" />
                                            <?php $__errorArgs = ['fuel_system_en'];
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
                                            <label>Fuel System (Malayalam)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="fuel_system_ml" id="fuel_system_ml" value="<?php echo e($motorcycle->details->fuel_system_ml); ?>" />
                                            <?php $__errorArgs = ['fuel_system_ml'];
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
                                            <label>Valve System (English)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="valve_system_en" id="valve_system_en" value="<?php echo e($motorcycle->details->valve_system_en); ?>" />
                                            <?php $__errorArgs = ['valve_system_en'];
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
                                            <label>Valve System (Malayalam)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="valve_system_ml" id="valve_system_ml" value="<?php echo e($motorcycle->details->valve_system_ml); ?>" />
                                            <?php $__errorArgs = ['valve_system_ml'];
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
                                            <label>Bore x Stroke</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="bore_stroke" id="bore_stroke" value="<?php echo e($motorcycle->details->bore_stroke); ?>" />
                                            <?php $__errorArgs = ['bore_stroke'];
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
                                            <label>Engine Output</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="engine_output" id="engine_output" value="<?php echo e($motorcycle->details->engine_output); ?>" />
                                            <?php $__errorArgs = ['engine_output'];
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
                                            <label>Torque</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="torque" id="torque" value="<?php echo e($motorcycle->details->torque); ?>" />
                                            <?php $__errorArgs = ['torque'];
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
                                            <label>Starter System (English)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="starter_system_en" id="starter_system_en" value="<?php echo e($motorcycle->details->starter_system_en); ?>" />
                                            <?php $__errorArgs = ['starter_system_en'];
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
                                            <label>Starter System (Malayalam)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="starter_system_ml" id="starter_system_ml" value="<?php echo e($motorcycle->details->starter_system_ml); ?>" />
                                            <?php $__errorArgs = ['starter_system_ml'];
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
                                            <label>Transmission Type (English)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="transmission_type_en" id="transmission_type_en" value="<?php echo e($motorcycle->details->transmission_type_en); ?>" />
                                            <?php $__errorArgs = ['transmission_type_en'];
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
                                            <label>Transmission Type (Malayalam)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="transmission_type_ml" id="transmission_type_ml" value="<?php echo e($motorcycle->details->transmission_type_ml); ?>" />
                                            <?php $__errorArgs = ['transmission_type_ml'];
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
                                            <label>Wheels (English)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="wheels_en" id="wheels_en" value="<?php echo e($motorcycle->details->wheels_en); ?>" />
                                            <?php $__errorArgs = ['wheels_en'];
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
                                            <label>Wheels (Malayalam)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="wheels_ml" id="wheels_ml" value="<?php echo e($motorcycle->details->wheels_ml); ?>" />
                                            <?php $__errorArgs = ['wheels_ml'];
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
                                            <label>Overall Length (mm)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="number" class="form-control" name="length" id="length" value="<?php echo e($motorcycle->details->length); ?>" />
                                            <?php $__errorArgs = ['length'];
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
                                            <label>Overall Width (mm)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="number" class="form-control" name="width" id="width" value="<?php echo e($motorcycle->details->width); ?>" />
                                            <?php $__errorArgs = ['width'];
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
                                            <label>Overall Height (mm)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="number" class="form-control" name="height" id="height" value="<?php echo e($motorcycle->details->height); ?>" />
                                            <?php $__errorArgs = ['height'];
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
                                            <label>Wheel Base (mm)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="number" class="form-control" name="wheel_base" id="wheel_base" value="<?php echo e($motorcycle->details->wheel_base); ?>" />
                                            <?php $__errorArgs = ['wheel_base'];
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
                                            <label>Ground Clearance (mm)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="number" class="form-control" name="ground_clearance" id="ground_clearance" value="<?php echo e($motorcycle->details->ground_clearance); ?>" />
                                            <?php $__errorArgs = ['ground_clearance'];
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
                                            <label>Seat Height (mm)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="number" class="form-control" name="seat_height" id="seat_height" value="<?php echo e($motorcycle->details->seat_height); ?>" />
                                            <?php $__errorArgs = ['seat_height'];
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
                                            <label>Kerb Mass (kg)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="number" class="form-control" name="kerb_mass" id="kerb_mass" value="<?php echo e($motorcycle->details->kerb_mass); ?>" />
                                            <?php $__errorArgs = ['kerb_mass'];
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
                                            <label>Fuel Tank Capacity (litres)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="number" class="form-control" name="fuel_tank_capacity" id="fuel_tank_capacity" value="<?php echo e($motorcycle->details->fuel_tank_capacity); ?>" />
                                            <?php $__errorArgs = ['fuel_tank_capacity'];
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
                                            <label>Front Brakes (English)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="front_brakes_en" id="front_brakes_en" value="<?php echo e($motorcycle->details->front_brakes_en); ?>" />
                                            <?php $__errorArgs = ['front_brakes_en'];
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
                                            <label>Front Brakes (Malayalam)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="front_brakes_ml" id="front_brakes_ml" value="<?php echo e($motorcycle->details->front_brakes_ml); ?>" />
                                            <?php $__errorArgs = ['front_brakes_ml'];
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
                                            <label>Rear Brakes (English)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="rear_brakes_en" id="rear_brakes_en" value="<?php echo e($motorcycle->details->rear_brakes_en); ?>" />
                                            <?php $__errorArgs = ['rear_brakes_en'];
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
                                            <label>Rear Brakes (Malayalam)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="rear_brakes_ml" id="rear_brakes_ml" value="<?php echo e($motorcycle->details->rear_brakes_ml); ?>" />
                                            <?php $__errorArgs = ['rear_brakes_ml'];
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
                                            <label>Front Tyre</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="front_tyre" id="front_tyre" value="<?php echo e($motorcycle->details->front_tyre); ?>" />
                                            <?php $__errorArgs = ['front_tyre'];
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
                                            <label>Rear Tyre</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="rear_tyre" id="rear_tyre" value="<?php echo e($motorcycle->details->rear_tyre); ?>" />
                                            <?php $__errorArgs = ['rear_tyre'];
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
                                            <label>Front Suspension (English)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="front_suspension_en" id="front_suspension_en" value="<?php echo e($motorcycle->details->front_suspension_en); ?>" />
                                            <?php $__errorArgs = ['front_suspension_en'];
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
                                            <label>Front Suspension (Malayalam)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="front_suspension_ml" id="front_suspension_ml" value="<?php echo e($motorcycle->details->front_suspension_ml); ?>"/>
                                            <?php $__errorArgs = ['front_suspension_ml'];
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
                                            <label>Rear Suspension (English)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="rear_suspension_en" id="rear_suspension_en" value="<?php echo e($motorcycle->details->rear_suspension_en); ?>"/>
                                            <?php $__errorArgs = ['rear_suspension_en'];
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
                                            <label>Rear Suspension (Malayalam)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="rear_suspension_ml" id="rear_suspension_ml" value="<?php echo e($motorcycle->details->rear_suspension_ml); ?>"/>
                                            <?php $__errorArgs = ['rear_suspension_ml'];
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
                                            <label>Battery (English)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="battery_en" id="battery_en" value="<?php echo e($motorcycle->details->battery_en); ?>" />
                                            <?php $__errorArgs = ['battery_en'];
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
                                            <label>Battery (Malayalam)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="battery_ml" id="battery_ml" value="<?php echo e($motorcycle->details->battery_ml); ?>" />
                                            <?php $__errorArgs = ['battery_ml'];
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
                                            <label>Headlight</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="headlight" id="headlight" value="<?php echo e($motorcycle->details->headlight); ?>" />
                                            <?php $__errorArgs = ['headlight'];
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
                                            <label>Taillight</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="taillight" id="taillight" value="<?php echo e($motorcycle->details->taillight); ?>" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Brochure</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="brochure" name="brochure">
                                                    <label class="custom-file-label" for="brochure">Choose file</label>
                                                </div>
                                            </div>
                                            <?php if($motorcycle->details->brochure): ?>
                                                <a class="badge badge-pill badge-primary" target="_blank" href="<?php echo e(asset('uploads/motorcycles/brochures/' . $motorcycle->details->brochure)); ?>">Click to view Uploaded Brochure</a>
                                            <?php endif; ?>
                                            <br />
                                            <small class="text-danger">Upload only PDF files</small>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>YouTube Video Link</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="url" class="form-control" name="video" id="video" value="<?php echo e($motorcycle->details->video); ?>" />
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success">Save</button>

                                </form>

                                <hr />

                            </div>

                            <!-- /.card-body -->
                        </div>

                        <?php if(!is_null($motorcycle->photos)): ?>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Other Images</h3>
                            </div>
                            <div class="card-body">

                                <form method="post" enctype="multipart/form-data" action="<?php echo e(route('admin.motorcycles.update.images', $motorcycle->id)); ?>">
                                    <?php echo csrf_field(); ?>

                                    <div class="row row-sm">
                                        <?php $__currentLoopData = $motorcycle->photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-md-3">
                                                <div class="card" style="width: 18rem;">
                                                    <img class="card-img-top" src="<?php echo e('/uploads/motorcycles/photos/' . $image->file); ?>" style="height:130px;width:280px">
                                                    <div class="card-body">
                                                    <h5 class="card-title">
                                                        <a href="<?php echo e(route('admin.motorcycles.delete.image', $image->id)); ?>" class="btn btn-sm btn-danger" id="delete" title="Delete Data">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </h5>
                                                    <p class="card-text">
                                                        <div class="form-group">
                                                            <label class="form-control-label">Change Image<span class="text-danger"></span></label>
                                                            <input class="form-control" type="file" name="photos[<?php echo e($image->id); ?>]" />
                                                        </div>
                                                    </p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <div class="form-layout-footer">
                                        <div class="controls">
                                            <input class="btn btn-round btn-success" type="submit" value="Update Image" />
                                        </div>
                                    </div>   

                                </form>

                            </div>

                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        function thumbnailChange(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#new_thumbnail').attr('src', e.target.result).width(100).height(100);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <script type="text/javascript">
        function overviewChange(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#new_overview_image').attr('src', e.target.result).width(100).height(100);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="category_id"]').on('change', function() {
                var category_id = $(this).val();
                if (category_id) {
                    $.ajax({
                        url: "<?php echo e(url('/admin/subcategories/ajax')); ?>/" + category_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="subcategory_id"]').empty();
                            $('select[name="subsubcategory_id"]').html('');
                            $.each(data, function(key, value) {
                                $('select[name="subcategory_id"]').append(
                                    '<option value="' + value.id + '">' + value.name_en + '</option>')
                            });
                        }
                    });
                }
            });
        });
    </script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#photos').on('change', function() { //on file input change
            if (window.File && window.FileReader && window.FileList && window
                .Blob) //check File API supported browser
            {
                var data = $(this)[0].files; //this file data

                $.each(data, function(index, file) { //loop though each file
                    if (/(\.|\/)(gif|jpe?g|png)$/i.test(file
                        .type)) { //check supported file type
                        var fRead = new FileReader(); //new filereader
                        fRead.onload = (function(file) { //trigger function on successful read
                            return function(e) {
                                var img = $('<img/>').addClass('thumb').attr('src',
                                    e.target.result).width(80).height(
                                80); //create image element 
                                $('#preview_photo').append(
                                img); //append image to output element
                            };
                        })(file);
                        fRead.readAsDataURL(file); //URL representing the file's data.
                    }
                });
            } else {
                alert("Your browser doesn't support File API!"); //if File API is absent
            }
        });
    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u147280632/domains/suzukipathanamthitta.com/public_html/resources/views/backend/motorcycles/edit.blade.php ENDPATH**/ ?>