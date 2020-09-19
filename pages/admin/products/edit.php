<?php

use App\Table\Produit;
use App\Table\Categorie;
use App\Table\Fournisseur;
use App\Table\Marque;

require '../core/HTML/BootstrapForm.php';

if(isset($_FILES['photo'])){

    $photo = Produit::getPicture($_GET['id'], $_FILES['photo']);
}

if(!empty($_POST)){
    $result = Produit::update($_GET['id'], [
        'designation' => $_POST['designation'],
        'description' => $_POST['description'],
        'prix' => $_POST['prix'],
        'prix_promo' => $_POST['prix_promo'],
        'photo' => $photo,
        'id_categorie' => $_POST['categorie'],
        'id_marque' => $_POST['marque'],
        'id_fournisseur' => $_POST['fournisseur']
    ]);
    if($result){
        ?>
        
        <div class="alert alert-success">
            <p>Le produit a bien été modifié</p>
        </div>
        <?php
    }
}
$product = Produit::find($_GET['id']);
$categories = Categorie::list('id', 'titre');
$brands = Marque::list('id', 'nom');
$providers = Fournisseur::list('id', 'nom');

$form = new BootstrapForm($product);
?>

<form method="POST" enctype="multipart/form-data">
    <?= $form->input('designation', 'Désignation du produit'); ?>
    <?= $form->input('description', 'Description', ['type'=>'textarea']); ?>
    <?= $form->input('prix', 'Prix Unitaire', ['type'=>'number']); ?>
    <?= $form->input('prix_promo', 'Prix en promotion', ['type'=>'number']); ?>
    <?= $form->input('photo', 'Image', ['type'=>'file']); ?>
    <?= $form->select('categorie', 'Catégorie', $categories); ?>
    <?= $form->select('marque', 'Marque', $brands); ?>
    <?= $form->select('fournisseur', 'Fournisseur', $providers); ?>
    <button type="submit" class="btn btn-primary">Sauvegarder</button>
</form>