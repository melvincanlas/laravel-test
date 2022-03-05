<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>" />



    </head>
    <body class="antialiased">
        <div id="app">
            <Home />
        </div>

        <script src="<?php echo e(asset('js/app.js')); ?>"></script>
        <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"> </script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\spotless\resources\views/welcome.blade.php ENDPATH**/ ?>