<?php

use App\Table\Categorie;

require '../core/HTML/BootstrapForm.php';

if(!empty($_POST)){
    $result = Categorie::update($_GET['id'], [
        'titre' => $_POST['titre'],
        'description' => $_POST['description']
    ]);
    if($result){
        ?>
        
        <div class="alert alert-success">
            <p>La catégorie a bien été modifiée</p>
        </div>
        <?php
    }
}
$categorie = Categorie::find($_GET['id']);

$form = new BootstrapForm($categorie);
?>

<form method="POST">
    <?= $form->input('titre', 'Titre de la catégorie'); ?>
    <?= $form->input('description', 'Description', ['type'=>'textarea']); ?>
    <button type="submit" class="btn btn-primary">Sauvegarder</button>
</form>