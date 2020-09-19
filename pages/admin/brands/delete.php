<?php

use App\Table\Marque;

require '../core/HTML/BootstrapForm.php';

if(!empty($_POST)){
    $result = Marque::delete($_POST['id']);
    header('Location: admin.php?p=brands.index');
}