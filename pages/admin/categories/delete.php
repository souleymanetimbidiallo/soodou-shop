<?php

use App\Table\Categorie;

require '../core/HTML/BootstrapForm.php';

if(!empty($_POST)){
    $result = Categorie::delete($_POST['id']);
    header('Location: admin.php?p=categories.index');
}