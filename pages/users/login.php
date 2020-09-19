<?php
require '../../app/Autoloader.php';
App\Autoloader::register();


ob_start();
require "login.inc.php";
$content = ob_get_clean();

require "../templates/other.php";