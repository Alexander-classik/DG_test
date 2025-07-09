<?php $__env->startSection('content'); ?>
    <br>
    <form method="get" action="<?php echo e(route('search')); ?>">
        <div class="form-row">
            <div class="input-group mb-10">
                <input type="text" class="form-control" id="s" name="s" placeholder="Поиск...">
                <button type="submit" class="btn btn-primary" aria-pressed="false">
                    Искать!
                </button>
            </div>
        </div>
    </form>
    <br>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
        <tr>
            <th scope="col">№</th>
            <th scope="col">Наименование</th>
            <th scope="col">Тип детали</th>
            <th scope="col">Цена</th>
            <th scope="col">Количество</th>
        </tr>
        </thead>
        <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $drivers->sortByDesc('id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <th scope="row"><?php echo e($row->id); ?></th>
                <td><a href="/drivers/show/<?php echo e($row->id); ?>"><?php echo e($row->name); ?></a></td>
                <td><p class="card-text"><?php echo e($row->type_driver_id); ?></p></td>
                <td><p class="card-text"><?php echo e($row->price); ?></p></td>
                <td><p class="card-text"><?php echo e($row->number); ?></p></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p>Пока что здесь ничего нет.</p>
        <?php endif; ?>
        </tbody>
    </table>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\car-driver\resources\views/drivers/allnews.blade.php ENDPATH**/ ?>
