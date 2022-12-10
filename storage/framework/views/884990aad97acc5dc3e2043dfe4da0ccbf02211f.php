<section class="ic-footer style-two">

    <!-- Footer top -->
    <div class="ic-footer-top ic-padding-120">
        <div class="container">
            <div class="row">

                <!-- Footer widget -->
                <div class="col-lg-5 col-md-12">
                    <div class="ic-footer-item">
                        <h3 class="ic-footer-widget-title">
                            <?php if(session('language') == 'Malayalam'): ?>
                                <?php echo e($site->name_ml); ?>

                            <?php else: ?>
                                <?php echo e($site->name_en); ?>

                            <?php endif; ?>
                        </h3>
                        <div class="ic-footer-widget-content">
                            <div class="ic-footer-widget-about">
                                <p>
                                    <?php if(session('language') == 'Malayalam'): ?>
                                        <?php echo e($site->description_ml); ?>

                                    <?php else: ?>
                                        <?php echo e($site->description_en); ?>

                                    <?php endif; ?>
                                </p>
                                <ul class="ic-social-profile">
                                    <li>
                                        <?php if($site->facebook): ?>
                                            <a target="_blank" href="<?php echo e($site->facebook); ?>"><i class="fab fa-facebook-f"></i></a>
                                        <?php endif; ?>
                                    </li>
                                    <li>
                                        <?php if($site->instagram): ?>
                                            <a target="_blank" href="<?php echo e($site->instagram); ?>"><i class="fab fa-instagram"></i></a>
                                        <?php endif; ?>
                                    </li>
                                    <li>
                                        <?php if($site->youtube): ?>
                                            <a target="_blank" href="<?php echo e($site->youtube); ?>"><i class="fab fa-youtube"></i></a>
                                        <?php endif; ?>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer widget -->
                <div class="col-lg-3 col-md-6">
                    <div class="ic-footer-item">
                        <h3 class="ic-footer-widget-title">
                            <?php if(session('language') == 'Malayalam'): ?>
                                ലിങ്കുകൾ
                            <?php else: ?>
                                Links
                            <?php endif; ?>
                        </h3>
                        <div class="ic-footer-widget-content">
                            <ul class="ic-footer-menu">
                                <li><a href="<?php echo e(route('home')); ?>">
                                    <?php if(session()->get('language') == 'Malayalam'): ?>
                                        ഹോം
                                    <?php else: ?>
                                        Home
                                    <?php endif; ?>
                                </a></li>
                                <li><a href="<?php echo e(route('about')); ?>">
                                    <?php if(session()->get('language') == 'Malayalam'): ?>
                                        ഞങ്ങളേക്കുറിച്ച്
                                    <?php else: ?>
                                        About Us
                                    <?php endif; ?>    
                                </a></li>
                                <li><a href="<?php echo e(route('motorcycles')); ?>">
                                    <?php if(session()->get('language') == 'Malayalam'): ?>
                                        മോട്ടോർസൈക്കിളുകളും ബൈക്കുകളും
                                    <?php else: ?>
                                        Motorcycles and Bikes
                                    <?php endif; ?>                                    
                                </a></li>
                                <li><a href="<?php echo e(route('accessories')); ?>">
                                    <?php if(session()->get('language') == 'Malayalam'): ?>
                                        ആക്സസറികൾ
                                    <?php else: ?>
                                        Accessories
                                    <?php endif; ?>   
                                </a></li>
                                <li><a href="<?php echo e(route('workshop')); ?>">
                                    <?php if(session()->get('language') == 'Malayalam'): ?>
                                        വർക്ക്ഷോപ്പ്
                                    <?php else: ?>
                                        Workshop
                                    <?php endif; ?>    
                                </a></li>
                                <li><a href="<?php echo e(route('contact')); ?>">
                                    <?php if(session()->get('language') == 'Malayalam'): ?>
                                        ബന്ധപ്പെടുക
                                    <?php else: ?>
                                        Contact
                                    <?php endif; ?>    
                                </a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Footer widget -->
                <div class="col-lg-4 col-md-6">
                    <div class="ic-footer-item">
                        <h3 class="ic-footer-widget-title">
                            <?php if(session()->get('language') == 'Malayalam'): ?>
                                ബന്ധപ്പെടുക
                            <?php else: ?>
                                Contact
                            <?php endif; ?>    
                        </h3>
                        <div class="ic-footer-widget-content">
                            <div class="ic-contact-item">
                                <h6 class="ic-contact-title">                                    
                                    <?php if(session()->get('language') == 'Malayalam'): ?>
                                        വിലാസം
                                    <?php else: ?>
                                        Address
                                    <?php endif; ?>    
                                </h6>
                                <p class="ic-contact-info">
                                    <?php echo e($site->address); ?>

                                </p>
                            </div>
                            <div class="ic-contact-item">
                                <h6 class="ic-contact-title">
                                    <?php if(session()->get('language') == 'Malayalam'): ?>
                                        ഫോൺ
                                    <?php else: ?>
                                        Phone
                                    <?php endif; ?>    
                                </h6>
                                <p class="ic-contact-info">
                                    <a href="tel:<?php echo e($site->phone); ?>">
                                        <?php echo e($site->phone); ?>

                                    </a>
                                </p>
                            </div>
                            <div class="ic-contact-item">
                                <h6 class="ic-contact-title">
                                    <?php if(session()->get('language') == 'Malayalam'): ?>
                                        ഇമെയിൽ
                                    <?php else: ?>
                                        Email
                                    <?php endif; ?>  
                                </h6>
                                <p class="ic-contact-info">
                                    <a href="mailto:<?php echo e($site->email); ?>">
                                        <?php echo e($site->email); ?>

                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer bottom -->
    <div class="ic-footer-bottom ic-padding-40">
        <div class="container">
            <div class="ic-copyright-text text-center">
                <p>
                    © 
                    
                    <?php if(session('language') == 'Malayalam'): ?>
                        പകർപ്പവകാശം 
                    <?php else: ?>
                        Copyright
                    <?php endif; ?>
                    
                    <?php echo e(date('Y')); ?> <a href="<?php echo e(route('home')); ?>">

                    <?php if(session('language') == 'Malayalam'): ?>
                        <?php echo e($site->name_ml); ?>

                    <?php else: ?>
                        <?php echo e($site->name_en); ?>

                    <?php endif; ?>

                </a></p>
            </div>
        </div>
    </div>
</section><?php /**PATH /home/u147280632/domains/suzukipathanamthitta.com/public_html/resources/views/frontend/layouts/footer.blade.php ENDPATH**/ ?>