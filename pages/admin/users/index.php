<?php

use App\Table\Utilisateur;

$users = Utilisateur::getAll();
?>

<h3>Admin - Utilisateurs</h3>

<p>
    <a href="?p=users.add" class="btn btn-success">Ajouter</a>
</p>

<table class="table table-bordered table-hover table-striped w-75">
    <thead class="thead-dark">
        <th>ID</th>
        <th>Prénom et Nom</th>
        <th>Login</th>
        <th>Rôle</th>
        <th>Actions</th>
    </thead>
    <tbody>
        
        <?php foreach($users as $user): ?>
        <tr>
            <td><?= $user->id ?></td>
            <td>Lorem Ipsum</td>
            <td><?= $user->username ?></td>
            <td>Admin</td>
            <td >
                <a href="?p=users.edit&id=<?= $user->id ?>" class="btn btn-primary">Editer</a>
                <form action="?p=users.delete" method="POST" class="d-inline">
                    <input type="hidden" name="id" value="<?= $user->id ?>">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>