
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
                        <thead>
                            <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Description</th>
                            <th scope="col">Budget</th>
                            <th scope="col">Detail</th>
                            <th scope="col">Destroy</th>
                            </tr>
                        </thead>
                        <tbody>

                        
                        <?php if(isset($rs)): ?>
                        <?php if(count($rs)>0): ?>

                        
                        <?php $__currentLoopData = $rs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                            <td> <?php echo e($rse->name); ?> </td>
                            <td> <?php echo e($rse->email); ?> </td>
                            <td> <?php echo e(strlen($rse->job_description)); ?> words </td>
                            <td> <?php echo e($rse->budget); ?> </td>
                            <td> 
                            
                                <form action="<?php echo e(url('/')); ?>/notification-detail" method="get">  
                                    <input class="d-none" type="text" name="id" value="<?php echo e($rse->id); ?>">  
                                    <input class="btn btn-primary" type="submit" name="submit" value="View"> 
                                </form>
                            </td>
                            <td>
                                <form action="<?php echo e(url('/')); ?>/notification-delete" method="get">  
                                    <input class="d-none" type="text" name="id"  value="<?php echo e($rse->id); ?>">  
                                    <input class="btn btn-danger" type="submit" name="submit" value="Delete"> 
                                </form>  

                            </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                                
                        <?php endif; ?>
                        <?php endif; ?>
                        

                        </tbody>
                    </table>


                        

                </div>
            </div>
        </section>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abcLense\resources\views/notification.blade.php ENDPATH**/ ?>