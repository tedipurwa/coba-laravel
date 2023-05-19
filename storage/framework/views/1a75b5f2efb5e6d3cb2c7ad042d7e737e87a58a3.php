

<?php $__env->startSection('container'); ?>
    <h1>Halaman About</h1>

    <h3> <?php echo e($name); ?> </h3>
    <p> <?php echo e($email); ?> </p>
    <img src="img/gambar1.png" alt="<?php echo e($email); ?>" width="200px">

    <script src="js/script.js"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\coba-laravel\resources\views/about.blade.php ENDPATH**/ ?>