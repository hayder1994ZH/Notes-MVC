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
                    <div class="col-lg-8 col-sm-8" style="margin-left: 12%;margin-top: 13%;">
                        <!-- Start card -->
                        <div class="mof-card rounded overflow-hidden mb-8" style="height: 200%;">
                            <!-- img & title section -->
                            <div class="card-img position-relative">
                                <?php if($note->image): ?>
                                    <img src="<?php echo e($note->imagePath); ?>" style="height:23rem;border-radius: 30px;" alt="">
                                <?php else: ?>
                                    <img src="<?php echo e(asset('notes-img/img.jpg')); ?>"  style="height:23rem;border-radius: 30px;" alt="">
                                <?php endif; ?>
                                <div class="card-title position-absolute left-0 px-2 py-3 text-white font-weight-bold">
                                    <h2>
                                        <?php echo e($note->title); ?>

                                    </h2>
                                </div>
                            </div>
                            <!-- end img & title section -->
                            <!-- content section -->
                            <div class="card-content px-2 py-3 bg-white rounded-lg" style="height: 25%;">
                                <span class = "card-type d-inline-block p-1 mb-2 rounded type-head text-white" style="height: 3rem;">
                                    <?php echo e($note->type); ?>

                                </span>
                                <h4 class="mb-0">
                                    <?php echo e($note->content); ?>

                                </h4>
                            </div>
                            <!-- end content section -->
                        </div>
                        <!-- End card -->
                    </div>
                
            </div>
        </div>
    </section>
</body>
</html><?php /**PATH E:\GitHub-Projects\Arrow\resources\views/show.blade.php ENDPATH**/ ?>