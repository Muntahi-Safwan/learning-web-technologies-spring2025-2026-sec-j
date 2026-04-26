<?php
$cookiesToClear = [
    'status',
    'user_name',
    'user_email',
    'user_username',
    'user_password',
    'user_confirm_password',
    'user_gender',
    'user_day',
    'user_month',
    'user_year'
];

foreach ($cookiesToClear as $cookieName) {
    setcookie($cookieName, '', time() - 3600, '/');
}

header('Location: ../login.php');
exit;
