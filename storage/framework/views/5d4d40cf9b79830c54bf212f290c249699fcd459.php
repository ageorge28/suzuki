<?php
    $site = \App\Models\Site::first();
    $seo = \App\Models\Seo::first();
?>



<?php $__env->startSection('title'); ?>
    <?php if(session()->get('language') == 'Malayalam'): ?>
        <?php echo e($site->name_ml); ?> | ഹോം
    <?php else: ?>
        <?php echo e($site->name_en); ?> | Home
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section class="ic-error-section" style="background-image:none">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="ic-error-content">
                    <img src="<?php echo e(asset('frontend/assets/images/404.png')); ?>" alt="404-thumb">
                    <?php if(session()->get('language') == 'Malayalam'): ?>
                        <h3>ക്ഷമിക്കണം!</h3>
                        <p>നിങ്ങൾ തിരയുന്ന പേജ് <br>കണ്ടെത്താനായില്ല</p>
                    <?php else: ?>
                        <h3>Sorry!</h3>
                        <p>The Page You Are Looking For <br>Was Not Found</p>
                    <?php endif; ?>
                    <a href="<?php echo e(route('home')); ?>" onclick="window.history.go(-1); return false;" class="ic-custom-btn theme-color">Go Back</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\suzuki\resources\views/errors/404.blade.php ENDPATH**/ ?>