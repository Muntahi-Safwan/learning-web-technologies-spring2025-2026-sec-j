<?php
function ensureLoggedIn(): void
{
    if (!isset($_COOKIE['status']) || $_COOKIE['status'] !== 'logged_in') {
        header('Location: ../login.php');
        exit;
    }
}

function userValue(string $key): string
{
    return $_COOKIE[$key] ?? '';
}

function userDob(): string
{
    $day = userValue('user_day');
    $month = userValue('user_month');
    $year = userValue('user_year');

    if ($day === '' && $month === '' && $year === '') {
        return '';
    }

    return $day . '/' . $month . '/' . $year;
}
