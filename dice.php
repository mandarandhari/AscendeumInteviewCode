<?php
session_start();

if (isset($_GET['reset']) && $_GET['reset'] == 'true') {
    session_destroy();
    header('location: http://localhost/interview/');
}

$balance = $_GET['balance'] - 10;

$dice_1 = rand(1, 6);
$dice_2 = rand(1, 6);

$dice_sum = $dice_1 + $dice_2;
$result = '';

if (($_GET['bet'] == 'below_7' && $dice_sum < 7) || ($_GET['bet'] == 'above_7' && $dice_sum > 7)) {
    $balance += 20;
    $result = 'win';
} elseif ($_GET['bet'] == 'lucky_7' && $dice_sum == 7) {
    $balance += 30;
    $result = 'win';
} else {
    $result = 'lose';
}

$_SESSION['balance'] = $balance;
$_SESSION['dice_1'] = $dice_1;
$_SESSION['dice_2'] = $dice_2;
$_SESSION['result'] = $result;

header('location: http://localhost/interview/');