<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <title>Notes</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body class="body-public-notes">
<!-- Button trigger modal -->
<button type="button" style="display: none" class="btn btn-primary" id="button" data-toggle="modal" data-target="#exampleModalCenter"></button>
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="margin-top: -5rem;">
      <div class="modal-content">
        <div class="modal-header">
          
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Go To The Dashboard To Create New Note
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <a href="<?php echo e(route('notes.index')); ?>" class="btn btn-primary ">Go To The Dashboard</a>
        </div>
      </div>
    </div>
  </div>
  <?php if(!current($notes)): ?>
    <script>
        document.getElementById('button').click()
    </script>
  <?php endif; ?>



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
                    <!-- Modal to generate url-->
                    <div class="modal fade" id="UrlModalCenter<?php echo e($note->id); ?>" tabindex="-1" role="dialog" aria-labelledby="UrlModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document" style="margin-top: -5rem;">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="UrlModalLongTitle">Note Url</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body"  style="height: 10rem;">
                                <?php echo e(Request::url(). "/note/$note->id"); ?>

                            </div>
                            </div>
                        </div>
                    </div>
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
                                <button type="button"class="btn btn-success" style="float: right;height: 2rem;" data-toggle="modal" data-target="#UrlModalCenter<?php echo e($note->id); ?>">Url</button>
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
</html><?php /**PATH E:\GitHub-Projects\Arrow\resources\views/home.blade.php ENDPATH**/ ?>