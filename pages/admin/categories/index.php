<?php

use App\Table\Categorie;

$categories = Categorie::getAll();
?>

<h1>Administrer les catégories</h1>

<p>
    <a href="?p=categories.add" class="btn btn-success">Ajouter</a>
</p>

<table class="table table-bordered table-hover table-striped w-75">
    <thead class="thead-dark">
        <th>ID</th>
        <th>Titre</th>
        <th>Actions</th>
    </thead>
    <tbody>
        
        <?php foreach($categories as $categorie): ?>
        <tr>
            <td><?= $categorie->id ?></td>
            <td><?= $categorie->titre ?></td>
            <td >
                <a href="?p=categories.edit&id=<?= $categorie->id ?>" class="btn btn-primary">Editer</a>
                <form action="?p=categories.delete" method="POST" class="d-inline">
                    <input type="hidden" name="id" value="<?= $categorie->id ?>">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>