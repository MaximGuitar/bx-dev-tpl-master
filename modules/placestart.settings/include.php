<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/constants.php';
require_once __DIR__ . '/functions.php';

Kint::$enabled_mode = $USER->IsAdmin();