<?php

require_once __DIR__ . '/../../activate_session.php';
require_once __DIR__ . '/check_admin.php';
require_once __DIR__ . '/../../database.php';

if (!isset($_GET['id']))
{
    header('Location: booking_management.php');
    exit;
}

if (isset($_GET['id']))
{
    $request = $database->prepare('UPDATE reservation SET validation = 1 WHERE id = :id');
    $request->execute(['id' => $_GET['id']]);
    header('Location: booking_management.php');
    exit;
}

?>