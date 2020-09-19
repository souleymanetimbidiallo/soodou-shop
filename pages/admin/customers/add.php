<?php

use App\Table\Categorie;

require '../core/HTML/BootstrapForm.php';

if(!empty($_POST)){
    $result = Categorie::create([
        'titre' => $_POST['titre'],
        'description' => $_POST['description']
    ]);
    if($result){
        header('Location: admin.php?p=categories.index');
        
    }
}
//$categories = Categorie::list('id', 'titre');

$form = new BootstrapForm($_POST);
?>

<form method="POST">
    <?= $form->input('titre', 'Titre de la catégorie'); ?>
    <?= $form->input('description', 'Description', ['type'=>'textarea']); ?>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>