<?php

use App\Table\Fournisseur;

require '../core/HTML/BootstrapForm.php';

if(!empty($_POST)){
    $result = Fournisseur::delete($_POST['id']);
    header('Location: admin.php?p=providers.index');
}