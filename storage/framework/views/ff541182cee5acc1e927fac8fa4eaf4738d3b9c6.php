<?php if($paginator->hasPages()): ?>
    <ul class="ic-pagination">
       
        <?php if($paginator->onFirstPage()): ?>
            <li class="active"><span><i class="icofont-rounded-double-left"></i></span></li>
        <?php else: ?>
            <li><a href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev"><i class="icofont-rounded-double-left"></i></a></li>
        <?php endif; ?>


      
        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           
            <?php if(is_string($element)): ?>
                <li><span><?php echo e($element); ?></span></li>
            <?php endif; ?>


           
            <?php if(is_array($element)): ?>
                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($page == $paginator->currentPage()): ?>
                        <li class="active"><span><?php echo e($page); ?></span></li>
                    <?php else: ?>
                        <li><a href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        
        <?php if($paginator->hasMorePages()): ?>
            <li><a href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next"><i class="icofont-rounded-double-right"></i></a></li>
        <?php else: ?>
            <li class="active"><span><i class="icofont-rounded-double-right"></i></span></li>
        <?php endif; ?>
    </ul>
<?php endif; ?> <?php /**PATH /home/u147280632/domains/suzukipathanamthitta.com/public_html/resources/views/frontend/pagination.blade.php ENDPATH**/ ?>