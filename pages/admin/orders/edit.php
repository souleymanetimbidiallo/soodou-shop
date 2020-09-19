<?php

use App\Table\Commande;
use App\Table\Client;

require '../core/HTML/BootstrapForm.php';


if(!empty($_POST)){
    $result = Commande::update($_GET['id'], [
        'date_commande' => $_POST['date_commande'],
        'date_reg' => $_POST['date_reg'],
        'montant_reg' => $_POST['montant_reg'],
        'mode_paiement' => $_POST['mode_paiement'],
        'id_client' => $_POST['client']
    ]);
    if($result){
        ?>
        
        <div class="alert alert-success">
            <p>La commande a bien été modifié</p>
        </div>
        <?php
    }
}
$order = Commande::find($_GET['id']);
$clients = Client::list('id', 'nom');

$form = new BootstrapForm($order);
?>

<form method="POST" enctype="multipart/form-data">
    <?= $form->input('date_commande', 'Date de commande', ['type'=>'date']); ?>
    <?= $form->input('date_reg', 'Date de règlement', ['type'=>'date']); ?>
    <?= $form->input('montant_reg', 'Montant de règlement', ['type'=>'number']); ?>
    <?= $form->input('mode_paiement', 'Mode de payement'); ?>
    <?= $form->select('client', 'Client', $clients); ?>
    <button type="submit" class="btn btn-primary">Sauvegarder</button>
</form>