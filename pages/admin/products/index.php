<?php

use App\Table\Produit;
use App\Table\Categorie;

$products = Produit::getAll();
?>

<h1>Administrer les produits</h1>

<p>
    <a href="?p=products.add" class="btn btn-success">Ajouter</a>
</p>

<table class="table table-bordered table-hover table-striped w-75">
    <thead class="thead-dark">
        <th>ID</th>
        <th>Titre</th>
        <th>Actions</th>
    </thead>
    <tbody>
        
        <?php foreach($products as $product): ?>
        <tr>
            <td><?= $product->id ?></td>
            <td><?= $product->designation ?></td>
            <td >
                <a href="?p=products.edit&id=<?= $product->id ?>" class="btn btn-primary">Editer</a>
                <form action="?p=products.delete" method="POST" class="d-inline">
                    <input type="hidden" name="id" value="<?= $product->id ?>">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
                <a href="?p=products.show&id=<?= $product->id ?>" class="btn btn-secondary">Voir plus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>