<?php $__env->startSection('title'); ?>
    <?php if(session('language') == 'Malayalam'): ?>
        <?php echo e($site->name_ml); ?> | മോട്ടോർസൈക്കിളുകൾ
    <?php else: ?>
        <?php echo e($site->name_en); ?> | Motorcycles
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<style type="text/css">
    body {
background-color: #7B1FA2
}



.carousel-inner img {
width: 100%;
height: 
}

#custCarousel .carousel-indicators {
position: static;
margin-top: 20px
}

#custCarousel .carousel-indicators>li {
width: 100px
}

#custCarousel .carousel-indicators li img {
display: block;
opacity: 0.5
}

#custCarousel .carousel-indicators li.active img {
opacity: 1
}

#custCarousel .carousel-indicators li:hover img {
opacity: 0.75
}

.carousel-item img {
width: 80%
}
</style>

<?php $__env->startSection('content'); ?>

<section class="ic-product-single ic-padding-bottom">

    <!-- Product single top -->
    <div class="ic-product-single-top ">
        <div class="container">
            <div class="row align-items-center ic-flex-md-column-reverse">
                <div class="col-lg-5 col-md-12">
                    <div class="ic-product-single-content">
                        
                        <h3 class="ic-product-item-title">
                            <?php if(session('language') == 'Malayalam'): ?>
                                <?php echo e($motorcycle->name_ml); ?>

                            <?php else: ?>
                                <?php echo e($motorcycle->name_en); ?>

                            <?php endif; ?>
                        </h3>
                        
                        <p>
                            <?php if(session('language') == 'Malayalam'): ?>
                                <?php echo e($motorcycle->description_ml); ?>

                            <?php else: ?>
                                <?php echo e($motorcycle->description_en); ?>

                            <?php endif; ?>                        
                        </p>
                        <div class="ic-product-short-specification">
                            <ul class="ic-specification-list">
                                <li>
                                    <span>
                                        <?php if(session('language') == 'Malayalam'): ?>
                                            ലഭ്യത:
                                        <?php else: ?>
                                            Availability:
                                        <?php endif; ?>
                                   </span>
                                    <?php if($motorcycle->status == 1): ?>
                                        <span class="badge badge-pill badge-success">Available</span>
                                    <?php else: ?>
                                        <span class="badge badge-pill badge-danger">Out of stock</span>
                                    <?php endif; ?>
                                </li>
                                <li><span>                                    
                                    <?php if(session('language') == 'Malayalam'): ?>
                                        എസ്.കെ.യു:
                                    <?php else: ?>
                                        SKU:
                                    <?php endif; ?>
                                    </span>
                                    <?php echo e($motorcycle->code); ?>

                                </li>
                                <li><span>
                                    <?php if(session('language') == 'Malayalam'): ?>
                                        തരം:
                                    <?php else: ?>
                                        Type:
                                    <?php endif; ?>                                    
                                </span>
                                    <?php if(session('language') == 'Malayalam'): ?>
                                        <?php echo e($motorcycle->category->name_ml); ?>

                                    <?php else: ?>
                                        <?php echo e($motorcycle->category->name_en); ?>

                                    <?php endif; ?>         
                                </li>
                                <li>
                                    <span>
                                        <?php if(session('language') == 'Malayalam'): ?>
                                            വെണ്ടർ
                                        <?php else: ?>
                                            Vendor:
                                        <?php endif; ?>
                                    </span>
                                    <?php if(session('language') == 'Malayalam'): ?>
                                        <?php echo e($site->name_ml); ?>

                                    <?php else: ?>
                                        <?php echo e($site->name_en); ?>

                                    <?php endif; ?>    
                                </li>
                            </ul>
                            <br />
                            <p style="font-weight:normal">
                                <?php if(session('language') == 'Malayalam'): ?>
                                    <?php echo e($motorcycle->details->description_ml); ?>

                                <?php else: ?>
                                    <?php echo e($motorcycle->details->description_en); ?>

                                <?php endif; ?>    
                            </p>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 ic-padding-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="custCarousel" class="carousel slide" data-ride="carousel" align="center">
                                    <!-- slides -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item active"> 
                                            <img src="<?php echo e(asset('uploads/motorcycles/thumbnails/' . $motorcycle->thumbnail)); ?>" alt="<?php echo e($seo->alt); ?>"> 
                                        </div>
                                        
                                        <?php $__currentLoopData = $motorcycle->photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="carousel-item"> 
                                            <img src="<?php echo e(asset('uploads/motorcycles/photos/' . $image->file)); ?>" alt="Hills"> 
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div> <!-- Left right --> 
                                    <a class="carousel-control-prev" href="#custCarousel" data-slide="prev"> <span class="carousel-control-prev-icon"></span> </a> <a class="carousel-control-next" href="#custCarousel" data-slide="next"> <span class="carousel-control-next-icon"></span> </a> <!-- Thumbnails -->
                                    <ol class="carousel-indicators list-inline">
                                        <li class="list-inline-item active"> 
                                            <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#custCarousel"> 
                                                <img src="<?php echo e(asset('uploads/motorcycles/thumbnails/' . $motorcycle->thumbnail)); ?>" alt="<?php echo e($seo->alt); ?>" class="img-fluid"> 
                                            </a> 
                                        </li>
                                        <?php $__currentLoopData = $motorcycle->photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="list-inline-item"> 
                                            <a id="carousel-selector-<?php echo e($loop->index + 1); ?>" data-slide-to="<?php echo e($loop->index + 1); ?>" data-target="#custCarousel"> 
                                                <img src="<?php echo e(asset('uploads/motorcycles/photos/' . $image->file)); ?>" class="img-fluid"> 
                                            </a> 
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ic-product-tabs">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Product nav tab -->
                    <ul class="nav ic-product-nav-tabs d-none d-lg-flex" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">
                                <?php if(session('language') == 'Malayalam'): ?>
                                    അവലോകനം
                                <?php else: ?>
                                    Overview
                                <?php endif; ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#features" role="tab" aria-controls="features" aria-selected="false">
                                <?php if(session('language') == 'Malayalam'): ?>
                                    സവിശേഷതകൾ
                                <?php else: ?>
                                    Features
                                <?php endif; ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#accessories" role="tab" aria-controls="accessories" aria-selected="false">
                                <?php if(session('language') == 'Malayalam'): ?>
                                    ആക്സസറികൾ
                                <?php else: ?>
                                    Accessories
                                <?php endif; ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#specifications" role="tab" aria-controls="specifications" aria-selected="false">
                                <?php if(session('language') == 'Malayalam'): ?>
                                    സ്പെസിഫിക്കേഷനുകൾ
                                <?php else: ?>
                                    Specifications
                                <?php endif; ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#brochure" role="tab" aria-controls="brochure" aria-selected="false">
                                <?php if(session('language') == 'Malayalam'): ?>
                                    ബ്രോഷർ
                                <?php else: ?>
                                    Brochure
                                <?php endif; ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#video" role="tab" aria-controls="video" aria-selected="false">
                                <?php if(session('language') == 'Malayalam'): ?>
                                    വീഡിയോ
                                <?php else: ?>
                                    Video
                                <?php endif; ?>
                            </a>
                        </li>
                    </ul>
                    <div class="ic-mobile-select-dropdown-wrap">
                        <ul class="nav ic-product-nav-tabs ic-mobile-select-dropdown ic-ul-select" role="tablist">
                            <li class="nav-item active">
                                <a class="nav-link active" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">
                                    <?php if(session('language') == 'Malayalam'): ?>
                                        അവലോകനം
                                    <?php else: ?>
                                        Overview
                                    <?php endif; ?>                                
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#features" role="tab" aria-controls="features" aria-selected="false">
                                    <?php if(session('language') == 'Malayalam'): ?>
                                        സവിശേഷതകൾ
                                    <?php else: ?>
                                        Features
                                    <?php endif; ?>                                
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#accessories" role="tab" aria-controls="accessories" aria-selected="false">
                                    <?php if(session('language') == 'Malayalam'): ?>
                                        ആക്സസറികൾ
                                    <?php else: ?>
                                        Accessories
                                    <?php endif; ?>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#specifications" role="tab" aria-controls="specifications" aria-selected="false">
                                    <?php if(session('language') == 'Malayalam'): ?>
                                        സ്പെസിഫിക്കേഷനുകൾ
                                    <?php else: ?>
                                        Specifications
                                    <?php endif; ?>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#brochure" role="tab" aria-controls="brochure" aria-selected="false">
                                    <?php if(session('language') == 'Malayalam'): ?>
                                        ബ്രോഷർ
                                    <?php else: ?>
                                        Brochure
                                    <?php endif; ?>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#video" role="tab" aria-controls="video" aria-selected="false">
                                    <?php if(session('language') == 'Malayalam'): ?>
                                        വീഡിയോ
                                    <?php else: ?>
                                        Video
                                    <?php endif; ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="ic-product-tab-content">

                        <!-- Product description -->
                        <div class="tab-pane fade show active" id="overview" role="tabpanel">
                            <div class="overview">
                                <img src="<?php echo e(asset('uploads/motorcycles/overviews/' . $motorcycle->details->overview_image)); ?>" alt="<?php echo e($seo->alt); ?>" />
                            </div>
                        </div>

                        <!-- Product features -->
                        <div class="tab-pane fade" id="features" role="tabpanel">
                            <div class="ic-accordion" id="accordionExample">
                                <div class="card">
                                    <ul class="list-group">
                                        <?php if(session('language') == 'Malayalam'): ?>
                                            <?php $__currentLoopData = \Illuminate\Support\Str::of($motorcycle->details->features_ml)->explode(','); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="mb-3 border-bottom pb-3 d-flex list-group-item">
                                                    <span class="mr-auto"> 
                                                        <?php echo e($feature); ?>      
                                                    </span>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                  
                                        <?php else: ?>
                                            <?php $__currentLoopData = \Illuminate\Support\Str::of($motorcycle->details->features_en)->explode(','); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="mb-3 border-bottom pb-3 d-flex list-group-item">
                                                    <span class="mr-auto"> 
                                                        <?php echo e($feature); ?>      
                                                    </span>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                  
                                        <?php endif; ?>    
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="accessories" role="tabpanel">
                            <div class="ic-accordion" id="accordionExample">
                                <div class="card">
                                    <ul class="list-group">
                                        <?php if(session('language') == 'Malayalam'): ?>
                                            <?php $__currentLoopData = \Illuminate\Support\Str::of($motorcycle->details->accessories_ml)->explode(','); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accessory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="mb-3 border-bottom pb-3 d-flex list-group-item">
                                                    <span class="mr-auto"> 
                                                        <?php echo e($accessory); ?>      
                                                    </span>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                  
                                        <?php else: ?>
                                            <?php $__currentLoopData = \Illuminate\Support\Str::of($motorcycle->details->accessories_en)->explode(','); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accessory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="mb-3 border-bottom pb-3 d-flex list-group-item">
                                                    <span class="mr-auto"> 
                                                        <?php echo e($accessory); ?>      
                                                    </span>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                  
                                        <?php endif; ?>    
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Product specification -->
                        <div class="tab-pane fade" id="specifications" role="tabpanel">
                            <div class="ic-spec">
                                <div class="ic-spec-section">
                                    <h4 class="ic-spec-section-title">
                                        <?php if(session('language') == 'Malayalam'): ?>
                                            എഞ്ചിൻ
                                        <?php else: ?>
                                            Engine
                                        <?php endif; ?>
                                        </h4>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                എഞ്ചിൻ തരം
                                            <?php else: ?>
                                                Engine Type
                                            <?php endif; ?>
                                        </div>
                                        <div class="ic-spec-value">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                <?php echo e($motorcycle->details->engine_type_ml); ?>

                                            <?php else: ?>
                                                <?php echo e($motorcycle->details->engine_type_en); ?>

                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                വാൽവ് സിസ്റ്റം
                                            <?php else: ?>
                                                Valve System
                                            <?php endif; ?>
                                        </div>
                                        <div class="ic-spec-value">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                <?php echo e($motorcycle->details->valve_system_ml); ?>

                                            <?php else: ?>
                                                <?php echo e($motorcycle->details->valve_system_en); ?>

                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                സ്ഥാനമാറ്റാം
                                            <?php else: ?>
                                                Displacement
                                            <?php endif; ?>
                                        </div>
                                        <div class="ic-spec-value">
                                            <?php echo e($motorcycle->details->displacement); ?> cm<sup>3</sup>
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                ബോർ x സ്ട്രോക്ക്
                                            <?php else: ?>
                                                Bore x Stroke
                                            <?php endif; ?>
                                        </div>
                                        <div class="ic-spec-value">
                                            <?php echo e($motorcycle->details->bore_stroke); ?> 
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                എഞ്ചിൻ ഔട്ട്പുട്ട്
                                            <?php else: ?>
                                                Engine Output
                                            <?php endif; ?>
                                        </div>
                                        <div class="ic-spec-value">
                                            <?php echo e($motorcycle->details->engine_output); ?>

                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                ടോർക്ക്
                                            <?php else: ?>
                                                Torque
                                            <?php endif; ?>
                                        </div>
                                        <div class="ic-spec-value">
                                            <?php echo e($motorcycle->details->torque); ?>

                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                ഫ്യൂവൽ സിസ്റ്റം
                                            <?php else: ?>
                                                Fuel System
                                            <?php endif; ?>
                                        </div>
                                        <div class="ic-spec-value">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                <?php echo e($motorcycle->details->fuel_system_ml); ?>

                                            <?php else: ?>
                                                <?php echo e($motorcycle->details->fuel_system_en); ?>

                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                സ്റ്റാർട്ടർ സിസ്റ്റം
                                            <?php else: ?>
                                                Starter System
                                            <?php endif; ?>
                                        </div>
                                        <div class="ic-spec-value">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                <?php echo e($motorcycle->details->starter_system_ml); ?>

                                            <?php else: ?>
                                                <?php echo e($motorcycle->details->starter_system_en); ?>

                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                ട്രാൻസ്മിഷൻ തരം
                                            <?php else: ?>
                                                Transmission Type
                                            <?php endif; ?>
                                        </div>
                                        <div class="ic-spec-value">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                <?php echo e($motorcycle->details->transmission_type_ml); ?>

                                            <?php else: ?>
                                                <?php echo e($motorcycle->details->transmission_type_en); ?>

                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="ic-spec-section">
                                    <h4 class="ic-spec-section-title">
                                        <?php if(session('language') == 'Malayalam'): ?>
                                            അളവുകളും ഭാരവും
                                        <?php else: ?>
                                            Dimensions and Weight
                                        <?php endif; ?>
                                    </h4>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                ചക്രങ്ങൾ
                                            <?php else: ?>
                                                Wheels
                                            <?php endif; ?>
                                        </div>
                                        <div class="ic-spec-value">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                <?php echo e($motorcycle->details->wheels_ml); ?>

                                            <?php else: ?>
                                                <?php echo e($motorcycle->details->wheels_en); ?>

                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                മൊത്തം ദൈർഘ്യം
                                            <?php else: ?>
                                                Overall Length
                                            <?php endif; ?>
                                        </div>
                                        <div class="ic-spec-value">
                                            <?php echo e($motorcycle->details->length); ?> mm
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                മൊത്തം വീതി
                                            <?php else: ?>
                                                Overall Width
                                            <?php endif; ?>
                                        </div>
                                        <div class="ic-spec-value">
                                            <?php echo e($motorcycle->details->width); ?> mm
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                മൊത്തത്തിലുള്ള ഉയരം
                                            <?php else: ?>
                                                Overall Height
                                            <?php endif; ?>
                                        </div>
                                        <div class="ic-spec-value">
                                            <?php echo e($motorcycle->details->height); ?> mm
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                വീൽ ബേസ്
                                            <?php else: ?>
                                                Wheel Base
                                            <?php endif; ?>
                                        </div>
                                        <div class="ic-spec-value">
                                            <?php echo e($motorcycle->details->wheel_base); ?> mm
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                ഗ്രൗണ്ട് ക്ലിയറൻസ്
                                            <?php else: ?>
                                                Ground Clearance
                                            <?php endif; ?>
                                        </div>
                                        <div class="ic-spec-value">
                                            <?php echo e($motorcycle->details->ground_clearance); ?> mm
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                സീറ്റ് ഉയരം
                                            <?php else: ?>
                                                Seat Height
                                            <?php endif; ?>
                                        </div>
                                        <div class="ic-spec-value">
                                            <?php echo e($motorcycle->details->seat_height); ?> mm
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                കർബ് മാസ്
                                            <?php else: ?>
                                                Kerb Mass
                                            <?php endif; ?>
                                        </div>
                                        <div class="ic-spec-value">
                                            <?php echo e($motorcycle->details->kerb_mass); ?> kg
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                ഫ്യൂവൽ  ടാങ്ക് ശേഷി
                                            <?php else: ?>
                                                Fuel Tank Capacity
                                            <?php endif; ?>
                                        </div>
                                        <div class="ic-spec-value">
                                            <?php echo e($motorcycle->details->fuel_tank_capacity); ?> L
                                        </div>
                                    </div>
                                </div>
                                <div class="ic-spec-section">
                                    <h4 class="ic-spec-section-title">
                                        <?php if(session('language') == 'Malayalam'): ?>
                                            സസ്പെൻഷൻ
                                        <?php else: ?>
                                            Suspension
                                        <?php endif; ?>
                                    </h4>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                മുന്നിൽ
                                            <?php else: ?>
                                                Front
                                            <?php endif; ?>
                                        </div>
                                        <div class="ic-spec-value">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                <?php echo e($motorcycle->details->front_suspension_ml); ?>

                                            <?php else: ?>
                                                <?php echo e($motorcycle->details->front_suspension_en); ?>

                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                പുറകിലുള്ള
                                            <?php else: ?>
                                                Rear
                                            <?php endif; ?>
                                        </div>
                                        <div class="ic-spec-value">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                <?php echo e($motorcycle->details->rear_suspension_ml); ?>

                                            <?php else: ?>
                                                <?php echo e($motorcycle->details->rear_suspension_en); ?>

                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="ic-spec-section">
                                    <h4 class="ic-spec-section-title">
                                        <?php if(session('language') == 'Malayalam'): ?>
                                            ടയർ വലിപ്പം
                                        <?php else: ?>
                                            Tyre Size
                                        <?php endif; ?>
                                    </h4>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                മുന്നിൽ
                                            <?php else: ?>
                                                Front
                                            <?php endif; ?>
                                        </div>
                                        <div class="ic-spec-value">
                                            <?php echo e($motorcycle->details->front_tyre); ?>

                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                പുറകിലുള്ള
                                            <?php else: ?>
                                                Rear
                                            <?php endif; ?>
                                        </div>
                                        <div class="ic-spec-value">
                                            <?php echo e($motorcycle->details->rear_tyre); ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="ic-spec-section">
                                    <h4 class="ic-spec-section-title">
                                        <?php if(session('language') == 'Malayalam'): ?>
                                            ബ്രേക്കുകൾ
                                        <?php else: ?>
                                            Brakes
                                        <?php endif; ?>
                                    </h4>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                മുന്നിൽ
                                            <?php else: ?>
                                                Front
                                            <?php endif; ?>
                                        </div>
                                        <div class="ic-spec-value">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                <?php echo e($motorcycle->details->front_brakes_ml); ?>

                                            <?php else: ?>
                                                <?php echo e($motorcycle->details->front_brakes_en); ?>

                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                പുറകിലുള്ള
                                            <?php else: ?>
                                                Rear
                                            <?php endif; ?>
                                        </div>
                                        <div class="ic-spec-value">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                <?php echo e($motorcycle->details->rear_brakes_ml); ?>

                                            <?php else: ?>
                                                <?php echo e($motorcycle->details->rear_brakes_en); ?>

                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="ic-spec-section">
                                    <h4 class="ic-spec-section-title">
                                        <?php if(session('language') == 'Malayalam'): ?>
                                            ഇലക്ട്രിക്കൽ
                                        <?php else: ?>
                                            Electrical
                                        <?php endif; ?>
                                    </h4>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                ബാറ്ററി
                                            <?php else: ?>
                                                Battery
                                            <?php endif; ?>
                                        </div>
                                        <div class="ic-spec-value">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                <?php echo e($motorcycle->details->battery_ml); ?>

                                            <?php else: ?>
                                                <?php echo e($motorcycle->details->battery_en); ?>

                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                ഹെഡ്ലൈറ്റ്
                                            <?php else: ?>
                                                Headlight
                                            <?php endif; ?>
                                        </div>
                                        <div class="ic-spec-value">
                                            <?php echo e($motorcycle->details->headlight); ?>

                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            <?php if(session('language') == 'Malayalam'): ?>
                                                ടെയിൽ ലൈറ്റ്
                                            <?php else: ?>
                                                Tail light
                                            <?php endif; ?>
                                        </div>
                                        <div class="ic-spec-value">
                                            <?php echo e($motorcycle->details->taillight); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Product review -->
                        <div class="tab-pane fade" id="brochure" role="tabpanel">
                            <div class="ic-product-review">
                                <div class="ic-review-list">
                                    <a class="ic-custom-btn-rvs secondary-hover disable-shadow" target="_blank" href="<?php echo e(asset('uploads/motorcycles/brochures/' . $motorcycle->details->brochure)); ?>">
                                        <?php if(session('language') == 'Malayalam'): ?>
                                            <?php echo e($motorcycle->name_ml); ?> ബ്രോഷർ ഡൗൺലോഡ് ചെയ്യുക
                                        <?php else: ?>
                                            Download <?php echo e($motorcycle->name_en); ?> Brochure
                                        <?php endif; ?>

                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="video" role="tabpanel">
                            <div class="ic-product-review">
                                <div class="ic-review-list">
                                    <iframe width="560" height="315" src="<?php echo e($motorcycle->details->video); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u147280632/domains/suzukipathanamthitta.com/public_html/resources/views/frontend/details.blade.php ENDPATH**/ ?>