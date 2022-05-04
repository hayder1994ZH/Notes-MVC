<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/sidebar.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <?php if(Auth::check()): ?>
            <div id="mySidebar" class="sidebar">
                <div style="margin: auto">
                    <img src="<?php echo e(asset('image/notes-logo.png')); ?>" class="sidbar-logo"  alt="">
                </div>
                
                <a href="<?php echo e(route('home')); ?>"><i class="fa-solid fa-notes"></i>Website</a>
                <a href="<?php echo e(route('reports')); ?>"><i class="fa-solid fa-notes"></i>Reports</a>
                <a href="<?php echo e(route('notes.index')); ?>"><i class="fa-solid fa-notes"></i>Note</a>
                <a href="<?php echo e(route('logout')); ?>"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    <?php echo e(__('Logout')); ?>

                </a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                </form>
            </div>
        <?php endif; ?>
    
    <div id="main">
        <button class="openbtn" id="openbtn" onclick="openNav()">☰</button>  
    </div>
            <main class="py-4ere">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH E:\GitHub-Projects\Arrow\resources\views/layouts/app.blade.php ENDPATH**/ ?>