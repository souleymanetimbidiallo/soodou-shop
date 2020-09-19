<?php

use App\Table\Fournisseur;
$providers = Fournisseur::getAll();
?>

<h1>Administrer les fournisseurs</h1>

<p>
    <a href="?p=providers.add" class="btn btn-success">Ajouter</a>
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
        <?php foreach($providers as $provider): ?>
        <tr>
            <td><?= $provider->id ?></td>
            <td><?= $provider->nom ?></td>
            <td><?= $provider->email ?></td>
            <td><?= $provider->telfixe ?></td>
            <td >
                <a href="?p=providers.edit&id=<?= $provider->id ?>" class="btn btn-primary">Editer</a>
                <form action="?p=providers.delete" method="POST" class="d-inline">
                    <input type="hidden" name="id" value="<?= $provider->id ?>">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>