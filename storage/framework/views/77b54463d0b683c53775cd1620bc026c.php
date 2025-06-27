
<title> ABC Lense </title>
<?php $__env->startSection('content'); ?>

    <section id="project">
        <div class="container">
            <div class="row mb-4">
                <div class="display-4 mb-4"> Reviews </div>

                <!-- <?php if(isset($rs2)): ?>
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
                <?php endif; ?>  -->

                
                 
                    <form action="<?php echo e(url('/')); ?>/reviews" method="post" enctype= multipart/form-data>
                    <?php echo csrf_field(); ?>
                              
                    
                        <input class="form-control d-none" name="user_id" type="text" value="<?php echo e(Auth::user()->id); ?>" readonly>
                        <input class="form-control d-none" name="email" type="text" value="<?php echo e(Auth::user()->email); ?>" readonly>                                            
                        <input class="form-control d-none" name="dest_id" type="text" value="<?php echo e(Session::get('dest_id')); ?>" readonly>                                            

                        <input class="form-control d-none" type="text" name="name" value="<?php echo e(Auth::user()->name); ?>"  readonly>
                        
                        <div class="row">
                            <div class="form-group mt-4">
                                <label> Comment </label>
                                <textarea col="5" row="20" class="form-control" type="text" name="review" required></textarea>
                            </div>
                        
                        
                        <div class="col-md-2">
                            <div class='text-success fw-bold' id="msg"></div>
                            <div class="form-group mt-4">
                                <input class="form-control" id="submit" onClick="my_function();" type="submit">
                            </div>
                        </div>
                        
                        </div>
                    </form>
                

            </div>
        </div>
    </section>



<script>
    function my_function()
    {
        document.getElementById("msg").innerHTML = "Review Sent";
    }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abcLense\resources\views/review_all.blade.php ENDPATH**/ ?>