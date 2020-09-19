<?php
    use App\App;
    use App\Table\Produit;

    $product = Produit::find($_GET['id']);
    if($product === false){
        App::notFound();
    }
    App::setTitle($product->designation);

?>

<section class="container-fluid mb-4 border-top border-primary">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-weight-bold">
                <a class="text-decoration-none" href="index.php"> Accueil</a>
            </li>
            <li class="breadcrumb-item font-weight-bold">
                <a class="text-decoration-none" href="?p=categorie&id=<?=$product->category_id;?>"><?= $product->categorie ?></a>
            </li>
            <li class="breadcrumb-item active"><?= $product->designation; ?></li>
        </ol>
    </nav>
    <div class="container">
        <h1 class="text-center"><?= $product->designation; ?></h1>
        <figure class="figure text-center">
            <img src="images/products/<?=$product->photo?>" alt="Photo" class="figure-img img-fluid rounded w-50">
            <figcaption class="figure-caption text-center">Formateur du cours</figcaption>
        </figure>
        <p class="ml-5"><strong>Marque: </strong><?= $product->marque?></p>
        <p class="mx-5 text-justify">
            <?= $product->description; ?>
        </p>
        <p class="mx-5 mt-2">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Quod sed, ipsa aspernatur iure tempore ullam repellendus quasi nostrum delectus, 
            vero sunt, deserunt corporis. Dolorem deleniti, commodi tempora suscipit 
            perferendis dolor.
        </p>
    </div>
</section>
