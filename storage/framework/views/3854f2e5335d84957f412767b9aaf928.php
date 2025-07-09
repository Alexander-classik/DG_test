<?php $__env->startSection('content'); ?>
    <style>
        .underline-one {
            color: #00bfff; /* Цвет обычной ссылки */
            position: relative;
            cursor: pointer;
            text-decoration: none; /* Убираем подчеркивание */
        }
        .underline-one:after {
            content: "";
            display: block;
            position: absolute;
            right: 0;
            bottom: -3px;
            width: 0;
            height: 2px; /* Высота линии */
            background-color: black; /* Цвет подчеркивания при исчезании линии*/
            transition: width 0.5s; /* Время эффекта */
        }

        .underline-one:hover:after {
            content: "";
            width: 100%;
            display: block;
            position: absolute;
            left: 0;
            bottom: -3px;
            height: 2px; /* Высота линии */
            background-color: red; /* Цвет подчеркивания при появлении линии*/
            transition: width 0.5s;  /* Время эффекта */
        }

        p {
            margin: 0;
            font-size: 30px;
            text-indent: 3ch;
        }

        .btn-custom {
            padding: 0.35rem 0.8rem !important;
            font-size: 0.9rem;
            width: auto;
            display: inline-block;
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
            background: linear-gradient(45deg, #d43934 33%, #e95353 66%, #ed969e 99%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            color: red;
            display: table;
            margin: 20px auto;
        }
        .custom-date {
            font-size: 0.85rem;
            color: #6c757d !important;
        }
    </style>
    <div class="container my-4">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php $__empty_1 = true; $__currentLoopData = $news->sortByDesc('id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col">
                    <div class="card h-100">
                        <div class="row row-cols-1">
                            <h class="card-text grad"><?php echo e($n->name); ?></h>
                            <?php
                                $text = $n->description;
                                if (preg_match('/^.*?[.!?]/us', $text, $matches)) {
                                    $firstSentence = $matches[0];
                                } elseif (preg_match('/^.*?\b/us', $text, $matches)) {
                                    $firstSentence = $matches[0] . '...';
                                } else {
                                    $firstSentence = $text;
                                }
                            ?>
                            <p class="card-text"><?php echo e($firstSentence); ?></p>
                            <p class="card-text custom-date"><?php echo e($n->date_public); ?></p>







                        </div>
                    </div>
                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p>Пока что здесь ничего нет.</p>
            <?php endif; ?>
        </div>
    </div>
    <div class="container my-4">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <a class="underline-one" href="/show-news">
                Все новости
            </a>
        </div>
    </div>
    <div class="container my-4">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <a class="underline-one" href="/feedback">
                Обратная связь
            </a>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\dg\resources\views/main/index.blade.php ENDPATH**/ ?>