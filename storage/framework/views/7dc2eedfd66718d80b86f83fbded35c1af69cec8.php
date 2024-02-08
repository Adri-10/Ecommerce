<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>css/bootstrap.css">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">My Laravel</a>
        <ul class="navbar-nav">
            <li class="nav-item"><a href="<?php echo e(route('home')); ?>" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="<?php echo e(route('about')); ?>" class="nav-link">About</a></li>
            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog Category</a>
                <ul class="dropdown-menu">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="<?php echo e(route('category',['id'=>$category['id']])); ?>" class="dropdown-item"><?php echo e($category['name']); ?></a> </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </li>
            <li class="nav-item"><a href="<?php echo e(route('contact')); ?>" class="nav-link">Contact</a></li>
        </ul>
    </div>

</nav>

<?php echo $__env->yieldContent('body'); ?>


<script src="<?php echo e(asset('/')); ?>js/bootstrap.bundle.js"></script>


</body>
</html>
<?php /**PATH E:\Adri Laravel\new\day-13\day-13\resources\views/master.blade.php ENDPATH**/ ?>