<?php

use App\App;
use App\Autoloader;
use Core\Auth\DatabaseAuth;

require '../app/Autoloader.php';
require '../core/Auth/DatabaseAuth.php';
Autoloader::register();

if(isset($_GET['p'])){
    $page = $_GET['p'];
}else{
    $page = 'home';
}

//Authentification
$auth = new DatabaseAuth(App::getDatabase());
if(!$auth->logged()){
    header("Location: ../pages/users/login.php");
}
//die($auth->getUserId());

//Affichage
ob_start();
if($page === 'home'){
    require "../pages/admin/index.php";
}
elseif($page === 'sendmail'){
    require "../pages/users/sendmail.php";
}elseif($page === 'products.index'){
    require "../pages/admin/products/index.php";
}elseif ($page === 'products.edit'){
    require "../pages/admin/products/edit.php";
}elseif ($page === 'products.add'){
    require "../pages/admin/products/add.php";
}elseif ($page === 'products.delete'){
    require "../pages/admin/products/delete.php";
}elseif ($page === 'products.show'){
    require "../pages/admin/products/show.php";
}

elseif($page === 'orders.index'){
    require "../pages/admin/orders/index.php";
}elseif ($page === 'orders.edit'){
    require "../pages/admin/orders/edit.php";
}elseif ($page === 'orders.add'){
    require "../pages/admin/orders/add.php";
}elseif ($page === 'orders.delete'){
    require "../pages/admin/orders/delete.php";
}elseif ($page === 'orders.show'){
    require "../pages/admin/orders/show.php";
}

elseif($page === 'categories.index'){
    require "../pages/admin/categories/index.php";
}elseif ($page === 'categories.edit'){
    require "../pages/admin/categories/edit.php";
}elseif ($page === 'categories.add'){
    require "../pages/admin/categories/add.php";
}elseif ($page === 'categories.delete'){
    require "../pages/admin/categories/delete.php";
}elseif ($page === 'categories.show'){
    require "../pages/categories/show.php";
}

elseif($page === 'brands.index'){
    require "../pages/admin/brands/index.php";
}elseif ($page === 'brands.edit'){
    require "../pages/admin/brands/edit.php";
}elseif ($page === 'brands.add'){
    require "../pages/admin/brands/add.php";
}elseif ($page === 'brands.delete'){
    require "../pages/admin/brands/delete.php";
}elseif ($page === 'brands.show'){
    require "../pages/brands/show.php";
}

elseif($page === 'customers.index'){
    require "../pages/admin/customers/index.php";
}elseif ($page === 'customers.edit'){
    require "../pages/admin/customers/edit.php";
}elseif ($page === 'customers.add'){
    require "../pages/admin/customers/add.php";
}elseif ($page === 'customers.delete'){
    require "../pages/admin/customers/delete.php";
}elseif ($page === 'customers.show'){
    require "../pages/customers/show.php";
}

elseif($page === 'providers.index'){
    require "../pages/admin/providers/index.php";
}elseif ($page === 'providers.edit'){
    require "../pages/admin/providers/edit.php";
}elseif ($page === 'providers.add'){
    require "../pages/admin/providers/add.php";
}elseif ($page === 'providers.delete'){
    require "../pages/admin/providers/delete.php";
}elseif ($page === 'providers.show'){
    require "../pages/providers/show.php";
}

elseif($page === 'users.index'){
    require "../pages/admin/users/index.php";
}elseif ($page === 'users.edit'){
    require "../pages/admin/users/edit.php";
}elseif ($page === 'users.add'){
    require "../pages/admin/users/add.php";
}elseif ($page === 'users.delete'){
    require "../pages/admin/users/delete.php";
}elseif ($page === 'users.show'){
    require "../pages/users/show.php";
}

$content = ob_get_clean();
require "../pages/templates/admin.php";