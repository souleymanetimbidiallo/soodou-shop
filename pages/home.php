<!--BEGIN categorie-navigation-->
<section class="categorie navbar navbar-expand-md navbar-light bg-light m-0">
    <div class="navbar-brand col-sm-2 col-md-2 p-0">
        <a href="">Nos catégories:</a>
    </div>
    <ul class="navbar-nav justify-content-center">
        <?php foreach(App\Table\Categorie::getAll() as $category) : ?>
        <li class="nav-item"><a href="<?= $category->url; ?>" class="nav-link"><?= $category->titre; ?></a></li>
        <?php endforeach; ?>
    </ul>
</section>
<!--END categorie-navigation-->

<!--Begin slider-->
<section class="container-fluid mb-4 py-2 border-top border-primary w-100">
    <h1 class="text-center h3">Achetez le meilleur du High-Tech. Vivre une nouvelle experience.</h1>
    <p class="text-center">Trouvez le produit qui vous correspond parmi nos meilleurs produits</p>
    <div id="myCarousel" class="carousel slide mx-auto" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner text-center">
            <div class="carousel-item active">
                <img class="first-slide w-75" src="images/slider-1.png" alt="Arsenal">
                <div class="container">
                    <div class="carousel-caption text-right text-white">
                        <h4>Achetez vos produits high-tech avec facilité</h4>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide w-75" src="images/slider-2.jpeg" alt="Dorsoduro">
                <div class="container">
                    <div class="carousel-caption text-right text-white">
                        <h1>Commandez nos produits quelque soit le lieu</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide w-75" src="images/slider-3.jpg" alt="San Marco">
                <div class="container">
                    <div class="carousel-caption text-center text-white">
                        <h1>Faites-vous livrer quelque soit le pays</h1>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<!--End Slider-->
<section class="container">
    <div class="row">
        <h3 class="mx-auto">Comment faire des achats et payements en ligne</h3>
        <div class="mx-auto">
            <video width="560" height="315" controls>
                <source src="videos/achat-paiement.mp4" type="video/mp4">
                <source src="videos/achat-paiement.ogg" type="video/ogg">
                Votre navigateur ne supporte pas la balise vidéo.
            </video>
        </div>
    </div>
</section>

<!--BEGIN Top Ventes-->
<section class="container">
    <h1 class="text-left h3">Top des ventes</h1>
    <div class="row text-center d-flex flex-row justify-content-around border-top border-dark pt-3">
        <div class="card border border-success" style="width: 15rem;">
            <img src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-11-pro-select-2019-family_GEO_EMEA?wid=882&hei=1058&fmt=jpeg&qlt=80&op_usm=0.5,0.5&.v=1567812929188" 
                class="card-img-top h-75 w-75 d-block mx-auto" alt="...">
            <div class="card-body border border-danger" style="padding:0px;">
                <h5 class="card-title">Iphone 11 Pro - 1559,00 €</h5>
                <a href="#" class="btn btn-sm btn-primary">Acheter</a>
            </div>
        </div>
        <div class="card border border-success" style="width: 15rem;">
            <img src="https://boulanger.scene7.com/is/image/Boulanger/bfr_overlay?$product_id=8801643695101_h_f_l_0&bfr_overlay?layer=comp&$t1=&$product_id=Boulanger/8801643695101_h_f_l_0&qlt=85,0&resMode=sharp2&op_usm=1.75,0.3,2,0&id=XF4Lp2&fmt=jpg&fit=constrain,1&wid=350&hei=350&qlt=85,0&resMode=sharp2&op_usm=1.75,0.3,2,0" 
                class="card-img-top h-75 w-75 d-block mx-auto" alt="...">
            <div class="card-body border border-danger" style="padding:0px;">
                <h5 class="card-title">Iphone 11 Pro - 1559,00 €</h5>
                <a href="#" class="btn btn-sm btn-primary">Acheter</a>
            </div>
        </div>
        <div class="card border border-success" style="width: 15rem;">
            <img src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-11-pro-select-2019-family_GEO_EMEA?wid=882&hei=1058&fmt=jpeg&qlt=80&op_usm=0.5,0.5&.v=1567812929188" 
                class="card-img-top h-75 w-75 d-block mx-auto" alt="...">
            <div class="card-body border border-danger" style="padding:0px;">
                <h5 class="card-title">Iphone 11 Pro - 1559,00 €</h5>
                <a href="#" class="btn btn-sm btn-primary">Acheter</a>
            </div>
        </div>
        <div class="card border border-success" style="width: 15rem;">
            <img src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-11-pro-select-2019-family_GEO_EMEA?wid=882&hei=1058&fmt=jpeg&qlt=80&op_usm=0.5,0.5&.v=1567812929188" 
                class="card-img-top h-75 w-75 d-block mx-auto" alt="...">
            <div class="card-body border border-danger" style="padding:0px;">
                <h5 class="card-title">Iphone 11 Pro - 1559,00 €</h5>
                <a href="#" class="btn btn-sm btn-primary">Acheter</a>
            </div>
        </div>
    </div>
</section>
<!--END Top Ventes-->

<!--BEGIN Top Recherchés-->
<section class="container my-5">
    <h1 class="text-left h3">Les produits les plus recherchés</h1>
    <div class="row text-center d-flex flex-row justify-content-around border-top border-dark pt-3">
        <div class="card border border-success" style="width: 15rem;">
            <img src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-11-pro-select-2019-family_GEO_EMEA?wid=882&hei=1058&fmt=jpeg&qlt=80&op_usm=0.5,0.5&.v=1567812929188" 
                class="card-img-top h-75 w-75 d-block mx-auto" alt="...">
            <div class="card-body border border-danger" style="padding:0px;">
                <h5 class="card-title">Iphone 11 Pro - 1559,00 €</h5>
                <a href="#" class="btn btn-sm btn-primary">Acheter</a>
            </div>
        </div>
        <div class="card border border-success" style="width: 15rem;">
            <img src="https://boulanger.scene7.com/is/image/Boulanger/bfr_overlay?$product_id=8801643695101_h_f_l_0&bfr_overlay?layer=comp&$t1=&$product_id=Boulanger/8801643695101_h_f_l_0&qlt=85,0&resMode=sharp2&op_usm=1.75,0.3,2,0&id=XF4Lp2&fmt=jpg&fit=constrain,1&wid=350&hei=350&qlt=85,0&resMode=sharp2&op_usm=1.75,0.3,2,0" 
                class="card-img-top h-75 w-75 d-block mx-auto" alt="...">
            <div class="card-body border border-danger" style="padding:0px;">
                <h5 class="card-title">Iphone 11 Pro - 1559,00 €</h5>
                <a href="#" class="btn btn-sm btn-primary">Acheter</a>
            </div>
        </div>
        <div class="card border border-success" style="width: 15rem;">
            <img src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-11-pro-select-2019-family_GEO_EMEA?wid=882&hei=1058&fmt=jpeg&qlt=80&op_usm=0.5,0.5&.v=1567812929188" 
                class="card-img-top h-75 w-75 d-block mx-auto" alt="...">
            <div class="card-body border border-danger" style="padding:0px;">
                <h5 class="card-title">Iphone 11 Pro - 1559,00 €</h5>
                <a href="#" class="btn btn-sm btn-primary">Acheter</a>
            </div>
        </div>
        <div class="card border border-success" style="width: 15rem;">
            <img src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-11-pro-select-2019-family_GEO_EMEA?wid=882&hei=1058&fmt=jpeg&qlt=80&op_usm=0.5,0.5&.v=1567812929188" 
                class="card-img-top h-75 w-75 d-block mx-auto" alt="...">
            <div class="card-body border border-danger" style="padding:0px;">
                <h5 class="card-title">Iphone 11 Pro - 1559,00 €</h5>
                <a href="#" class="btn btn-sm btn-primary">Acheter</a>
            </div>
        </div>
    </div>
</section>
<!--END Top Ventes-->

<!--BEGIN Produits en Promo-->
<section class="container">
    <h1 class="text-left h3">Nos produits en promo</h1>
    <div class="row text-center d-flex flex-row justify-content-around border-top border-dark pt-3">
        <div class="card border border-success" style="width: 15rem;">
            <img src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-11-pro-select-2019-family_GEO_EMEA?wid=882&hei=1058&fmt=jpeg&qlt=80&op_usm=0.5,0.5&.v=1567812929188" 
                class="card-img-top h-75 w-75 d-block mx-auto" alt="...">
            <div class="card-body border border-danger" style="padding:0px;">
                <h5 class="card-title">Iphone 11 Pro - 1559,00 €</h5>
                <a href="#" class="btn btn-sm btn-primary">Acheter</a>
            </div>
        </div>
        <div class="card border border-success" style="width: 15rem;">
            <img src="https://boulanger.scene7.com/is/image/Boulanger/bfr_overlay?$product_id=8801643695101_h_f_l_0&bfr_overlay?layer=comp&$t1=&$product_id=Boulanger/8801643695101_h_f_l_0&qlt=85,0&resMode=sharp2&op_usm=1.75,0.3,2,0&id=XF4Lp2&fmt=jpg&fit=constrain,1&wid=350&hei=350&qlt=85,0&resMode=sharp2&op_usm=1.75,0.3,2,0" 
                class="card-img-top h-75 w-75 d-block mx-auto" alt="...">
            <div class="card-body border border-danger" style="padding:0px;">
                <h5 class="card-title">Iphone 11 Pro - 1559,00 €</h5>
                <a href="#" class="btn btn-sm btn-primary">Acheter</a>
            </div>
        </div>
        <div class="card border border-success" style="width: 15rem;">
            <img src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-11-pro-select-2019-family_GEO_EMEA?wid=882&hei=1058&fmt=jpeg&qlt=80&op_usm=0.5,0.5&.v=1567812929188" 
                class="card-img-top h-75 w-75 d-block mx-auto" alt="...">
            <div class="card-body border border-danger" style="padding:0px;">
                <h5 class="card-title">Iphone 11 Pro - 1559,00 €</h5>
                <a href="#" class="btn btn-sm btn-primary">Acheter</a>
            </div>
        </div>
        <div class="card border border-success" style="width: 15rem;">
            <img src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-11-pro-select-2019-family_GEO_EMEA?wid=882&hei=1058&fmt=jpeg&qlt=80&op_usm=0.5,0.5&.v=1567812929188" 
                class="card-img-top h-75 w-75 d-block mx-auto" alt="...">
            <div class="card-body border border-danger" style="padding:0px;">
                <h5 class="card-title">Iphone 11 Pro - 1559,00 €</h5>
                <a href="#" class="btn btn-sm btn-primary">Acheter</a>
            </div>
        </div>
    </div>
</section>
<!--END Produits en promo-->