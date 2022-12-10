<header class="ic-header">

    <!-- Header Top -->
    <div class="ic-header-top">
        <div class="container">
            <div class="row">
                <div class="col-12 ic-header-top-inner">
                    <div class="ic-header-top-left">
                        <!-- Logo -->
                        <a href="<?php echo e(route('home')); ?>" class="ic-logo">
                            <img src="<?php echo e(asset('frontend/assets/images/' . $site->logo)); ?>" alt="<?php echo e($seo->alt); ?>">
                        </a>
                    </div>
                    <div class="ic-header-top-right">
                        <ul class="ic-header-top-links">

                            <li>
                                <div class="ic-multi-curency">
                                    <div class="ic-select-dropdown">
                                                <?php if(session()->get('language') == 'Malayalam'): ?>
                                                    <a style="color:black" href="<?php echo e(route('language.english')); ?>">English</a>
                                                <?php else: ?>
                                                    <a style="color:black" href="<?php echo e(route('language.malayalam')); ?>">മലയാളം</a>                
                                                <?php endif; ?>
                                    </div>
                                </div>
                            </li>
                            <!-- Header Account -->
                            <li>
                                <div class="ic-header-account">
                                    <div class="ic-header-account-inner">
                                        <i class=""></i>
                                        <span>
                                            <?php if(session()->get('language') == 'Malayalam'): ?>
                                                ഞങ്ങളെ വിളിക്കൂ
                                            <?php else: ?>
                                                Call us 
                                            <?php endif; ?>    
                                            &nbsp;&nbsp;
                                            <a style="color:#D23B3B" href="tel:<?php echo e($site->phone); ?>"><b><?php echo e($site->phone); ?></b></a>
                                        </span>
                                    </div>

                                </div>
                            </li>

                            <li>
                                <ul class="ic-social-profile">
                                    <?php if($site->facebook): ?>
                                        <li><a target="_blank" href="<?php echo e($site->facebook); ?>"><i class="fab fa-facebook-f"></i></a></li>
                                    <?php endif; ?>
                                    <?php if($site->instagram): ?>
                                        <li><a target="_blank" href="<?php echo e($site->instagram); ?>"><i class="fab fa-instagram"></i></a></li>
                                    <?php endif; ?>
                                    <?php if($site->youtube): ?>
                                        <li><a target="_blank" href="<?php echo e($site->youtube); ?>"><i class="fab fa-youtube"></i></a></li>
                                    <?php endif; ?>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Bottom -->
    <div class="ic-header-bottom">
        <div class="ic-menu-wrapper">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="ic-header-bottom-left">
                        <div class="ic-nav-icon">
                            <div class="ic-menu-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <!-- Logo -->
                        <div class="ic-header-logo ic-header-sticky-logo">
                            <a href="<?php echo e(route('home')); ?>" class="ic-logo">
                                <img src="<?php echo e(asset('frontend/assets/images/' . $site->logo)); ?>" alt="<?php echo e($seo->alt); ?>">
                            </a>
                        </div>
                    </div>
                    <!-- Menu -->
                    <nav class="ic-primary-menu">
                        <div class="ic-menu-area">
                            <div class="ic-main-menu-area">
                                <ul class="ic-main-menu d-flex">
                                    <li class="ic-menu-item active">
                                        <a href="<?php echo e(route('home')); ?>">
                                            <?php if(session()->get('language') == 'Malayalam'): ?>
                                                ഹോം
                                            <?php else: ?>
                                                Home
                                            <?php endif; ?>
                                        </a>
                                    </li>

                                    
                                    <li class="ic-menu-item ic-has-dropdown"">
                                        <a href="<?php echo e(route('motorcycles')); ?>">
                                            <?php if(session()->get('language') == 'Malayalam'): ?>
                                                മോട്ടോർസൈക്കിളുകളും ബൈക്കുകളും
                                            <?php else: ?>
                                                Motorcycles and Bikes
                                            <?php endif; ?>    
                                        </a>
                                        <ul class="ic-dropdown">
                                            <li>
                                                <a href="<?php echo e(route('motorcycles.category', $bikes->slug)); ?>">
                                                    <?php if(session('language') == 'Malayalam'): ?>
                                                        <?php echo e($bikes->name_ml); ?>

                                                    <?php else: ?>
                                                        <?php echo e($bikes->name_en); ?>

                                                    <?php endif; ?>
                                                </a>
                                                <ul class="list-unstyled">
                                                    <?php $__currentLoopData = $bikes_subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li> <a href="<?php echo e(route('motorcycles.category', $subcategory->slug)); ?>">
                                                            <?php if(session('language') == 'Malayalam'): ?>
                                                                <?php echo e($subcategory->name_ml); ?>

                                                            <?php else: ?>
                                                                <?php echo e($subcategory->name_en); ?>

                                                            <?php endif; ?>                                                
                                                        </a></li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="<?php echo e(route('motorcycles.category', $scooters->slug)); ?>">
                                                    <?php if(session('language') == 'Malayalam'): ?>
                                                        <?php echo e($scooters->name_ml); ?>

                                                    <?php else: ?>
                                                        <?php echo e($scooters->name_en); ?>

                                                    <?php endif; ?>
                                                </a>
                                                <ul class="list-unstyled">
                                                    <?php $__currentLoopData = $scooters_subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li> <a href="<?php echo e(route('motorcycles.category', $subcategory->slug)); ?>">
                                                            <?php if(session('language') == 'Malayalam'): ?>
                                                                <?php echo e($subcategory->name_ml); ?>

                                                            <?php else: ?>
                                                                <?php echo e($subcategory->name_en); ?>

                                                            <?php endif; ?>                                                
                                                        </a></li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="ic-menu-item"><a href="<?php echo e(route('accessories')); ?>">
                                        <?php if(session()->get('language') == 'Malayalam'): ?>
                                            ആക്സസറികൾ
                                        <?php else: ?>
                                            Accessories
                                        <?php endif; ?>    
                                    </a></li>
                                    <li class="ic-menu-item"><a href="<?php echo e(route('workshop')); ?>">
                                        <?php if(session()->get('language') == 'Malayalam'): ?>
                                            വർക്ക്ഷോപ്പ്
                                        <?php else: ?>
                                            Workshop
                                        <?php endif; ?>    
                                    </a></li>
                                    <li class="ic-menu-item"><a href="<?php echo e(route('about')); ?>">
                                        <?php if(session()->get('language') == 'Malayalam'): ?>
                                            ഞങ്ങളേക്കുറിച്ച്
                                        <?php else: ?>
                                            About Us
                                        <?php endif; ?>    
                                    </a></li>
                                    <li class="ic-menu-item">
                                        <a href="<?php echo e(route('contact')); ?>">
                                            <?php if(session()->get('language') == 'Malayalam'): ?>
                                                ബന്ധപ്പെടുക
                                            <?php else: ?>
                                                Contact
                                            <?php endif; ?>    
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <div class="ic-header-bottom-right d-flex align-items-center">
                        <div class="ic-header-search">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="ic-mobile-menu-main">
        <div class="ic-mobile-menu">
            <div class="ic-nav-close" title="Close">
                <i class="icofont-close"></i>
            </div>
            <div class="ic-mobile-menu-card">
                <a href="index.html" class="d-block text-center pl-5 pr-5">
                    <img src="<?php echo e(asset('frontend/assets/images/' . $site->logo)); ?>" alt="<?php echo e($seo->alt); ?>">
                </a>
                <div class="ic-mobile-menu-body">
                    <ul class="ic-mobile-menu-list d-flex flex-column">
                        <li class="ic-menu-item active">
                            <a href="<?php echo e(route('home')); ?>">
                                <?php if(session()->get('language') == 'Malayalam'): ?>
                                    ഹോം
                                <?php else: ?>
                                    Home
                                <?php endif; ?>
                            </a>
                        </li>

                        <li class="ic-menu-item ic-has-dropdown">
                            <a href="<?php echo e(route('motorcycles')); ?>">
                                <?php if(session()->get('language') == 'Malayalam'): ?>
                                    മോട്ടോർസൈക്കിളുകളും ബൈക്കുകളും
                                <?php else: ?>
                                    Motorcycles and Bikes
                                <?php endif; ?>    
                            </a>

                            <ul class="ic-dropdown">
                                <li>
                                    <a href="<?php echo e(route('motorcycles.category', $bikes->slug)); ?>">
                                        <?php if(session('language') == 'Malayalam'): ?>
                                            <?php echo e($bikes->name_ml); ?>

                                        <?php else: ?>
                                            <?php echo e($bikes->name_en); ?>

                                        <?php endif; ?>
                                    </a>
                                    <ul class="list-unstyled">
                                        <?php $__currentLoopData = $bikes_subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li> <a href="<?php echo e(route('motorcycles.category', $subcategory->slug)); ?>">
                                                <?php if(session('language') == 'Malayalam'): ?>
                                                    <?php echo e($subcategory->name_ml); ?>

                                                <?php else: ?>
                                                    <?php echo e($subcategory->name_en); ?>

                                                <?php endif; ?>                                                
                                            </a></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('motorcycles.category', $scooters->slug)); ?>">
                                        <?php if(session('language') == 'Malayalam'): ?>
                                            <?php echo e($scooters->name_ml); ?>

                                        <?php else: ?>
                                            <?php echo e($scooters->name_en); ?>

                                        <?php endif; ?>
                                    </a>
                                    <ul class="list-unstyled">
                                        <?php $__currentLoopData = $scooters_subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li> <a href="<?php echo e(route('motorcycles.category', $subcategory->slug)); ?>">
                                                <?php if(session('language') == 'Malayalam'): ?>
                                                    <?php echo e($subcategory->name_ml); ?>

                                                <?php else: ?>
                                                    <?php echo e($subcategory->name_en); ?>

                                                <?php endif; ?>                                                
                                            </a></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>
                            </ul>



                        </li>
                        <li class="ic-menu-item">
                            <a href="<?php echo e(route('accessories')); ?>">
                                <?php if(session()->get('language') == 'Malayalam'): ?>
                                    ആക്സസറികൾ
                                <?php else: ?>
                                    Accessories
                                <?php endif; ?>    
                            </a>

                        </li>
                        <li class="ic-menu-item">
                            <a href="<?php echo e(route('workshop')); ?>">
                                <?php if(session()->get('language') == 'Malayalam'): ?>
                                    വർക്ക്ഷോപ്പ്
                                <?php else: ?>
                                    Workshop
                                <?php endif; ?>    
                            </a>

                        </li>
                        <li class="ic-menu-item">
                            <a href="<?php echo e(route('about')); ?>">
                                <?php if(session()->get('language') == 'Malayalam'): ?>
                                    ഞങ്ങളേക്കുറിച്ച്
                                <?php else: ?>
                                    About Us
                                <?php endif; ?>    
                            </a>
                        </li>
                        <li class="ic-menu-item">
                            <a href="<?php echo e(route('contact')); ?>">
                                <?php if(session()->get('language') == 'Malayalam'): ?>
                                    ബന്ധപ്പെടുക
                                <?php else: ?>
                                    Contact
                                <?php endif; ?>    
                            </a>
                        </li>

                        <li>
                            <?php if(session()->get('language') == 'Malayalam'): ?>
                                <a href="<?php echo e(route('language.english')); ?>">English</a>
                            <?php else: ?>
                                <a href="<?php echo e(route('language.malayalam')); ?>">മലയാളം</a>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<?php /**PATH /home/u147280632/domains/suzukipathanamthitta.com/public_html/resources/views/frontend/layouts/header.blade.php ENDPATH**/ ?>