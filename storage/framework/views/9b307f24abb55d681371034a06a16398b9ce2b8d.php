<?php $__env->startSection('title'); ?>
    Contact Page
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header text-center bg-success">Series Program</div>
                        <div class="card-body">
                            <form action="<?php echo e(route('make-series')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="row mb-3">
                                    <label class="col-md-3">Starting Number</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="starting_number"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Ending Number</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="ending_number"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Result</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control"> <?php echo e(session('result')); ?></textarea>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" value="Make Result"/>
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

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel\day-13\resources\views/contact.blade.php ENDPATH**/ ?>