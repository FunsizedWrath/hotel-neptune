<?php

require_once __DIR__ . '/../activate_session.php';
include_once __DIR__ . '/../database.php';

if (!$isAdmin) {
    header('Location: ');
    exit;
}

header('Location: /admin/pageadmin.php');
exit;