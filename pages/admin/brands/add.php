<?php

use App\Table\Marque;

require '../core/HTML/BootstrapForm.php';

if(!empty($_POST)){
    $result = Marque::create([
        'nom' => $_POST['nom'],
        'description' => $_POST['description']
    ]);
    if($result){
        header('Location: admin.php?p=brands.index');
        
    }
}

$form = new BootstrapForm($_POST);
?>

<form method="POST">
    <?= $form->input('nom', 'Nom de la marque'); ?>
    <?= $form->input('description', 'Description', ['type'=>'textarea']); ?>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>