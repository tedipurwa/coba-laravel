<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e($title); ?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    
  </head>
  <body>

    
      <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    

      <div class="container-fluid mt-3">
          <?php echo $__env->yieldContent('container'); ?>
        
      </div>


      <script src="js/script.js"> </script>
    <script src="js/bootstrap.bundle.min.js"> </script>
  </body>
</html><?php /**PATH D:\laravel\coba-laravel\resources\views/layouts/main.blade.php ENDPATH**/ ?>