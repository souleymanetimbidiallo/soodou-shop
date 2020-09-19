<?php

use App\Table\Client;

require '../core/HTML/BootstrapForm.php';

if(!empty($_POST)){
    $result = Client::delete($_POST['id']);
    header('Location: admin.php?p=customers.index');
}