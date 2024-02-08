<?php $__env->startSection('title'); ?>
    Blog Detail Page
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <section class="py-5 bg-success">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center"><?php echo e($blog['title']); ?></h1>
                    <img src="<?php echo e(asset('/')); ?>img/<?php echo e($blog['image']); ?>" alt="" class=""/>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel\day-13\resources\views/detail.blade.php ENDPATH**/ ?>