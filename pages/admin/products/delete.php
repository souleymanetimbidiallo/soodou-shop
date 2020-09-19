<?php

use App\Table\Produit;

require '../core/HTML/BootstrapForm.php';

if(!empty($_POST)){
    $result = Produit::delete($_POST['id']);
    header('Location: admin.php?p=products.index');
}