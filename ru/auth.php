<?php

return [
    'sign_in' => 'Войти в систему',
    'go_to_login' => 'Перейти к авторизации',
    'failed' => 'Не удалось найти учетную запись, соответствующую этим данным.',

    'forgot_password' => [
        'label' => 'Забыли пароль?',
        'label_help' => 'Введите адрес электронной почты своего аккаунта, чтобы получить инструкции по сбросу пароля.',
        'button' => 'Восстановить учетную запись',
    ],

    'reset_password' => [
        'button' => 'Сбросить и войти',
    ],

    'two_factor' => [
        'label' => '2-факторный токен',
        'label_help' => 'Для продолжения требуется второй уровень аутентификации. Пожалуйста, введите код, сгенерированный вашим устройством, для завершения входа.',
        'checkpoint_failed' => 'Токен двухфакторной аутентификации недействителен.',
    ],

    'throttle' => 'Слишком много попыток входа в систему. Повторите попытку через :seconds секунды.',
    'password_requirements' => 'Пароль должен состоять не менее чем из 8 символов и быть уникальным для этого сайта.',
    '2fa_must_be_enabled' => 'Администратор потребовал, чтобы для вашей учетной записи была включена двухфакторная аутентификация.',
];
