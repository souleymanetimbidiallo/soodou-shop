<?php
    use App\App;
    use App\Table\Produit;
    use App\Table\Categorie;

    $categorie = Categorie::find($_GET['id']);
    if($categorie === false){
        App::notFound();
    }
    $produits = Produit::lastByCategory($_GET['id']);
?>
<section class="container-fluid mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-weight-bold"><a class="text-decoration-none" href="index.php"> Accueil</a></li>
            <li class="breadcrumb-item active"><?= $categorie->titre; ?></li>
        </ol>
    </nav>
    <div class="row">
        <div class="offset-2 col-8">
            <h1 class="h4"><?= $categorie->titre; ?></h1>
            <p><?= $categorie->description; ?></p>
        </div>
    </div>
    <div class="row">
        <div class="offset-2 col-9">
            <?php foreach($produits as $produit): ?> 
            <div class="row bg-light p-3 mb-2">
                   
                <article class="col-8">
                    <h1 class="h3"><?= $produit->designation; ?></h1>
                    
                    <p>
                        <em>@<?= $produit->categorie; ?></em>
                    </p>
                    <p><?= $produit->extract; ?></p>
                    <p>
                        <?php
                            if(is_null($produit->prix_promo)){
                                echo 'Prix: <Strong>'.$produit->prix.'€</Strong>';
                            }else{
                                echo 'Prix: <Strong>'.$produit->prix_promo.'€</Strong> <del>'.$produit->prix.'€</del>';
                            }
                        ?>
                    </p>
                    <div>
                        <a href="produit.html" class="btn btn-primary">Commander</a>
                        <a href="<?=$produit->getURL(); ?>" class="ml-3 btn btn-primary">En savoir plus</a>
                    </div>
                </article>
                <div class="col-3">
                    <img src="images/products/<?=$produit->photo?>" class="img-fluid w-100 h-75  img-thumbnail" alt="">
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>