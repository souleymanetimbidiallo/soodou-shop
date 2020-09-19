<?php

require '../core/HTML/BootstrapForm.php';

ini_set("SMTP", "mail.soodou-shop.zd.fr");
ini_set("sendmail_from", "contact@soodou-shop.zd.fr");
ini_set("smtp_port", "465");

if(!empty($_POST)){
    $recipient = $_POST['recipient'];
    $object = $_POST['object'];
    $content = $_POST['content'];
    $headers = "From: contact@soodou-shop.zd.fr";

    if(mail($recipient, $object, $content, $headers)){
        ?>
        <div class="alert alert-success">
            <p>Email envoyé avec succès à <?=$recipient?></p>
        </div>
        <?php
    }else{
        ?>
        <div class="alert alert-danger">
            <p>Echec de l'envoi de l'email</p>
        </div>
        <?php
    }
}

$form = new BootstrapForm($_POST);
?>
<h2>Messagerie</h2>
<form method="POST" class="w-50">
    <?= $form->input('recipient', 'Destinataire', ['type'=>'email']); ?>
    <?= $form->input('object', 'Sujet'); ?>
    <?= $form->input('content', 'Message', ['type'=>'textarea']); ?>
    <button type="submit" class="btn btn-success">Envoyer</button>
</form>