
<title> ABC Lense </title>
<?php $__env->startSection('content'); ?>

        <section id="profile">
            <div class="container-fluid-less">
                <div class="row">
                    <div class="col-md-3 sec-profile">
                        <div class="row profile">
                            
                            <div class="col-md-8">

                                <?php if(isset($rs2)): ?>
                                <?php if(count($rs2)>0): ?>

                                <?php $__currentLoopData = $rs2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($loop->last): ?>
                                    <a href="<?php echo e(asset('assets/profiles/' . $rse->image_name)); ?>"><img src="<?php echo e(asset('assets/profiles/' . $rse->image_name)); ?>" title="<?php echo e($rse->image_name); ?>" class="p-1 border m-2" width="300" height="300"></a>
                                    <?php endif; ?>    
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <img src="assets/img/avatar.png">
                                <?php endif; ?>
                                <?php endif; ?>

                                
                            </div>
                            
                            
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    Status: 
                                </div>
                                <div class="col-md-6">
                                  
                                <?php if(isset($rs2)): ?>
                                <?php if(count($rs2)>0): ?>

                
                                <?php $__currentLoopData = $rs2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($loop->last): ?>
                                        <?php echo e($rse->status); ?>

                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                        N/A
                                <?php endif; ?>
                                <?php endif; ?>
                                
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    ID: 
                                </div>
                                <div class="col-md-6">
                                    <?php if(isset($rs2)): ?>
                                    <?php if(count($rs2)>0): ?>

                    
                                    <?php $__currentLoopData = $rs2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($loop->last): ?>
                                            <?php echo e($rse->user_code); ?>

                                        <?php endif; ?>  
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                            N/A
                                    <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    Name: 
                                </div>
                                <div class="col-md-6">
                                    <?php if(isset($rs2)): ?>
                                    <?php if(count($rs2)>0): ?>
                    
                                    <?php $__currentLoopData = $rs2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($loop->last): ?>
                                            <?php echo e($rse->name); ?>

                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                            N/A
                                    <?php endif; ?>
                                    <?php endif; ?> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- <a href="<?php echo e(route('review')); ?>">Reviews</a>  -->
                                </div>
                                <div class="col-md-6">
                                    <!-- <?php if(isset($rs4)): ?>
                                    <?php if(count($rs4)>0): ?>

                                     <?php echo e(count($rs4)); ?>


                                    <?php else: ?>
                                            N/A
                                    <?php endif; ?>
                                    <?php endif; ?>  -->
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-md-6">
                                    Images: 
                                </div>
                                <div class="col-md-6">
                                    N/A
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    Rating: 
                                </div>
                                <div class="col-md-6">
                                    N/A 
                                </div>
                            </div> -->

                                    
                                
                                
                            <div class="row">
                            <div class="edit-profile mt-4 mb-4">

                            <?php if(isset($rs2)): ?>     
                            <?php if(count($rs2)>0): ?>
            
                            
                            <?php else: ?>
                            
                                    <form action="<?php echo e(route('edit_profile')); ?>" method="get">
                                        <input type="number" class="d-none" value="<?php echo e(Auth::user()->id); ?>" name="id">
                                        <input type="submit" name="submit" value="Edit">
                                    </form>
                                
                            <?php endif; ?>
                            <?php endif; ?>                                     

                            </div>
                            </div>   
                           
                                        
                                
                                        
                                    
                            
                           
                            <hr>
                            <div class="row">
                                <div class="col-md-12 hire">
                                    
                                    <!-- <?php if(isset($rs2)): ?>     
                                    <?php if(count($rs2)>0): ?>
                    
                                    <?php $__currentLoopData = $rs2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($loop->last): ?>
                                            <?php if($rse->status =='Photographer'): ?>  
                                                <a href="<?php echo e(route('hire')); ?>" class="btn btn-success form-control"> Hire </a>
                                            <?php else: ?>
                                                
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                            
                                    <?php endif; ?>
                                    <?php endif; ?>  -->

                                    
                                    <a href="<?php echo e(route('review')); ?>" class="btn btn-warning form-control mt-2"> Reviews </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <h4 class="m-4 p-4"> Personal Information </h4>
                            <p></p>
                        </div>
                        <!-- <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-3">
                                Name: 
                            </div>
                            <div class="col-md-6">
                                <?php if(isset($rs2)): ?>
                                <?php if(count($rs2)>0): ?>
                
                                <?php $__currentLoopData = $rs2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($loop->last): ?>
                                        <?php echo e($rse->name); ?>

                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                        N/A
                                <?php endif; ?>
                                <?php endif; ?> 
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-3">
                                Email: 
                            </div>
                            <div class="col-md-6">
                                <?php if(isset($rs2)): ?>
                                <?php if(count($rs2)>0): ?>
                
                                <?php $__currentLoopData = $rs2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($loop->last): ?>
                                        <?php echo e($rse->email); ?>

                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                        N/A
                                <?php endif; ?>
                                <?php endif; ?> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-3">
                                City: 
                            </div>
                            <div class="col-md-6">
                                <?php if(isset($rs2)): ?>
                                <?php if(count($rs2)>0): ?>
                
                                <?php $__currentLoopData = $rs2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($loop->last): ?>
                                        <?php echo e($rse->city); ?>

                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                        N/A
                                <?php endif; ?>
                                <?php endif; ?> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-3">
                                Country: 
                            </div>
                            <div class="col-md-6">
                                <?php if(isset($rs2)): ?>
                                <?php if(count($rs2)>0): ?>
                
                                <?php $__currentLoopData = $rs2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($loop->last): ?>
                                        <?php echo e($rse->country); ?>

                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                        N/A
                                <?php endif; ?>
                                <?php endif; ?> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-3">
                                Phone: 
                            </div>
                            <div class="col-md-6">
                                <?php if(isset($rs2)): ?>
                                <?php if(count($rs2)>0): ?>
                
                                <?php $__currentLoopData = $rs2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($loop->last): ?>
                                        <?php echo e($rse->phone); ?>

                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                        N/A
                                <?php endif; ?>
                                <?php endif; ?> 
                            </div>
                        </div>
                        <div class="row">
                            <!-- <h4 class="m-4 p-4"> Description </h4> -->
                        </div> 
                    </div> 
                </div>
            </div>
        </section>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abcLense\resources\views/profile.blade.php ENDPATH**/ ?>