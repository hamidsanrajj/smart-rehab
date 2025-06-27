
<title> ABC Lense </title>
<?php $__env->startSection('content'); ?>

    <section id="project">
        <div class="container">
            <div class="row">  

                                   
                <form action="<?php echo e(url('/')); ?>/create-project" method="post" enctype= multipart/form-data>
                 <?php echo csrf_field(); ?>   
                    <div class="form-group">
                        <div class="display-4 mb-4"> Create Project </div>
                        <input type='file' name="image" class="form-control" required>


                            
    


                        <input type="text" class="d-none" value="<?php echo e(Auth::user()->id); ?>" name="user_id">
                        <input type="text" class="d-none" value="<?php echo e(Auth::user()->name); ?>" name="name">
                        <input type='submit' name="submit" class="btn btn-primary mt-4" value="Upload">
                    </div>
                </form>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abcLense\resources\views/create_project.blade.php ENDPATH**/ ?>