

<?php $__env->startSection('content'); ?>
<div class=" dash">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col" width="1%">#</th>
            <th scope="col" width="10%">Type</th>
            <th scope="col" width="10%">Normal</th>
            <th scope="col" width="10%">Urgent</th>
            <th scope="col" width="10%">No Date</th>
        </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($user['id']); ?></th>
                <th scope="row"><?php echo e($user['name']); ?></th>
                <th scope="row"><?php echo e($user['normal']); ?></th>
                <th scope="row"><?php echo e($user['urgent']); ?></th>
                <th scope="row"><?php echo e($user['nodate']); ?></th>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\GitHub-Projects\Arrow\resources\views/reports.blade.php ENDPATH**/ ?>