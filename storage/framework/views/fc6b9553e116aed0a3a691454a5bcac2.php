<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body class="font-sans antialiased">
    <div>

    </div>
    <div class="lg bg-gray-100 dark:bg-gray-900">
        <?php echo $__env->make('frontend.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Page Heading -->
        

        <!-- Page Content -->
        <main>
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
    <div>
        <?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

</body>

</html>
<?php /**PATH C:\Users\BANNN\Desktop\Balong-1\resources\views/frontend/layouts/app.blade.php ENDPATH**/ ?>