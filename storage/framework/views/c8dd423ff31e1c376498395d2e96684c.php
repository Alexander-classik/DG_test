<?php $__env->startSection('content'); ?>
    <div class="container py-4">
        <div class="row justify-content-md-center">
            <div class="col-md-8 col-md-offset-2">
                <div class="card mb-3">
                    <div class="card-header">Добавить деталь</div>

                    <div class="card-body">
                        <form method="POST" action="/drivers" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>


                            <div class="form-group mb-3">
                                <label for="title">Название:</label>
                                <input type="text" class="form-control" id="name" name="name"
                                       value="<?php echo e(old('name')); ?>" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="body">Описание:</label>
                                <textarea name="description" id="description" class="form-control"
                                          rows="8" required><?php echo e(old('description')); ?></textarea>
                            </div>

                            <label for="type_driver_id">Выберите тип детали:</label>
                            <select id="type_driver-dropdown" class="form-control" name="type_driver_id">
                                <option value="">-- Типы деталей --</option>
                                <?php $__currentLoopData = $type_driver; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $td): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($td->id); ?>">
                                        <?php echo e($td->name); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>

                            <!-- фото-->
                            <div class="form-group bmd-form-group is-focused file-input">
                                <label for="photo">Выберите фотографию:</label>
                                <input type="file" name="img" id="img" class="form-control-file">
                            </div>

                            <div class="form-group mb-3">
                                <label for="title">Цена:</label>
                                <input type="text" class="form-control" id="price" name="price"
                                       value="<?php echo e(old('price')); ?>" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="title">Количество:</label>
                                <input type="text" class="form-control" id="number" name="number"
                                       value="<?php echo e(old('number')); ?>" required>
                            </div>

                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Добавить</button>
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

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\car-driver\resources\views/drivers/add.blade.php ENDPATH**/ ?>