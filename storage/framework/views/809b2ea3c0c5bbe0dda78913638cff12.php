<?php $__env->startSection('content'); ?>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
        <tr>
            <th scope="col">Наименование</th>
            <th scope="col">Текст</th>
        </tr>
        </thead>
        <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $news->sortByDesc('id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><p class="card-text"><?php echo e($row->name); ?></p></td>
                <td><p class="card-text"><?php echo e($row->description); ?></p></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p>Пока что здесь ничего нет.</p>
        <?php endif; ?>
        </tbody>
    </table>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\dg\resources\views/main/allnews.blade.php ENDPATH**/ ?>