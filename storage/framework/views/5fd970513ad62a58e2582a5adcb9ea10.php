<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
    <div class="container-fluid">
        <!-- Branding Image -->
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            <?php echo e(config('app.name', 'Laravel')); ?>

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#app-navbar-collapse" aria-controls="app-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        Добавить
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="/add-car">Добавить Автомобиль</a></li>
                        <li><a class="dropdown-item" href="/add-mark">Добавить Марку</a></li>
                        <li><a href="/add-td" class="dropdown-item">Добавить тип детали</a></li>
                        <li><a href="/add-driver" class="dropdown-item">Добавить деталь</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Button trigger modal -->

        <button class="btn btn-outline-info my-2 my-sm-0 float-right" type="submit" data-toggle="modal" data-target="#exampleModalLong">
            Правила
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Руководство пользователя</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Пока что здесь ничего нет.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php if(Route::has('login')): ?>
        <div class="collapse navbar-collapse float-right" id="app-navbar-collapse">
            <ul class="navbar-nav">
            <?php if(auth()->guard()->check()): ?>
                <li><a href="<?php echo e(url('/dashboard')); ?>" class="nav-link">Моя страница</a></li>
            <?php else: ?>
                    <li><a href="<?php echo e(route('login')); ?>" class="nav-link">Вход</a></li>

                <?php if(Route::has('register')): ?>
                        <li><a href="<?php echo e(route('register')); ?>" class="nav-link">Регистрация</a></li>
            </ul>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</nav>
<?php /**PATH C:\OpenServer\domains\car-driver\resources\views/layouts/nav.blade.php ENDPATH**/ ?>