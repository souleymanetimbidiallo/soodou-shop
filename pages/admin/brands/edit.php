<?php

use App\Table\Marque;

require '../core/HTML/BootstrapForm.php';

if(!empty($_POST)){
    $result = Marque::update($_GET['id'], [
        'nom' => $_POST['nom'],
        'description' => $_POST['description']
    ]);
    if($result){
        ?>
        
        <div class="alert alert-success">
            <p>La marque a bien été modifiée</p>
        </div>
        <?php
    }
}
$brand = Marque::find($_GET['id']);

$form = new BootstrapForm($brand);
?>

<form method="POST">
    <?= $form->input('nom', 'Nom de la marque'); ?>
    <?= $form->input('description', 'Description', ['type'=>'textarea']); ?>
    <button type="submit" class="btn btn-primary">Sauvegarder</button>
</form>