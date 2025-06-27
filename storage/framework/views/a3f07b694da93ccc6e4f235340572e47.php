
<title> ABC Lense </title>
<?php $__env->startSection('content'); ?>

    <section id="project">
        <div class="container">
            <div class="row">
                <div class="display-4 mb-4"> Hire </div>

                <div class="col-md-5"> 
                    <form action="<?php echo e(url('/')); ?>/hire-photographer" method="post" enctype= multipart/form-data>
                    <?php echo csrf_field(); ?>
                                
                        <div class="form-group mt-4">

                        <input class="form-control d-none" type="text" name="name" value="<?php echo e(Auth::user()->name); ?>"  readonly>
                        </div>
                        <div class="form-group mt-4">
                           
                            <input class="form-control d-none" type="text" name="email" value="<?php echo e(Auth::user()->email); ?>"  readonly>
                        </div>
                        <div class="form-group mt-4">
                            <label> Job Description </label>
                            <textarea rows="4" col="4" name="job_description" class="form-control"></textarea>
                        </div>
                        <div class="form-group mt-4">
                            <label> Budget </label>
                            <input class="form-control" type="text" name="budget">
                        </div>
                        <div class="form-group mt-4">
                            <input class="form-control" type="submit">
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abcLense\resources\views/hire.blade.php ENDPATH**/ ?>