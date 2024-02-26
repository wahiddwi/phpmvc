<?php

if (!session_id()) {
    session_start(); // start session
}

require_once '../utama/init.php';

$app = new App;