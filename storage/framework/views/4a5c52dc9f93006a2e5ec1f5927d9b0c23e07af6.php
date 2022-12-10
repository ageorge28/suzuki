<?php $__env->startSection('title'); ?>
    <?php if(session('language') == 'Malayalam'): ?>
        <?php echo e($site->name_ml); ?> | ഞങ്ങളേക്കുറിച്ച്
    <?php else: ?>
        <?php echo e($site->name_en); ?> | About Us
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!-- Google Map Section Start Here -->
    <div class="ic-gmaps-section">
        <div class="ic-map-area">
            <iframe src="<?php echo e($site->map); ?>" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
    <!-- Google Map Section Ending Here -->

    <!-- Contact section start here -->
    <section class="ic-contact-section ic-padding-100">

        <div class="container">

            <?php if(session('message')): ?>
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-success">
                        <?php echo e(session('message')); ?>                            
                    </div>        
                </div>
            </div>
            <?php endif; ?>

            <br />

            <div class="row">
                <div class="col-lg-6 col-md-12">

                    <!-- Contact information -->
                    <div class="ic-contact-information wow fadeInRight" data-wow-delay="0.2s">



                        <h3 class="ic-contact-info-title">
                            <?php if(session('language') == 'Malayalam'): ?>
                                ബന്ധപ്പെടാനുള്ള വിശദാംശങ്ങൾ
                            <?php else: ?>
                                Contact Details                                
                            <?php endif; ?>                            
                        </h3>

                        <!-- Contact item -->
                        <div class="ic-contact-item">
                            <h6 class="ic-contact-title">
                                <?php if(session('language') == 'Malayalam'): ?>
                                    വിലാസം:
                                <?php else: ?>
                                    Address:                                
                                <?php endif; ?>
                            </h6>
                            <p class="ic-contact-info"><?php echo e($site->address); ?></p>
                        </div>

                        <!-- Contact item -->
                        <div class="ic-contact-item">
                            <h6 class="ic-contact-title">
                                <?php if(session('language') == 'Malayalam'): ?>
                                    ഇമെയിൽ:
                                <?php else: ?>
                                    Email:                          
                                <?php endif; ?>                                
                            </h6>
                            <p class="ic-contact-info">
                                Main: <a href="mailto:<?php echo e($site->email); ?>"><?php echo e($site->email); ?></a>
                                <br />
                                Sales: <a href="mailto:<?php echo e($site->sales_email); ?>"><?php echo e($site->sales_email); ?></a> 
                                <br />
                                Service: <a href="mailto:<?php echo e($site->service_email); ?>"><?php echo e($site->service_email); ?></a> 
                            </p>
                        </div>

                        <!-- Contact item -->
                        <div class="ic-contact-item">
                            <h6 class="ic-contact-title">
                                <?php if(session('language') == 'Malayalam'): ?>
                                    ഫോൺ:
                                <?php else: ?>
                                    Phone:                        
                                <?php endif; ?>       
                            </h6>
                            <p class="ic-contact-info">
                                Sales: <a href="tel:<?php echo e($site->sales_phone); ?>"><?php echo e($site->sales_phone); ?></a>
                                <br />
                                Service: <a href="tel:<?php echo e($site->service_phone); ?>"><?php echo e($site->service_phone); ?></a>
                                <br />
                                Mobile: <a href="tel:<?php echo e($site->phone1); ?>"><?php echo e($site->phone1); ?></a>, <a href="tel:<?php echo e($site->phone2); ?>"><?php echo e($site->phone2); ?></a>
                            </p>
                        </div>

                        <!-- Contact item -->
                        <div class="ic-contact-item ic-emergency">
                            <h6 class="ic-contact-title">
                                <?php if(session('language') == 'Malayalam'): ?>
                                    ഏത് അന്വേഷണത്തിനും
                                <?php else: ?>
                                    For Any Enquiry                        
                                <?php endif; ?>                                       
                            </h6>
                            <p class="ic-contact-info"><a href="tel:+<?php echo e($site->phone); ?>">Call: <?php echo e($site->phone); ?></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">

                    <!-- Contact Form -->
                    <div class="ic-contact-form-main wow fadeInLeft" data-wow-delay="0.2s">
                        <h3 class="ic-contact-form-title">
                            <?php if(session('language') == 'Malayalam'): ?>
                                ഞങ്ങൾക്ക് സന്ദേശം അയയ്‌ക്കുക
                            <?php else: ?>
                                Message Us                    
                            <?php endif; ?>                              
                        </h3>
                        <form class="ic-contact-form" action="<?php echo e(route('contact.send')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="ic-form-row">
                                <div class="col-lg-6">
                                    <input type="text" name="name" id="name" placeholder="Name" class="ic-form-control" required>
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
                                <div class="col-lg-6">
                                    <input type="text" name="phone" id="phone" placeholder="Phone" class="ic-form-control" required>
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
                            <div class="ic-form-row">
                                <div class="col-lg-12">
                                    <input type="email" name="email" id="email" placeholder="Email Address" class="ic-form-control">
                                </div>
                            </div>
                            <textarea placeholder="Write Something Here" id="message" name="message" class="ic-form-control" required rows="3"></textarea>
                            <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger"><small><?php echo e($message); ?></small></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <button type="submit" class="ic-custom-btn-rvs">Send Now</button>
                        </form>
                        <br />
                    </div>
                </div>
            </div>

            <br />

            <div class="ic-contact-information">
                <h3 class="ic-contact-info-title">
                    <?php if(session('language') == 'Malayalam'): ?>
                        ശാഖകൾ
                    <?php else: ?>
                        Branches                               
                    <?php endif; ?>                            
                </h3>
                <div class="row">
                    <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="ic-contact-information">
                            <div class="ic-contact-item">
                                <p class="ic-contact-info">
                                    <strong><?php echo e($branch->town); ?></strong>
                                    <br />
                                    <?php echo e($branch->name); ?>

                                    <br />
                                    <?php echo e($branch->address); ?>

                                    <br />
                                    Pin: <?php echo e($branch->pincode); ?>

                                    <br />
                                    Phone: <a href="tel:+91<?php echo e($branch->phone); ?>"><?php echo e($branch->phone); ?></a>
                                </p>
                            </div>
                        </div>

                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

            </div>


        </div>
    </section>
    <!-- Contact section start here -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u147280632/domains/suzukipathanamthitta.com/public_html/resources/views/frontend/contact.blade.php ENDPATH**/ ?>