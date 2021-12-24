<?php if($paginator->hasPages()): ?>
    <ul class="page-nav">
        
        <?php if(!$paginator->onFirstPage()): ?>
            <li class="page-nav__item"><a href="<?php echo e($paginator->previousPageUrl()); ?>" class="page-nav__item__link"><i class="fa fa-angle-double-left"></i></a></li>
        <?php endif; ?>

        
        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <?php if(is_array($element)): ?>
                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($page == $paginator->currentPage()): ?>
                        <li class="page-nav__item"><a href="#" class="page-nav__item__link" style="color: rebeccapurple"><?php echo e($page); ?></a></li>
                    <?php else: ?>
                        <li class="page-nav__item"><a href="<?php echo e($url); ?>" class="page-nav__item__link"><?php echo e($page); ?></a></li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
        <?php if($paginator->hasMorePages()): ?>
            <li class="page-nav__item"><a href="<?php echo e($paginator->nextPageUrl()); ?>" class="page-nav__item__link"><i class="fa fa-angle-double-right"></i></a></li>
        <?php endif; ?>
    </ul>
<?php endif; ?>
<?php /**PATH E:\OpenServer\domains\localhost\loftschool\test3\resources\views/vendor/pagination/bootstrap-4.blade.php ENDPATH**/ ?>