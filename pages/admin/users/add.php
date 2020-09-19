<?php

use App\Table\Utilisateur;

require '../core/HTML/BootstrapForm.php';

if(!empty($_POST)){
    $result = Utilisateur::create([
        'username' => $_POST['username'],
        'password' => sha1($_POST['password'])
    ]);
    if($result){
        header('Location: admin.php?p=users.index');
        
    }
}

$form = new BootstrapForm($_POST);
?>

<form method="POST">
    <?= $form->input('username', 'Nom d\'utilisateur'); ?>
    <?= $form->input('password', 'Mot de passe', ['type'=>'password']); ?>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>