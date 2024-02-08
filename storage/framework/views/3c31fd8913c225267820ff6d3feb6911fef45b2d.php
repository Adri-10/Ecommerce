<?php $__env->startSection('title'); ?>
    About Page
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
<section class="py-5 bg-success">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">Full Name Form</div>
                    <div class="card-body">
                    <form action="<?php echo e(route('full-name')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row mb-3">
                            <label class="col-md-3">First Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="first_name"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3">Last Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="last_name"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3">Full Name</label>
                            <div class="col-md-9">
                                <input type="text" value="<?php echo e(session('message')); ?>" class="form-control"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="Make Full Name"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Adri Laravel\new\day-13\day-13\resources\views/about.blade.php ENDPATH**/ ?>