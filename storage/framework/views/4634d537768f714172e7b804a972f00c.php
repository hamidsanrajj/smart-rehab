
<title> ABC Lense </title>
<?php $__env->startSection('content'); ?>

<style>
#notification
{
    margin: 100px;
}
</style>
        <section id="notification">
            <div class="container-fluid-less">
                <div class="row notification">
                    <div class="display-4 mb-4"> Notifications </div>
                    
                    <table class="table table-striped ">
                        

                        <h4> Client Information </h4>    

                        <?php if(isset($rs2)): ?>
                        <?php if(count($rs2)>0): ?>

                        
                        <?php $__currentLoopData = $rs2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                            <div>Name: <?php echo e($rse->name); ?> </div>
                            <div>Email: <?php echo e($rse->email); ?> </div>
                            <div>Job Description: <?php echo e($rse->job_description); ?> </div>
                            <div>Budget: <?php echo e($rse->budget); ?> </div>
                           
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                                N/A
                        <?php endif; ?>
                        <?php endif; ?>
                        

                        </tbody>
                    </table>


                        

                </div>
            </div>
        </section>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abcLense\resources\views/notification_detail.blade.php ENDPATH**/ ?>