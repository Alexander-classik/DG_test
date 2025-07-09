<?php $__env->startSection('content'); ?>
    <div class="container py-4">
        <div class="row justify-content-md-center">
            <div class="col-md-8 col-md-offset-2">
                <div class="card mb-3">
                    <div class="card-header">Добавить марку авто</div>

                    <div class="card-body">
                        <form method="POST" action="/mark" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>


                            <div class="form-group mb-3">
                                <label for="title">Название:</label>
                                <input type="text" class="form-control" id="name" name="name"
                                       value="<?php echo e(old('name')); ?>" required>
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

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\car-driver\resources\views/mark/add.blade.php ENDPATH**/ ?>