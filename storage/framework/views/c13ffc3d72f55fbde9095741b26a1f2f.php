<?php $__env->startSection('content'); ?>
    <div class="container py-4">
        <div class="row justify-content-md-center">
            <div class="col-md-8 col-md-offset-2">
                <div class="card mb-3">
                    <div class="card-header">Добавить автомобиль</div>

                    <div class="card-body">
                        <form method="POST" action="/main" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>


                            <div class="form-group mb-3">
                                <label for="title">Название:</label>
                                <input type="text" class="form-control" id="name" name="name"
                                       value="<?php echo e(old('name')); ?>" required>
                            </div>

                            <label for="mark_id">Выберите марку:</label>
                            <select id="mark-dropdown" class="form-control" name="mark_id">
                                <option value="">-- Макрка --</option>
                                <?php $__currentLoopData = $mark; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($m->id); ?>">
                                        <?php echo e($m->name); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>

                            <div class="form-group mb-3">
                                <label for="body">Описание:</label>
                                <textarea name="description" id="description" class="form-control"
                                          rows="8" required><?php echo e(old('description')); ?></textarea>
                            </div>

                            <!-- фото-->
                            <div class="form-group bmd-form-group is-focused file-input">
                                <label for="photo">Выберите фотографию:</label>
                                <input type="file" name="img" id="img" class="form-control-file">
                            </div>

                            <div class="form-group mb-3">
                                <label for="title">Год:</label>
                                <input type="text" class="form-control" id="year" name="year"
                                       value="<?php echo e(old('year')); ?>" required>
                            </div>

                            <label for="driver_id">Выберите деталь:</label>
                            <select id="driver-dropdown" class="form-control" name="driver_id">
                                <option value="">-- Деталь --</option>
                                <?php $__currentLoopData = $driver; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($d->id); ?>">
                                        <?php echo e($d->name); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>

                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Опубликовать</button>
                            </div>

                            <?php if(count($errors)): ?>
                                <ul class="alert alert-danger">
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            <?php endif; ?>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\car-driver\resources\views/main/add.blade.php ENDPATH**/ ?>
