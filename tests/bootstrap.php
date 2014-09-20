<?php
/**
 * Created by IntelliJ IDEA.
 * User: kusudakei
 * Date: 9/20/14
 * Time: 9:57 PM
 */
$file = __DIR__.'/../vendor/autoload.php';
if (!file_exists($file)) {
    throw new RuntimeException('Install dependencies to run test suite.');
}

$autoload = require_once $file;
?>