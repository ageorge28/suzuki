<?php $__env->startSection('title'); ?>
    <?php if(session('language') == 'Malayalam'): ?>
        <?php echo e($site->name_ml); ?> | ഞങ്ങളേക്കുറിച്ച്
    <?php else: ?>
        <?php echo e($site->name_en); ?> | About Us
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section class="ic-breadcrumb style-three">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <h3 class="ic-breadcrumb-title">
                    <?php if(session('language') == 'Malayalam'): ?>
                        ഞങ്ങളേക്കുറിച്ച്
                    <?php else: ?>
                        About Us
                    <?php endif; ?>
                </h3>
                <ul>
                    <li>
                        <a href="<?php echo e(route('home')); ?>">
                            <?php if(session('language') == 'Malayalam'): ?>
                                ഹോം
                            <?php else: ?>
                                Home
                            <?php endif; ?>
                        </a>
                    </li>
                    <li>
                        <?php if(session('language') == 'Malayalam'): ?>
                            ഞങ്ങളേക്കുറിച്ച്
                        <?php else: ?>
                            About Us
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="ic-about-section ic-padding-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="ic-about-image wow fadeInRight" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                    <img src="<?php echo e(asset('frontend/assets/images/about/' . $about->main_image)); ?>" alt="Suzuki Bikes and Scooters Pathanamthitta">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="ic-about-content wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                    <h2>
                        <?php if(session('language') == 'Malayalam'): ?>
                            <?php echo e($about->title_ml); ?>

                        <?php else: ?>
                            <?php echo e($about->title_en); ?>

                        <?php endif; ?>
                    </h2>
                    <p>
                        <?php if(session('language') == 'Malayalam'): ?>
                            <?php echo $about->description_ml; ?>

                        <?php else: ?>
                            <?php echo $about->description_en; ?>

                        <?php endif; ?>
                    </p>
                    <a href="<?php echo e(route('contact')); ?>" class="ic-custom-btn-rvs">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ic-counter-section ic-section-bg ic-padding-100">
    <div class="container">
        <div class="row" style="padding-top:50px">
            <!-- Counter item -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="ic-counter-item wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <img src="<?php echo e(asset('frontend/assets/images/about/rating.png')); ?>">
                    <div class="counter-wrap d-flex align-items-center justify-content-center">
                        <div class="counter"><?php echo e($about->reviews); ?></div>
                        <span>+</span>
                    </div>
                    <p>
                        <?php if(session('language') == 'Malayalam'): ?>
                            പോസിറ്റീവ് അവലോകനങ്ങൾ
                        <?php else: ?>
                            Positive Reviews
                        <?php endif; ?>                        
                    </p>
                </div>
            </div>

            <!-- Counter item -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="ic-counter-item wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                    <img src="<?php echo e(asset('frontend/assets/images/about/counter-02.png')); ?>">
                    <div class="counter-wrap d-flex align-items-center justify-content-center">
                        <div class="counter"><?php echo e($about->awards); ?></div>
                        <span></span>
                    </div>
                    <p>
                        <?php if(session('language') == 'Malayalam'): ?>
                            അവാർഡുകൾ
                        <?php else: ?>
                            Awards
                        <?php endif; ?>                        
                    </p>
                </div>
            </div>

            <!-- Counter item -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="ic-counter-item wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                    <img src="<?php echo e(asset('frontend/assets/images/about/counter-03.png')); ?>">
                    <div class="counter-wrap d-flex align-items-center justify-content-center">
                        <div class="counter"><?php echo e($about->products); ?></div>
                        <span>+</span>
                    </div>
                    <p>
                        <?php if(session('language') == 'Malayalam'): ?>
                            മോട്ടോർസൈക്കിളുകൾ
                        <?php else: ?>
                            Motorcycles
                        <?php endif; ?>   
                    </p>
                </div>
            </div>

            <!-- Counter item -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="ic-counter-item wow fadeInUp" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                    <img src="<?php echo e(asset('frontend/assets/images/about/counter-04.png')); ?>">
                    <div class="counter-wrap d-flex align-items-center justify-content-center">
                        <div class="counter"><?php echo e($about->customers); ?></div>
                        <span>+</span>
                    </div>
                    <p>
                        <?php if(session('language') == 'Malayalam'): ?>
                            ഉപഭോക്താക്കൾ
                        <?php else: ?>
                            Customers
                        <?php endif; ?>   
                    </p>
                </div>
            </div>
        </div>

        <!-- Video Section start here -->


    </div>

</section>
<br /><br /><br /><br />
<section class="mt-100">

<div class="container">
    <div class="row">
        <div class="col-6">
            <img src="<?php echo e(asset('frontend/assets/images/about/' . $about->image1)); ?>" alt="<?php echo e($seo->alt); ?>" />
        </div>
        <div class="col-6">
            <img src="<?php echo e(asset('frontend/assets/images/about/' . $about->image2)); ?>" alt="<?php echo e($seo->alt); ?>" />                    
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-6">
            <img src="<?php echo e(asset('frontend/assets/images/about/' . $about->image3)); ?>" alt="<?php echo e($seo->alt); ?>" />
        </div>
        <div class="col-6">
            <img src="<?php echo e(asset('frontend/assets/images/about/' . $about->image4)); ?>" alt="<?php echo e($seo->alt); ?>" />
        </div>
    </div>


</div>
</section>
<br />
<br />

<section class="ic-testimonial-section ic-padding-120">
    <div class="container">
        <div class="ic-testimonial-slider-wrapper">
            <div class="ic-testimonial-slider owl-carousel owl-loaded owl-drag">
               

                <!-- Testimonial item -->
                
            <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(-3720px, 0px, 0px); transition: all 0.25s ease 0s; width: 6510px;">
                    <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="owl-item <?php echo e($loop->index == 0 ? 'active' : ''); ?>" style="width: 930px;">
                        <div class="ic-testimonial-slider-item">
                            <img src="<?php echo e(asset('frontend/assets/images/about/quote.png')); ?>" alt="quote" class="animated w-auto">
                            <p>
                                <?php if(session('language') == 'Malayalam'): ?>
                                    <?php echo e($review->review_ml); ?>

                                <?php else: ?>
                                    <?php echo e($review->review_en); ?>

                                <?php endif; ?>
                            </p>
                            <h4 class="ic-client-name">
                                <?php if(session('language') == 'Malayalam'): ?>
                                    <?php echo e($review->name_ml); ?>

                                <?php else: ?>
                                    <?php echo e($review->name_en); ?>

                                <?php endif; ?>
                            </h4>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            
            <div class="ic-testimonial-slider-nav">
                <div class="ic-testimonial-nav-left"><i class="icofont-simple-left"></i></div>
                <div class="ic-testimonial-nav-right"><i class="icofont-simple-right"></i></div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u147280632/domains/suzukipathanamthitta.com/public_html/resources/views/frontend/about.blade.php ENDPATH**/ ?>