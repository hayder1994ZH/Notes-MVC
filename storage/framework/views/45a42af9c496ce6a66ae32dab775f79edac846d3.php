<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <title>Notes</title>
</head>
<body class="body-public-notes">
    <section class = "py-5">
        <?php if(auth()->guard()->check()): ?>
        <div class="row" style="float: right; margin-right:1rem; margin-top:-1rem ">
            <a href="<?php echo e(route('notes.index')); ?>" class="btn btn-primary ">Go To The Dashboard</a>
            <br>
        </div>
        <?php else: ?>
        <div class="row" style="float: right; margin-right:1rem; margin-top:-1rem ">
            <a href="<?php echo e(route('login')); ?>" class="btn btn-primary ">Log In</a>
            <br>
        </div>
        <?php endif; ?>
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-sm-6">
                        <!-- Start card -->
                        <div class="mof-card rounded overflow-hidden mb-3">
                            <!-- img & title section -->
                            <div class="card-img position-relative">
                                <?php if($note->image): ?>
                                    <img src="<?php echo e($note->imagePath); ?>" alt="">
                                <?php else: ?>
                                    <img src="<?php echo e(asset('notes-img/img.jpg')); ?>" alt="">
                                <?php endif; ?>
                                <div class="card-title position-absolute left-0 px-2 py-3 text-white font-weight-bold">
                                    <h5>
                                        <?php echo e($note->title); ?>

                                    </h5>
                                </div>
                            </div>
                            <!-- end img & title section -->
                            <!-- content section -->
                            <div class="card-content px-2 py-3 bg-white rounded-lg">
                                <span class = "card-type d-inline-block p-1 mb-2 rounded text-white">
                                    <?php echo e($note->type); ?>

                                </span>
                                <p class="mb-0">
                                    <?php echo e($note->content); ?>

                                </p>
                            </div>
                            <!-- end content section -->
                        </div>
                        <!-- End card -->
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </div>
        </div>
    </section>
</body>
</html><?php /**PATH E:\GitHub-Projects\Arrow\resources\views/notes-public.blade.php ENDPATH**/ ?>