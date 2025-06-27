
<title> ABC Lense </title>
<?php $__env->startSection('content'); ?>

        <section id="dashboard" class="search-results">
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
                        <div class="row dashbaord-search">
                            

                                    <?php if(isset($rs)): ?>
                                    <?php if(count($rs)>0): ?>

                                    <div class="col-md-4">
                                    <?php $__currentLoopData = $rs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        
                                    
                                        <?php if($loop->last): ?>
                                            <a href="<?php echo e(asset('assets/profiles/' . $rse->image_name)); ?>"><img src="<?php echo e(asset('assets/profiles/' . $rse->image_name)); ?>" title="<?php echo e($rse->image_name); ?>" class="border" width="300" height="300"></a>
                                        <?php endif; ?>
                                    
                                          
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <?php else: ?>
                                        <img src="assets/img/avatar.png">
                                    <?php endif; ?>
                                    <?php endif; ?>
                                

                                    
                            
                                    <div class="col-md-6">
                                        
                                    <?php if(isset($rs)): ?>
                                    <?php if(count($rs)>0): ?>
                                        <?php $__currentLoopData = $rs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            
                                            
                                                <?php if($loop->last): ?>
                                                    <div> Name: <?php echo e($rse->name); ?> </div>
                                                    
                                                <?php endif; ?>
                                            
                                            
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        N/A
                                    <?php endif; ?>
                                    <?php endif; ?>


                                    <?php if(isset($rs)): ?>
                                    <?php if(count($rs)>0): ?>
                                        <?php $__currentLoopData = $rs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            
                                            
                                                <?php if($loop->last): ?>
                                                    <div> Email: <?php echo e($rse->email); ?> </div>
                                                    
                                                <?php endif; ?>
                                            
                                            
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        N/A
                                    <?php endif; ?>
                                    <?php endif; ?>


                                    

                                    <?php if(isset($rs)): ?>
                                    <?php if(count($rs)>0): ?>
                                        <?php $__currentLoopData = $rs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            
                                            
                                                <?php if($loop->last): ?>
                                                    <div> Phone: <?php echo e($rse->phone); ?> </div>
                                                    
                                                <?php endif; ?>
                                            
                                            
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        N/A
                                    <?php endif; ?>
                                    <?php endif; ?>



                                    <?php if(isset($rs)): ?>
                                    <?php if(count($rs)>0): ?>
                                        <?php $__currentLoopData = $rs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            
                                            
                                                <?php if($loop->last): ?>
                                                    <div> City: <?php echo e($rse->city); ?> </div>
                                                    
                                                <?php endif; ?>
                                            
                                            
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        N/A
                                    <?php endif; ?>
                                    <?php endif; ?>


                                    <?php if(isset($rs)): ?>
                                    <?php if(count($rs)>0): ?>
                                        <?php $__currentLoopData = $rs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            
                                            
                                                <?php if($loop->last): ?>
                                                    <div> Country: <?php echo e($rse->country); ?> </div>
                                                    
                                                <?php endif; ?>
                                            
                                            
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        N/A
                                    <?php endif; ?>
                                    <?php endif; ?>



                                    <?php if(isset($rs)): ?>
                                    <?php if(count($rs)>0): ?>
                                        <?php $__currentLoopData = $rs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            
                                            
                                                <?php if($loop->last): ?>
                                                    <div class="mt-4"> Status: <b><?php echo e($rse->status); ?></b> </div>
                                                <?php endif; ?>
                                            
                                            
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        N/A
                                    <?php endif; ?>
                                    <?php endif; ?>

                                                    
                                                    
                                                    
                                                    
                                                    
                                                    <!-- <div> Rating: </div> -->


                                    </div>
                                   




                                    <?php if(isset($rs)): ?>
                                    <?php if(count($rs)>0): ?>
                                    <div class="col-md-2">
                                        <?php $__currentLoopData = $rs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            
                                        <?php if($loop->last): ?>
                                            <?php if($rse->status =='Photographer'): ?>  
                                                <a href="<?php echo e(route('hire')); ?>" class="btn btn-success form-control"> Hire </a>

                                                <form action="<?php echo e(url('/')); ?>/reviews-dest" method="get">
                                                    <input class="d-none" name="dest_id" value="<?php echo e(Session::get('keyword')); ?>"> 
                                                    <input class="btn btn-warning form-control mt-2" type="submit" name="submit" value="Reviews"> 
                                                </form>
                                            <?php endif; ?>

                                            
                                    
                                        <?php endif; ?>    
                                            
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <?php else: ?>
                                        <a href="<?php echo e(route('review_dest')); ?>" class="btn btn-warning form-control mt-2"> Reviews </a>

                                    <?php endif; ?>
                                    <?php endif; ?> 



                                   
                                    <?php if(isset($rs)): ?>
                                    <?php if(count($rs2)>0): ?>
                                    <div class="col-md-2 mt-2">
                                        Reviews:  <?php echo e(count($rs2)); ?>

                                    <div>
                                    <?php else: ?>
                                    <div class="col-md-2 mt-2">
                                        Reviews: N/A
                                    <div>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                    


                                
                          
                            <!-- <div class="col-md-3">
                                <img src="assets/img/avatar.png">
                            </div>
                            <div class="col-md-3">
                                <img src="assets/img/avatar.png">
                            </div> -->
                            <div class="col-md-2">

                            </div>
                        </div>
                </div>
            </div>
        </section>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abcLense\resources\views/search_profile.blade.php ENDPATH**/ ?>