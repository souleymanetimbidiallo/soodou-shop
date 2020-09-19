<?php

use App\Table\Marque;

$brands = Marque::getAll();
?>

<h1>Administrer les marques</h1>

<p>
    <a href="?p=brands.add" class="btn btn-success">Ajouter</a>
</p>

<table class="table table-bordered table-hover table-striped w-75">
    <thead class="thead-dark">
        <th>ID</th>
        <th>Nom</th>
        <th>Actions</th>
    </thead>
    <tbody>
        
        <?php foreach($brands as $brand): ?>
        <tr>
            <td><?= $brand->id ?></td>
            <td><?= $brand->nom ?></td>
            <td >
                <a href="?p=brands.edit&id=<?= $brand->id ?>" class="btn btn-primary">Editer</a>
                <form action="?p=brands.delete" method="POST" class="d-inline">
                    <input type="hidden" name="id" value="<?= $brand->id ?>">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>