
<title> ABC Lense </title>
<?php $__env->startSection('content'); ?>

    <section id="project">
        <div class="container">
            <div class="row mb-4">
                <div class="display-4 mb-4"> Reviews </div>

                <?php if(isset($rs2)): ?>
                <?php if(count($rs2)>0): ?>

                <?php $__currentLoopData = $rs2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   
                     <div class="row">
                        <div class="col-md-1">
                            <img src="<?php echo e(asset('assets/img/avatar.png')); ?>" width="80" height="80">
                            <div class=""> <?php echo e($rse->name); ?> </div>
                        </div>
                        <div class="col-md-11 p-4 bg-light mb-4">
                           <div class="mb-2"> <?php echo e($rse->review); ?>  </div>
                        </div>
                     </div>
                           
                   
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                        
                <?php endif; ?>
                <?php endif; ?> 

                
                

            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abcLense\resources\views/review.blade.php ENDPATH**/ ?>