<?php

if (isset($_COOKIE['PHPSESSID'])) {
    session_start();
}

require_once __DIR__ . DIRECTORY_SEPARATOR . 'logout.php';

?>