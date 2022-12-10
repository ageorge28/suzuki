<?php $__env->startSection('title'); ?>
    <?php if(session('language') == 'Malayalam'): ?>
        <?php echo e($site->name_ml); ?> | മോട്ടോർസൈക്കിളുകളും ബൈക്കുകളും
    <?php else: ?>
        <?php echo e($site->name_en); ?> | Motorcycles and Bikes
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section class="ic-breadcrumb style-three">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <h3 class="ic-breadcrumb-title">
                    <?php if(session()->get('language') == 'Malayalam'): ?>
                        മോട്ടോർസൈക്കിളുകളും ബൈക്കുകളും
                    <?php else: ?>
                        Motorcycles and Bikes                        
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
                            മോട്ടോർസൈക്കിളുകളും ബൈക്കുകളും
                        <?php else: ?>
                            Motorcycles and Bikes                          
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
        <div class="ic-section-header">
                 
            <h1 class="ic-header-title">
                <?php if(session()->get('language') == 'Malayalam'): ?>
                    നിങ്ങളുടെ<span> സ്വപ്ന ബൈക്ക്</span>
                    <br />
                    ഞങ്ങളുടെ തിരഞ്ഞെടുപ്പ്
                <?php else: ?>
                    your <span>dream bike</span>
                    <br />
                    our choice
                <?php endif; ?>
            </h1>
            <span class="ic-header-divider"></span>
            <h6 class="ic-header-subtitle">
                <?php if(session()->get('language') == 'Malayalam'): ?>
                    സ്റ്റൈലിഷ് ഡിസൈൻ<span>ഒപ്പം</span> പ്രകടനം
                <?php else: ?>
                    Stylish Design <span>&</span> Performance
                <?php endif; ?>
            </h6>
        </div>
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
                                            <a class="link-title" href="<?php echo e(route('motorcycles.category', $bikes->slug)); ?>" aria-expanded="true">
                                                <?php if(session('language') == 'Malayalam'): ?>
                                                    <?php echo e($bikes->name_ml); ?>

                                                <?php else: ?>
                                                    <?php echo e($bikes->name_en); ?>

                                                <?php endif; ?>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="<?php echo e($bikes->slug); ?>" class="" data-parent="#accordion" style="">
                                        <div class="card-body">
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
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0">
                                    <div class="card-header">
                                        <h6 class="mb-0">
                                            <a class="link-title" href="<?php echo e(route('motorcycles.category', $scooters->slug)); ?>" aria-expanded="true">
                                                <?php if(session('language') == 'Malayalam'): ?>
                                                    <?php echo e($scooters->name_ml); ?>

                                                <?php else: ?>
                                                    <?php echo e($scooters->name_en); ?>

                                                <?php endif; ?>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="<?php echo e($scooters->slug); ?>" class="" data-parent="#accordion" style="">
                                        <div class="card-body">
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
                                        </div>
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

                            <?php $__empty_1 = true; $__currentLoopData = $motorcycles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $motorcycle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <!-- Product item -->
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="ic-product-item">
                                    <div class="ic-product-thumbnail">
                                        <a href="<?php echo e(route('motorcycles.show', $motorcycle->slug)); ?>">
                                            <img src="<?php echo e(asset('uploads/motorcycles/thumbnails/' . $motorcycle->thumbnail)); ?>" alt="<?php echo e($seo->alt); ?>">
                                        </a>
                                    </div>
                                    <div class="ic-product-content">
        
                                        <div class="ic-product-content-inner">
       
                                            <h3 class="ic-product-item-title">
                                                <a href="<?php echo e(route('motorcycles.show', $motorcycle->slug)); ?>">
                                                    <?php if(session('language') == 'Malayalam'): ?>
                                                        <?php echo e($motorcycle->name_ml); ?>

                                                    <?php else: ?>
                                                        <?php echo e($motorcycle->name_en); ?>

                                                    <?php endif; ?>
                                                </a>
                                            </h3>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                No motorcycles found.
                            <?php endif; ?>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-view" role="tabpanel" aria-labelledby="list-tab">
                        <div class="ic-shop-product ic-list-view row">

                            <?php $__currentLoopData = $motorcycles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $motorcycle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!-- Product item -->
                            <div class="col-12">
                                <div class="ic-product-item">
                                    <div class="ic-product-thumbnail">
                                        <a href="<?php echo e(route('motorcycles.show', $motorcycle->slug)); ?>">
                                            <img src="<?php echo e(asset('uploads/motorcycles/thumbnails/' . $motorcycle->thumbnail)); ?>" alt="<?php echo e($seo->alt); ?>">
                                        </a>
                                    </div>
                                    <div class="ic-product-content">
                                        <div class="ic-product-content-inner">
       
                                            <h3 class="ic-product-item-title">
                                                <a href="<?php echo e(route('motorcycles.show', $motorcycle->slug)); ?>">
                                                    <?php if(session('language') == 'Malayalam'): ?>
                                                        <?php echo e($motorcycle->name_ml); ?>

                                                    <?php else: ?>
                                                        <?php echo e($motorcycle->name_en); ?>

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
                    <?php echo e($motorcycles->links('frontend.pagination')); ?>

                </div>
            </div>
        </div>
    </div>


</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u147280632/domains/suzukipathanamthitta.com/public_html/resources/views/frontend/motorcycles.blade.php ENDPATH**/ ?>