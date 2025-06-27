
<title> ABC Lense </title>
<?php $__env->startSection('content'); ?>

    <section id="project">
        <div class="container">
            <div class="row">  
                <form action="" method="post" enctype= multipart/form-data>
                    <div class="form-group">
                        <div class="display-4 mb-4"> Create Project </div>
                        <input type='file' class="form-control">
                        <input type='submit' class="btn btn-primary mt-4" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abcLense\resources\views/create.blade.php ENDPATH**/ ?>