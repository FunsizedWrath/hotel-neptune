<?php

require_once __DIR__ . '/../../activate_session.php';
require_once __DIR__ . '/../../database.php';

if (!isset ($_SESSION['user'])) {
    header('Location: /');
    exit;
}

$is_admin = !!$_SESSION['user']['is_admin'];
if (!$is_admin) {
    error_log("logout.php\n", 3, "Test.log");
    header('Location: /');
    exit;
}