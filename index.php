<?php
define('PMA_ADVANCE_LOGIN', 1);
session_name('PmaAdvanceLogin');
session_start();
if (!isset($_SESSION['user'])){
    if (empty($_POST)) {
        include './lib/login.inc.php';
        exit;
    }
    $users = require './user.php';
    if (empty($_POST['pma_username']) || empty($_POST['pma_password']) || !isset($users[$_POST['pma_username']]) || $users[$_POST['pma_username']]['password'] != md5($_POST['pma_password'])) {
        $msg = 'invalide username or password';
        include './lib/login.inc.php';
        exit;
    }
    $_SESSION['user'] = $users[$_POST['pma_username']];
}
if (!isset($_POST['server'])){
    $userDbArr = $_SESSION['user']['db'];
    include './lib/select_db.inc.php';
    exit;
}

$dbArr = require './db.php';
if (!isset($dbArr[$_POST['server']])) {
    $userDbArr = $_SESSION['user']['db'];
    $msg = 'select db not exists';
    include './lib/select_db.inc.php';
    exit;
}

foreach($dbArr[$_POST['server']] as $k => $v) {
    $_SESSION['PMA_single_signon_' . $k] = $v;
}
header('Location: ../index.php');
?>
