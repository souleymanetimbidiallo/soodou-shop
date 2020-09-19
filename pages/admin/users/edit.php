<?php

use App\Table\Utilisateur;

require '../core/HTML/BootstrapForm.php';

if(!empty($_POST)){
    $result = Utilisateur::update($_GET['id'], [
        'username' => $_POST['username'],
        'password' => sha1($_POST['password'])
    ]);
    if($result){
        ?>
        
        <div class="alert alert-success">
            <p>L'utilisateur a bien été modifiée</p>
        </div>
        <?php
    }
}
$brand = Utilisateur::find($_GET['id']);

$form = new BootstrapForm($brand);
?>

<form method="POST">
    <?= $form->input('username', 'Nom d\'utilisateur'); ?>
    <?= $form->input('password', 'Mot de passe', ['type'=>'password']); ?>
    <button type="submit" class="btn btn-primary">Sauvegarder</button>
</form>