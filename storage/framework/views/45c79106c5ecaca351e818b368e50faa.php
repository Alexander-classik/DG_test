<?php $__env->startSection('content'); ?>
    <style>
        /* Стили для заголовка формы */
        .form-title {
            color: #dc3545;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 25px;
        }

        /* Убираем видимое отделение от формы */
        .card-header {
            display: none; /* Скрываем стандартный заголовок карточки */
        }

        /* Стили для кнопки */
        .btn-primary {
            background-color: #dc3545;
            color: white;
            border: none;
            transition: all 0.3s ease;
            padding: 15px 40px; /* Увеличили размер */
            font-size: 20px; /* Увеличили шрифт */
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600; /* Жирный шрифт */
        }

        .btn-primary:hover {
            background-color: white;
            color: #dc3545;
            border: 2px solid #dc3545; /* Увеличили толщину рамки */
            box-shadow: 0 6px 12px rgba(220, 53, 69, 0.3); /* Усилили тень */
        }

        /* Остальные стили остаются без изменений */
        .floating-label-container {
            position: relative;
            margin-top: 24px;
        }

        .floating-label-input {
            width: 100%;
            padding: 16px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background: #fff;
            outline: none;
            transition: border-color 0.3s;
        }

        .floating-label {
            position: absolute;
            top: 18px;
            left: 16px;
            padding: 0 4px;
            color: #888;
            background: #fff;
            font-size: 16px;
            pointer-events: none;
            transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .floating-label-focused {
            top: -10px;
            left: 12px;
            font-size: 14px;
            color: #007bff;
            background: linear-gradient(to bottom, #fff 50%, transparent 50%);
            padding: 0 8px;
        }

        .floating-label-input:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 2px rgba(0,123,255,.25);
        }

        /* Стили для ошибок */
        .is-invalid {
            border-color: #dc3545;
        }

        .invalid-feedback {
            display: block;
            color: #dc3545;
            margin-top: 5px;
        }

        /* Центрирование кнопки */
        .d-flex.justify-content-center {
            margin-top: 30px;
        }
    </style>

    <div class="container py-4">
        <div class="row justify-content-md-center">
            <div class="col-md-8 col-md-offset-2">
                <div class="card mb-3">
                    <!-- Скрытый заголовок карточки -->
                    <div class="card-header"></div>

                    <div class="card-body">
                        <!-- Кастомный заголовок формы -->
                        <div class="form-title">МЫ ПЕРЕЗВОНИМ ВАМ</div>
                        <form method="POST" action="/feedback" enctype="multipart/form-data" id="feedback-form">
                            <?php echo e(csrf_field()); ?>


                            <!-- Поле ФИО -->
                            <div class="floating-label-container mb-3">
                                <input
                                    type="text"
                                    class="floating-label-input <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    id="name"
                                    name="name"
                                    value="<?php echo e(old('name')); ?>"
                                    placeholder=" "
                                    required
                                >
                                <label for="name" class="floating-label">ФИО *</label>
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <!-- Поле Адрес -->
                            <div class="floating-label-container mb-3">
                                <input
                                    type="text"
                                    class="floating-label-input <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    id="address"
                                    name="address"
                                    value="<?php echo e(old('address')); ?>"
                                    placeholder=" "
                                    required
                                >
                                <label for="address" class="floating-label">Адрес *</label>
                                <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <!-- Поле Телефон -->
                            <div class="floating-label-container mb-3">
                                <input
                                    type="tel"
                                    class="floating-label-input <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    id="phone"
                                    name="phone"
                                    value="<?php echo e(old('phone', $user->phone ?? '')); ?>"
                                    placeholder=" "
                                    required
                                >
                                <label for="phone" class="floating-label">Телефон *</label>
                                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <!-- Поле Email -->
                            <div class="floating-label-container mb-3">
                                <input
                                    type="email"
                                    class="floating-label-input <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    id="email"
                                    name="email"
                                    value="<?php echo e(old('email')); ?>"
                                    placeholder=" "
                                    required
                                >
                                <label for="email" class="floating-label">Электронная почта *</label>
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <!-- Поле Примечание -->
                            <div class="floating-label-container mb-3">
                                <input
                                    type="text"
                                    class="floating-label-input <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    id="description"
                                    name="description"
                                    value="<?php echo e(old('description')); ?>"
                                    placeholder=" "
                                    required
                                >
                                <label for="description" class="floating-label">Примечание *</label>
                            </div>

                            <div class="form-group mb-3 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">
                                    ОТПРАВИТЬ
                                </button>
                            </div>
                            <div id="feedback-table" class="d-none">
                                <h2 class="mt-5">Анкета готова</h2>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>ФИО</th>
                                        <th>Адрес</th>
                                        <th>Телефон</th>
                                        <th>Эл.почта</th>
                                        <th>Описание</th>
                                    </tr>
                                    </thead>
                                    <tbody id="feedback-table-body">
                                    <!-- Строки будут добавляться динамически -->
                                    </tbody>
                                </table>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // ... ваш код форматирования телефона ...

            const form = document.getElementById('feedback-form');
            if (form) {
                form.addEventListener('submit', function(event) {
                    event.preventDefault();
                    console.log("Отправка формы начата");

                    // Упрощенная проверка валидности
                    let isValid = true;
                    document.querySelectorAll('.floating-label-input[required]').forEach(input => {
                        if (!input.value.trim()) {
                            input.classList.add('is-invalid');
                            isValid = false;
                            console.log(`Поле ${input.id} не заполнено`);
                        }
                    });

                    if (!isValid) {
                        alert('Заполните все обязательные поля');
                        return;
                    }

                    // Отправка формы
                    const formData = new FormData(form);

                    fetch(form.action, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                            'Accept': 'application/json'
                        }
                    })
                        .then(response => {
                            if (!response.ok) throw new Error('Ошибка сервера: ' + response.status);
                            return response.json();
                        })
                        .then(data => {
                            console.log("Успешный ответ:", data);
                            // Добавляем данные в таблицу
                            addTableRow(data);

                            // Очищаем форму
                            form.reset();

                            // Сбрасываем фокус лейблов
                            document.querySelectorAll('.floating-label').forEach(label => {
                                label.classList.remove('floating-label-focused');
                            });
                        })
                        .catch(error => {
                            console.error('Ошибка:', error);
                            alert('Ошибка отправки: ' + error.message);
                        });
                });
            }
            else {
                console.error('Форма не найдена: #feedback-form');
            }

            function addTableRow(data) {
                const tableWrapper = document.getElementById('feedback-table');
                const tbody = document.getElementById('feedback-table-body');

                if (!tbody) {
                    console.error('Элемент #feedback-table-body не найден');
                    return;
                }

                // Показываем таблицу если скрыта
                if (tableWrapper.classList.contains('d-none')) {
                    tableWrapper.classList.remove('d-none');
                }

                // Добавляем новую строку
                const newRow = document.createElement('tr');
                newRow.innerHTML = `
            <td>${data.name}</td>
            <td>${data.address}</td>
            <td>${data.phone}</td>
            <td>${data.email}</td>
            <td>${data.description}</td>
        `;
                tbody.insertBefore(newRow, tbody.firstChild);
            }
        });
        document.addEventListener('DOMContentLoaded', function() {
            // Инициализация всех плавающих лейблов
            const floatInputs = document.querySelectorAll('.floating-label-input');

            floatInputs.forEach(input => {
                const container = input.closest('.floating-label-container');
                const label = container.querySelector('.floating-label');

                // Инициализация состояния
                if (input.value.trim() !== '') {
                    label.classList.add('floating-label-focused');
                }

                // Обработчики событий
                input.addEventListener('focus', function() {
                    label.classList.add('floating-label-focused');
                });

                input.addEventListener('blur', function() {
                    if (this.value.trim() === '') {
                        label.classList.remove('floating-label-focused');
                    }

                    // Валидация email
                    if (this.id === 'email' && this.value.trim() !== '') {
                        validateEmail(this);
                    }
                });
            });

            // Функция форматирования телефона
            function formatPhone(input) {
                const start = input.selectionStart;
                const oldValue = input.value;
                let digits = oldValue.replace(/\D/g, '');

                if (digits.length === 10 && digits.startsWith('9')) {
                    digits = '7' + digits;
                } else if (digits.startsWith('8')) {
                    digits = '7' + digits.substring(1);
                }

                digits = digits.substring(0, 11);

                let formatted = '+7';
                if (digits.length > 1) formatted += ` (${digits.substring(1, 4)}`;
                if (digits.length > 4) formatted += `) ${digits.substring(4, 7)}`;
                if (digits.length > 7) formatted += `-${digits.substring(7, 9)}`;
                if (digits.length > 9) formatted += `-${digits.substring(9, 11)}`;

                input.value = formatted;

                let newPos = formatted.length;
                if (start >= 4 && digits.length < 5) newPos = 7;
                else if (start >= 7 && digits.length < 8) newPos = 12;
                else if (start >= 9 && digits.length < 10) newPos = 15;
                else if (start >= 11 && digits.length < 12) newPos = 18;

                input.setSelectionRange(newPos, newPos);
            }

            // Функция валидации email
            function validateEmail(input) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(input.value)) {
                    input.classList.add('is-invalid');
                    // Создаем элемент ошибки если его нет
                    if (!input.nextElementSibling || !input.nextElementSibling.classList.contains('invalid-feedback')) {
                        const errorDiv = document.createElement('div');
                        errorDiv.className = 'invalid-feedback';
                        errorDiv.textContent = 'Пожалуйста, введите корректный email адрес';
                        input.parentNode.insertBefore(errorDiv, input.nextSibling);
                    }
                    return false;
                } else {
                    input.classList.remove('is-invalid');
                    const errorDiv = input.nextElementSibling;
                    if (errorDiv && errorDiv.classList.contains('invalid-feedback')) {
                        errorDiv.remove();
                    }
                    return true;
                }
            }

            // Функция форматирования телефона (только для поля телефона)
            const phoneInput = document.getElementById('phone');
            if (phoneInput) {
                phoneInput.addEventListener('input', () => formatPhone(phoneInput));
                phoneInput.addEventListener('blur', () => formatPhone(phoneInput));

                if (phoneInput.value.trim() !== '') {
                    formatPhone(phoneInput);
                }
            }

            // Проверка email перед отправкой
            const form = document.getElementById('feedback-form');
            form.addEventListener('submit', function(event) {
                let isValid = true;

                // Проверка обязательных полей
                floatInputs.forEach(input => {
                    if (input.value.trim() === '') {
                        input.classList.add('is-invalid');
                        isValid = false;
                    }
                });

                // Специальная проверка для email
                const emailInput = document.getElementById('email');
                if (emailInput.value.trim() !== '' && !validateEmail(emailInput)) {
                    isValid = false;
                }

                if (!isValid) {
                    event.preventDefault();
                    alert('Пожалуйста, заполните все обязательные поля корректно.');
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\dg\resources\views/fb/add.blade.php ENDPATH**/ ?>