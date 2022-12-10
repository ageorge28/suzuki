<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta name="title" content="<?php echo e($seo->meta_title); ?>" />
    <meta name="description" content="<?php echo e($seo->meta_description); ?>" />
    <meta name="keywords" content="<?php echo e($seo->meta_keywords); ?>" />
    <link rel="canonical" href="<?php echo e($site->url); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo e($seo->meta_title); ?>" />
    <meta property="og:description" content="<?php echo e($seo->meta_description); ?>" />
    <meta property="og:url" content="<?php echo e($site->url); ?>" />
    <meta property="og:site_name" content="<?php echo e($site->name_en); ?>" />
    <meta name="google-site-verification" content="DOGOnefVYthkz6HJPuvl1WRNRjT9dS72v7qTFQgLfKQ" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow">
    <link rel="apple-touch-icon" href="<?php echo e(asset('frontend/assets/images/' . $site->favicon)); ?>" />
    <link rel="icon" type="image/png" href="<?php echo e(asset('frontend/assets/images/' . $site->favicon)); ?>">
   
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PKBSGXL');</script>
        <!-- End Google Tag Manager --> 


    <meta name="author" content="http://www.ageorge28.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('frontend/assets/images/' . $site->favicon)); ?>">

    <!-- Plugin css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/assets/css/plugin.css')); ?>">
    <!-- Main Stylesheet css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/assets/css/style.css')); ?>">
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PKBSGXL"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Search start here -->
    
    <!-- Search start here -->

    <!-- Preloader start here -->
    <div class="ic-preloader">
        <div class="loading-wrapper">
            <div class="ic-preloader-grid">
                <img src="<?php echo e(asset('frontend/assets/images/loading.gif')); ?>" />
                
            </div>
        </div>
    </div>
    <!-- Preloader end here -->

    <!-- Header section start here -->
<?php echo $__env->make('frontend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Header section end here -->

<?php echo $__env->yieldContent('content'); ?>
    <!-- Newsletter section end here -->
    <!-- Newsletter section end here -->

    <!-- Footer style two section start here -->
<?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Footer style two section end here -->

    <!-- scroll to top start here -->
    <div class="ic-scroll-top">
        <svg class="ic-scroll-top-circle" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- scroll to top end here -->

    <!-- Plugin js -->
    <script src="<?php echo e(asset('frontend/assets/js/plugin.js')); ?>"></script>
    <!-- Main scripts js -->
    <script src="<?php echo e(asset('frontend/assets/js/custom.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\suzuki\resources\views/frontend/layouts/app.blade.php ENDPATH**/ ?>