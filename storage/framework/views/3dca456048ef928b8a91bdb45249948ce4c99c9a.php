<?php $__env->startSection('title'); ?>
    <?php if(session('language') == 'Malayalam'): ?>
        <?php echo e($site->name_ml); ?> | ആക്സസറികൾ
    <?php else: ?>
        <?php echo e($site->name_en); ?> | Accessories
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section class="ic-breadcrumb style-three">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <h3 class="ic-breadcrumb-title">
                    <?php if(session()->get('language') == 'Malayalam'): ?>
                        ആക്സസറികൾ
                    <?php else: ?>
                        Accessories                           
                    <?php endif; ?>
                </h3>
                <ul>
                    <li>
                        <a href="<?php echo e(route('home')); ?>">
                            <?php if(session()->get('language') == 'Malayalam'): ?>
                                ഹോം
                            <?php else: ?>
                                Home
                            <?php endif; ?>
                        </a>
                    </li>
                    <li>
                        <?php if(session()->get('language') == 'Malayalam'): ?>
                            ആക്സസറികൾ
                        <?php else: ?>
                            Accessories                           
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="ic-product ic-padding-120">
    <div class="container">

        <!-- Section Header -->
        <div class="ic-space-60"></div>
        <div class="row ic-flex-md-column-reverse">

            <!-- Product Sidebar -->
            <div class="col-lg-2 col-mg-2 col-sm-12">
                <aside class="ic-product-sidebar">

                   
                    <!-- Product Widget -->
                    <div class="ic-product-widget">
                        <h3 class="ic-widget-title">
                            <?php if(session('language') == 'Malayalam'): ?>
                                വിഭാഗങ്ങൾ
                            <?php else: ?>
                                Categories
                            <?php endif; ?>
                        </h3>
                        <div class="ic-widget-content">
                            <div id="accordion" class="accordion">
                                <div class="card border-0">
                                    <div class="card-header">
                                        <h6 class="mb-0">                                                               
                                            <a class="link-title" <?php echo e(request()->is('accessories') ? ' style=color:#D23B3B ' : ''); ?> href="<?php echo e(route('accessories')); ?>" aria-expanded="true">
                                                <?php if(session('language') == 'Malayalam'): ?>
                                                    എല്ലാ വിഭാഗങ്ങളും
                                                <?php else: ?> 
                                                    All Categories
                                                <?php endif; ?>
                                            </a>
                                        </h6>
                                        <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <h6 class="mb-0">                                          
                                            <a class="link-title" href="<?php echo e(route('accessories.subcategory', $subcategory->slug)); ?>" aria-expanded="true">
                                                <?php if(session('language') == 'Malayalam'): ?>
                                                    <?php echo e($subcategory->name_ml); ?>

                                                <?php else: ?>
                                                    <?php echo e($subcategory->name_en); ?>

                                                <?php endif; ?>
                                            </a>
                                        </h6>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </aside>
            </div>
            <div class="col-lg-10 col-mg-10 col-sm-12 ic-mb-md-40">

                <div class="ic-product-head" style="float:right" >
                    
                    
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="grid-view" role="tabpanel" aria-labelledby="grid-tab">
                        <div class="ic-shop-product ic-grid-view row">

                            <?php $__empty_1 = true; $__currentLoopData = $accessories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accessory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <!-- Product item -->
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="ic-product-item">
                                    <div class="ic-product-thumbnail">
                                        <a href="#">
                                            <img src="<?php echo e(asset('uploads/accessories/images/' . $accessory->image)); ?>" alt="<?php echo e($seo->alt); ?>">
                                        </a>
                                    </div>
                                    <div class="ic-product-content">

                                        <div class="ic-product-content-inner">

                                            <h3 class="ic-product-item-title">
                                                <a href="#">
                                                    <?php if(session('language') == 'Malayalam'): ?>
                                                        <?php echo e($accessory->name_ml); ?>

                                                    <?php else: ?>
                                                        <?php echo e($accessory->name_en); ?>

                                                    <?php endif; ?>
                                                </a>
                                            </h3>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                No accessories found.
                            <?php endif; ?>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-view" role="tabpanel" aria-labelledby="list-tab">
                        <div class="ic-shop-product ic-list-view row">

                            <?php $__currentLoopData = $accessories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accessory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!-- Product item -->
                            <div class="col-12">
                                <div class="ic-product-item">
                                    <div class="ic-product-thumbnail">
                                        <a href="#">
                                            <img src="<?php echo e(asset('uploads/accessories/images/' . $accessory->image)); ?>" alt="<?php echo e($seo->alt); ?>">
                                        </a>
                                    </div>
                                    <div class="ic-product-content">
                                        <div class="ic-product-content-inner">

                                            <h3 class="ic-product-item-title">
                                                <a href="#">
                                                    <?php if(session('language') == 'Malayalam'): ?>
                                                        <?php echo e($accessory->name_ml); ?>

                                                    <?php else: ?>
                                                        <?php echo e($accessory->name_en); ?>

                                                    <?php endif; ?>
                                                </a>
                                            </h3>
                                            
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="text-center">

                    <?php echo e($accessories->links('frontend.pagination')); ?>

                </div>
            </div>
        </div>
    </div>


</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u147280632/domains/suzukipathanamthitta.com/public_html/resources/views/frontend/accessories.blade.php ENDPATH**/ ?>