<?php
require '../app/Autoloader.php';
App\Autoloader::register();


if(isset($_GET['p'])){
    $p = $_GET['p'];
}else{
    $p = 'home';
}

if($p === 'admin'){
    header("Location: admin.php");
}


ob_start();

if($p === 'home'){
    require "../pages/home.php";
}elseif ($p === 'product'){
    require "../pages/products/show.php";
}elseif ($p === 'categorie'){
    require "../pages/categories/show.php";
}elseif ($p === 'login'){
    header("Location: ../pages/users/login.php");
}elseif ($p === 'logout'){
    header("Location: ../pages/users/logout.php");
}

$content = ob_get_clean();

require "../pages/templates/main.php";