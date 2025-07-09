<?php $__env->startSection('content'); ?>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
        <tr>
            <th scope="col">№</th>
            <th scope="col">Наименование</th>
        </tr>
        </thead>
        <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $type_driver->sortByDesc('id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <th scope="row"><?php echo e($row->id); ?></th>
                <td><p class="card-text"><?php echo e($row->name); ?></p></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p>Пока что здесь ничего нет.</p>
        <?php endif; ?>
        </tbody>
    </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\car-driver\resources\views/td/allnews.blade.php ENDPATH**/ ?>
