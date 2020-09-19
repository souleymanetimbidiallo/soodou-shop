<?php
    use App\App;
    use App\Table\Produit;

    $product = Produit::find($_GET['id']);
    if($product === false){
        App::notFound();
    }
    App::setTitle($product->designation); 

?>

<h2><?= $product->designation; ?></h2>
<p><em><?= $product->categorie ?></em></p>
<p><?= $product->description; ?></p>
<a href="admin.php?p=products.index" class="btn btn-primary">Retour</a>
