<?php $__env->startSection('title'); ?>
    Home Page
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 py-3">
                    <div class="card h-100">
                        <img src="<?php echo e(asset('/')); ?>img/<?php echo e($blog['image']); ?>" alt="" class="card-img-top"/>
                        <div class="card-body">

                            <h4><?php echo e($blog['title']); ?></h4>
                            <p><?php echo e($blog['description']); ?></p>
                            <a href="<?php echo e(route('detail', ['id'=> $blog['id']])); ?>" class="btn btn-outline-success">Read More</a>
                        </div>
                    </div>

                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel\day-13\resources\views/home.blade.php ENDPATH**/ ?>