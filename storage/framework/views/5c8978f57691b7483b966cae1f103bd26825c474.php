<?php $__env->startSection('title'); ?>
    <?php if(session('language') == 'Malayalam'): ?>
        <?php echo e($site->name_ml); ?> | വർക്ക്ഷോപ്പ്
    <?php else: ?>
        <?php echo e($site->name_en); ?> | Workshop
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section class="ic-breadcrumb style-three">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <h3 class="ic-breadcrumb-title">
                    <?php if(session('language') == 'Malayalam'): ?>
                        വർക്ക്ഷോപ്പ്
                    <?php else: ?>
                        Workshop
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
                            വർക്ക്ഷോപ്പ്
                        <?php else: ?>
                            Workshop
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
                    <img src="<?php echo e(asset('frontend/assets/images/workshop/' . $workshop->main_image)); ?>" alt="<?php echo e($seo->alt); ?>">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="ic-about-content wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                    <h2>
                        <?php if(session('language') == 'Malayalam'): ?>
                            <?php echo e($workshop->title_ml); ?>

                        <?php else: ?>
                            <?php echo e($workshop->title_en); ?>

                        <?php endif; ?>
                    </h2>
                    <p>
                        <?php if(session('language') == 'Malayalam'): ?>
                            <?php echo $workshop->description_ml; ?>

                        <?php else: ?>
                            <?php echo $workshop->description_en; ?>

                        <?php endif; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-100">

<div class="container">
    <div class="row">
        <div class="col-6">
            <img src="<?php echo e(asset('frontend/assets/images/workshop/' . $workshop->image1)); ?>" alt="<?php echo e($seo->alt); ?>" />
        </div>
        <div class="col-6">
            <img src="<?php echo e(asset('frontend/assets/images/workshop/' . $workshop->image2)); ?>" alt="<?php echo e($seo->alt); ?>" />                    
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-6">
            <img src="<?php echo e(asset('frontend/assets/images/workshop/' . $workshop->image3)); ?>" alt="<?php echo e($seo->alt); ?>" />
        </div>
        <div class="col-6">
            <img src="<?php echo e(asset('frontend/assets/images/workshop/' . $workshop->image4)); ?>" alt="<?php echo e($seo->alt); ?>" />
        </div>
    </div>

</div>

<br />
</section>


<section class="mt-100">

    <div class="container">
        <div class="row">
            <div class="col-6">
                <p><?php echo $workshop->contacts; ?></p>
            </div>
        </div>
        <br />  
    </div>
    
    <br />
    </section>



<br />
<br />

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u147280632/domains/suzukipathanamthitta.com/public_html/resources/views/frontend/workshop.blade.php ENDPATH**/ ?>