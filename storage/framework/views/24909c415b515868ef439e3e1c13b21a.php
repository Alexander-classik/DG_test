<?php $__env->startSection('content'); ?>
    <style>
        p {
            margin: 0;
            font-size: 30px;
            text-indent: 3ch;
        }

        p.pilcrow {
            text-indent: 0;
            display: inline;
        }
        p.pilcrow + p.pilcrow::before {
            content: " ¶ ";
        }
        .grad {
            font-family: 'Rubik One', sans-serif;
            font-size: 45px;
            text-transform: uppercase;
            background: linear-gradient(45deg, #0B2349 33%, #0D61BC 66%, #8AA9D6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            color: #0B2349;
            display: table;
            margin: 20px auto;
        }
    </style>
    <div class="container my-4">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php $__empty_1 = true; $__currentLoopData = $car->sortByDesc('id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="<?php echo e(asset('storage/' . $c->img)); ?>" class="card-img-top img-fluid aspect-ratio-square <?php if($c->imageIsSmaller()): ?> img-cover <?php endif; ?>" alt="">
                        <div class="row row-cols-1">
                            <h class="card-text grad"><?php echo e($c->name); ?></h>
                            <p class="card-text"><?php echo e($c->description); ?></p>
                            <button href="" type="button" class="btn btn-outline-info">Info</button>
                        </div>

                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p>Пока что здесь ничего нет.</p>
            <?php endif; ?>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\car-driver\resources\views/main/allnews.blade.php ENDPATH**/ ?>
