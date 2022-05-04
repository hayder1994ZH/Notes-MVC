

<?php $__env->startSection('content'); ?>
<div class="container container-form">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="text-align: center;">Add New Note</h2>
            </div>
        </div>
    </div>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <strong>Error!</strong> 
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <form action="<?php echo e(route('notes.store')); ?>" method="POST"  enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <div class="row">
            <div class="row" style="margin-left: 17%;line-height: 3rem;">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Content:</strong>
                    <textarea class="form-control" style="height:50px" name="content"
                        placeholder="content"></textarea>
                </div>
            </div>
            <div class="col-xs-9 col-sm-9 col-md-9" >
                <div class="form-group">
                    <strong>Type:</strong>
                    <select name="type" style="width: 91%;border-radius: 20px;height:50px"  class="form-select"aria-label="Default select example">
                        <option value="normal">normal</option>
                        <option value="urgent">urgent</option>
                        <option value="no date">no date</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" accept=".jpg,.jpeg,.png">
            </div>

            <div class="col-xs-8 col-sm-8 col-md-8 text-center">
                <button type="submit" class="btn btn-primary submit-form">Submit</button>
            </div>
        </div>

    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\GitHub-Projects\Arrow\resources\views/notes/create.blade.php ENDPATH**/ ?>