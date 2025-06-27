<title> ABC Lense </title>
<?php $__env->startSection('content'); ?>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('You are logged in!')); ?>

                </div>                
            </div>
        </div>
    </div>
</div> -->
        <section id="dashboard">
            <div class="container-fluid-less">
                <div class="row dashboard">
                        <div class="row header-dashbaord">
                            <div class="col-md-1"></div>
                            <div class="col-md-8">
                                <div class="search">
                                    <form action="<?php echo e(url('/')); ?>/search" method="get">
                                        <?php echo csrf_field(); ?>
                                        <input class="form-control" name="keyword" placeholder="Search">
                                        <input class="form-control d-none" type="submit">
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="upload-project">
                                    <a href="<?php echo e(route('create')); ?>" class="btn btn-primary float-end"> Create Project </a>
                                </div>
                            </div>
                
                        </div>
                        <div class="row photo-dashbaord">
                            

                        
                                <?php if(isset($rs)): ?>
                                <?php if(count($rs)>0): ?>
                                
                                    <?php $__currentLoopData = $rs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-3 p-4">

                                        <a href="<?php echo e(asset('assets/projects/' . $rse->image_name)); ?>"><img src="<?php echo e(asset('assets/projects/' . $rse->image_name)); ?>" title="<?php echo e($rse->image_name); ?>" class="p-1 border m-2" width="300" height="300"></a>
                                        <div> <?php echo e($rse->name); ?> | <?php echo e($rse->user_code); ?> </div>
                                        <!-- <div class="row likes-views">
                                            <div class="col-md-6">
                                                <i class="fa fa-heart"></i> 10
                                            </div>
                                            <div class="col-md-6">
                                                <i class="fa fa-eye"></i> 10
                                            </div>
                                        </div> -->
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php else: ?>
                                    <div class="display-4 font-res">No Results</div>
                                <?php endif; ?>
                                <?php endif; ?>

                                    
                                
                          
                        </div>
                </div>
            </div>
        </section>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abcLense\resources\views/home.blade.php ENDPATH**/ ?>