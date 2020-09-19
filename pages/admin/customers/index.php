<?php

use App\Table\Client;
$clients = Client::getAll();
?>

<h1>Administrer les clients</h1>

<p>
    <a href="?p=customers.add" class="btn btn-success">Ajouter</a>
</p>

<table class="table table-bordered table-hover table-striped w-75">
    <thead class="thead-dark">
        <th>ID</th>
        <th>Prénom et nom</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Actions</th>
    </thead>
    <tbody>
        <?php foreach($clients as $client): ?>
        <tr>
            <td><?= $client->id ?></td>
            <td><?= $client->prenom.' '.$client->nom ?></td>
            <td><?= $client->email ?></td>
            <td><?= $client->tel ?></td>
            <td >
                <a href="?p=customers.edit&id=<?= $client->id ?>" class="btn btn-primary">Editer</a>
                <form action="?p=customers.delete" method="POST" class="d-inline">
                    <input type="hidden" name="id" value="<?= $client->id ?>">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
                <a href="?p=customers.show&id=<?= $client->id ?>" class="btn btn-secondary">Voir plus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>