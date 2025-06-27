
<title> ABC Lense </title>
<?php $__env->startSection('content'); ?>

    <section id="project">
        <div class="container">
            <div class="row">
                <div class="display-4 mb-4"> Edit Profile </div>

                <div class="col-md-5"> 
                    <form action="<?php echo e(url('/')); ?>/edit-profile" method="post" enctype= multipart/form-data>
                    <?php echo csrf_field(); ?>
                                
                        <div class="form-group">
                            <label> Status </label>
                            <select class="form-control" name="status" required>
                                <option disabled selected value=""> Select </option>
                                <option>Photographer</option>
                                <option>Client</option>
                            </select>
                        </div>
                        <input class="form-control d-none" name="user_id" type="text" value="<?php echo e(Auth::user()->id); ?>" readonly>
                        <input class="form-control d-none" name="email" type="text" value="<?php echo e(Auth::user()->email); ?>" readonly>                                            

                        <div class="form-group mt-4">
                            <label> Name </label>
                            <input class="form-control" type="text" name="name" value="<?php echo e(Auth::user()->name); ?>"  readonly>
                        </div>
                        <div class="form-group mt-4">
                            <label> City </label>
                            <input class="form-control" type="text" name="city" required>
                        </div>
                        <div class="form-group mt-4">
                            <label> Country </label>
                            <input class="form-control" type="text" name="country" required>
                        </div>
                        <div class="form-group mt-4">
                            <label> Phone Number </label>
                            <input class="form-control" type="number" name="phone" required>
                        </div>
                        <div class="form-group mt-4 mb-4">
                            <label> Profile Photo </label>
                            <input class="form-control" type="file" name="image">
                            <label class="text-dager" style="font-size: 15px; color: red; font-weight: normal;"> Preferred size 400x400 </label>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abcLense\resources\views/edit_profile.blade.php ENDPATH**/ ?>