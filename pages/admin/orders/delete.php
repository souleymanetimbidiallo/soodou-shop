<?php

use App\Table\Commande;

require '../core/HTML/BootstrapForm.php';

if(!empty($_POST)){
    $result = Commande::delete($_POST['id']);
    header('Location: admin.php?p=orders.index');
}