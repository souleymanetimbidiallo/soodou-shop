<?php

use App\Table\Client;
use App\Table\Commande;
$orders = Commande::getAll();
?>

<h1>Administrer les commandes</h1>

<p>
    <a href="?p=orders.add" class="btn btn-success">Ajouter</a>
</p>

<table class="table table-bordered table-hover table-striped w-75">
    <thead class="thead-dark">
        <th>N<sup>o</sup> Commande</th>
        <th>Prénom et nom du client</th>
        <th>Actions</th>
    </thead>
    <tbody>
        
        <?php foreach($orders as $order): 
            $customer = Client::find($order->id_client);

        ?>

        <tr>
            <td><?= $order->id ?></td>
            <td><?= $customer->prenom.' '.$customer->nom ?></td>
            <td >
                <a href="?p=orders.edit&id=<?= $order->id ?>" class="btn btn-primary">Editer</a>
                <form action="?p=orders.delete" method="POST" class="d-inline">
                    <input type="hidden" name="id" value="<?= $order->id ?>">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>