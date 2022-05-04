

<?php $__env->startSection('content'); ?>
<div class=" dash">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('notes.create')); ?>" title="Create a product"> <i class="fas fa-plus-circle"></i>
                   add new note </a>
            </div>
        </div>
    </div>
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p></p>
        </div>
    <?php endif; ?>
    <br>
    <br>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col" width="2%">#</th>
            <th scope="col" width="10%">Title</th>
            <th scope="col" width="10%">Content</th>
            <th scope="col" width="10%">Type</th>
            <th scope="col" width="10%">Image</th>
            <th scope="col" width="10%">Action</th>
        </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($note->id); ?></th>
                <td class="td"><?php echo e($note->title); ?></td>
                <td><?php echo e($note->content); ?></td>
                <td><?php echo e($note->type); ?></td>
                <td>
                    <img src="<?php echo e($note->imagePath); ?>" width="100" height="100" alt="">
                    
                </td >
                <td >
                    <div class="d-flex td" style="margin-top: 10%;"> 
                        <a href="<?php echo e(route('notes.show', $note)); ?>" style="margin-right: 3%;" class="btn btn-success">
                            <i class="fas fa-edit  fa-lg" ></i>
                        </a>
                        <form method="POST" action="<?php echo e(route('notes.destroy', $note->id)); ?>">
                            <?php echo csrf_field(); ?>
                            <input name="_method" type="hidden" value="DELETE">
                            <button type="submit" class="btn btn-danger delete" title='Delete'>Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <div class="d-flex">
        <?php echo $notes->links(); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\GitHub-Projects\Arrow\resources\views/notes/index.blade.php ENDPATH**/ ?>