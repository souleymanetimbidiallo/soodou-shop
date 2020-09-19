<!-- BEGIN Header-->
<header class=" container-fluid navbar navbar-expand-lg navbar-dark bg-dark p-0">
    <div class="navbar-brand col-3 col-sm-3 col-md-2 mr-0">
        <a href="index.php"><img src="images/logo-4.png" alt="logo"></a>
    </div>
    
    <form class="form-inline m-0 p-1 col-6 col-sm-6 col-md-6 mx-0 form-input-search" action="#">
        <div class="input-group w-100 border border-warning p-2">
            <input type="search" class="form-control px-5 py-0 " placeholder="Recherche d'un produit ...">
            <div class="input-group-append">
                <button type="submit"class="input-group-text btn">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar-content">
        <span class="navbar-toggler-icon"></span>
    </button>
    <nav class="collapse navbar-collapse col-3 col-sm-3 col-md-4" id="navbar-content">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="catalogue.php" class="nav-link active"><i class="fa fa-list-alt"></i> Catalogue</a></li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link active dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user-lock"></i> Authentification</a>
                <ul class="dropdown-menu sub-menu">
                <li class="dropdown-item"><a href="#" class="nav-link text-dark">Connexion</a></li>
                <li class="dropdown-item"><a href="#" class="nav-link text-dark">Inscription</a></li>
                </ul>
            </li>
            <li class="nav-item"><a href="#" class="nav-link active"><i class="fas fa-shopping-cart"></i> Panier</a></li>
        </ul>
    </nav>
</header>
<!-- END Header-->