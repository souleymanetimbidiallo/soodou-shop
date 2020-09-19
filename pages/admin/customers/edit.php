<h4>Edition - Client</h4>
<?php

use App\Table\Client;
use App\Table\Pays;

require '../core/HTML/BootstrapForm.php';


if(!empty($_POST)){
    $result = Client::update($_GET['id'], [
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'email' => $_POST['email'],
        'mdp' => $_POST['mdp'],
        'tel' => $_POST['tel'],
        'adresse' => $_POST['adresse'],
        'cp' => $_POST['cp'],
        'ville' => $_POST['ville'],
        'id_pays' => $_POST['pays']
    ]);
    if($result){
        ?>
        
        <div class="alert alert-success">
            <p>Le client a bien été modifié</p>
        </div>
        <?php
    }
}
$customer = Client::find($_GET['id']);
$countries = Pays::list('id', 'nom');

$form = new BootstrapForm($customer);
?>

<form method="POST" enctype="multipart/form-data" class="myForm">
    <div class="row">
        <div class="col-6">
            <?= $form->input('nom', 'Nom'); ?>
            
            <?= $form->input('prenom', 'prenom'); ?>
            
            <?= $form->input('email', 'Email'); ?>
            <span class="error-mail text-danger"><i class="fas fa-exclamation"></i></span>
            
            <?= $form->input('mdp', 'Mot de passe', ['type'=>'password']); ?>
            
            <?= $form->input('tel', 'Téléphone'); ?>
            <span class="error-tel text-danger"><i class="fas fa-exclamation"></i></span>
        </div>
        <div class="col-6">
            <?= $form->input('adresse', 'Adresse'); ?>
            <?= $form->input('cp', 'Code postal'); ?>
            <?= $form->input('ville', 'Ville'); ?>
            <?= $form->select('pays', 'Pays', $countries); ?>
        </div>
    </div>
    <button type="submit" class="btn btn-primary d-block w-50 mx-auto">Sauvegarder</button>
</form>
<script src="../public/js/validateform.js"></script>