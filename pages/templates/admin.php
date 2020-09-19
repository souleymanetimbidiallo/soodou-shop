<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administration</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
</head>
<body>
    <!--Entete de page-->
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
        <a href="index.php" target="_blank" class="navbar-brand col-sm-3 col-md-2 mr-0">Soodou-Shop</a>
        <input type="search" class="form-control form-control-dark w-100" placeholder="Recherche">
        <ul class="navbar-nav px-3 d-flex flex-row justify-content-around">
            <li class="nav-item text-nowrap">
                <a href="index.php?p=logout" class="nav-link">
                <span data-feather="user"></span><?=ucfirst($_SESSION['username']); ?>
                </a>
            </li>
            <li class="nav-item text-nowrap ml-4">
                <a href="admin.php?p=sendmail" class="nav-link">
                <span data-feather="message-square"></span>Messagerie 
                </a>
            </li>
            <li class="nav-item text-nowrap ml-4">
                <a href="index.php?p=logout" class="nav-link">
                <span data-feather="log-out"></span>Déconnexion 
                </a>
            </li>
        </ul>
    </nav>


    <div class="container-fluid">
        <div class="row">
            <!--Barre latérale gauche-->
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="admin.php" class="nav-link active">
                                <span data-feather="home"></span>
                                Tableau de bord <span class="sr-only">(Current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin.php?p=orders.index" class="nav-link">
                                <span data-feather="file"></span>
                                Commandes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin.php?p=products.index" class="nav-link">
                                <span data-feather="shopping-cart"></span>
                                Produits
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin.php?p=categories.index" class="nav-link">
                                <span data-feather="list"></span>
                                Catégories
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin.php?p=brands.index" class="nav-link">
                                <span data-feather="list"></span>
                                Marques
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin.php?p=customers.index" class="nav-link">
                                <span data-feather="users"></span>
                                Clients
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin.php?p=providers.index" class="nav-link">
                                <span data-feather="users"></span>
                                Fournisseurs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin.php?p=users.index" class="nav-link">
                                <span data-feather="users"></span>
                                Utilisateurs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span data-feather="bar-chart-2"></span>
                                Rapports
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span data-feather="layers"></span>
                                Couches
                            </a>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Sauvegarder les rapports</span>
                        <a href="#" class="d-flex align-items-center text-muted">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span data-feather="file-text"></span>Current month
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span data-feather="file-text"></span>Last quarter
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span data-feather="file-text"></span>Social engagement
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span data-feather="file-text"></span>.
                                3Year-end sale
                            </a>
                        </li>
                    </ul>
                </div>
            </nav><!--Fin de la barre latérale gauche-->

            <!--Main principal-->
            <main role="main" class="col-md-9 col-lg-10 ml-sm-auto px-4">
                
                <div class="d-flex justify-content-between align-items-center flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 border-bottom">
                    <h1>Tableaux de bord</h1>
                    <h4 id="today" class="font-italic"></h4>
                    
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <button onclick="openPopup()" class="btnPopup btn btn-sm btn-outline-secondary">Database.sql</button>
                            <button class="btn btn-sm btn-outline-secondary">Exporter</button>
                        </div>
                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar"></span>
                            Cette semaine
                        </button>
                    </div>
                </div>
                <?=$content?>
               
            </main><!--Fin du main principal-->

        </div>
    </div>

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/fontawesome-all.min.js"></script>
    <script src="js/dashboard.js"></script>
    
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>
    
    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"],
            datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
            }]
        },
        options: {
            scales: {
            yAxes: [{
                ticks: {
                beginAtZero: false
                }
            }]
            },
            legend: {
            display: false,
            }
        }
        });
    </script>
</body>
</html>