<?php $__env->startSection('content'); ?>
    <style>
        .header-h1 h1 {
            position: relative;
            padding-bottom: .5rem;
            font-size: 1.5rem;
            text-transform: uppercase;
            text-align: center;
            color: #00838f;
        }
        .header-h1 h1::before {
            content: "";
            position: absolute;
            border-bottom: 2px solid #00838f;
            bottom: .25rem;
            left: 50%;
            width: 30%;
            transform: translateX(-50%);
        }
        .header-h1 h1::after {
            content: "";
            position: absolute;
            border-bottom: 2px solid #00838f;
            bottom: 0;
            left: 50%;
            width: 15%;
            transform: translateX(-50%);
        }
        p {
            margin: 0;
            text-indent: 3ch;
        }

        p.pilcrow {
            text-indent: 0;
            display: inline;
        }
        p.pilcrow + p.pilcrow::before {
            content: " ¶ ";
        }
    </style>
    <body>
    <div class="container py-4">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <div class="header-h1">
                    <h1 class="h2"><?php echo e($drivers->name); ?></h1>

                    <h1 class="h2"><?php echo e($drivers->description); ?></h1>
                    <h1 class="h2"><?php echo e($drivers->price . ' руб.'); ?></h1>
                    <h1 class="h2"><?php echo e($drivers->number . ' шт.'); ?></h1>
                    <p class="card-text">Картинка:</p>
                    <img src="<?php echo e(asset('storage/'.$drivers->img)); ?>" class="" style="max-width: 100%; height: auto; margin: 20px 0;">
                </div>
                <div class="card-body">
                    <a class="btn btn-outline-danger" href="/drivers/show/<?php echo e($drivers->id); ?>/del">Удалить</a>
                </div>
            </div>
        </div>
    </div>
    </body>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\car-driver\resources\views/drivers/show.blade.php ENDPATH**/ ?>