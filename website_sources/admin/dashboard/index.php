<?php
// Include Pour la Session
require_once('../../inc/connect_admin/session.php');
// Include Pour le Read
require_once('../../inc/CRUD/read.php');
// require_once('../../inc/CRUD/form_critere/form_critere copy.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Logo Chatel -->
    <link rel="icon" href="../../assets/img/Logo/chatel_logo.png">
    <!-- Titre de la page -->
    <title>Dashboard</title>
    <!-- Link vers les styles -->
    <!-- Style Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">    <!-- Mon Style -->
    <link rel="stylesheet" href="../../assets/css/style_dashboard.css">
</head>
<body>
    <!-- Header -->
    <header>
        <!-- Navbar -->
        <nav class="top navbar-expand-lg nav_me">
            <div class="nav_dash">
                <div class="chatel">
                    <img class="ligne" src="../../assets/img/Logo/chatel_logo.png" alt="Chatel Logo">
                </div>
            </div>
        </nav>
        <!-- Fin Navbar -->
    </header>
    <!-- Fin Header -->
    <!-- Main -->
    <main class="container">
        <!-- Menu -->
            <div class="gr_menu conta">    
                <div>
                    <form action="" class="form_rech">
                        <select name="dispo" class="sel form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                            <option hidden selected>Disponibilité</option>
                            <option value="1">Disponible</option>
                            <option value="0">Indisponible</option>
                        </select>
                        <select name="categorie" class="sel form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                            <option hidden selected>Catégorie</option>
                            <option value="Chambre">Chambre</option>
                            <option value="Appartement">Appartement</option>
                            <option value="Maison">Maison</option>
                        </select>
                        <div>
                            <button class="sel rubberBand bu btn btn-lg" type="submit">Rechercher</button>
                        </div>
                    </form>
                </div>
                <div class="ajout_deco">
                    <div class="dropdown bu_ajout">
                        <a class="bu btn btn-lg dropdown-toggle" href="" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Ajouter
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="ajout_gite.php?id=chambre">Une Chambre</a></li>
                            <li><a class="dropdown-item" href="ajout_gite.php?id=appartement">Un Appartement</a></li>
                            <li><a class="dropdown-item" href="ajout_gite.php?id=maison">Une Maison</a></li>
                        </ul>
                    </div>
                    <div class="deco">
                        <a  href="../../inc/connect_admin/deconnection.php"><img class="rubberBand" src="../../assets/img/icone/deco_ico.png" alt="Deconnexion" width="50px"></a>
                    </div>
                </div>
            </div>
        <!-- Fin Menu -->
        <!-- PHP Erreur -->
        <!-- Mon erreur si l'user se trompe d'id dans l'url -->
        <?php
            if(!empty($_SESSION['erreur'])){
                echo '<div class="alert alert-danger" role="alert">
                    '. $_SESSION ['erreur'].'
                    </div>';
                    $_SESSION['erreur'] = "";
            }
        ?>
        <!-- Mon message quand le produit à été Modifié -->
        <?php
            if(!empty($_SESSION['message'])){
                echo '<div class="alert alert-success" role="alert">
                '. $_SESSION ['message'].'
                </div>';
                $_SESSION['message'] = "";
            }
        ?>
        <!-- Fin PHP Erreur -->
        <!-- Mon Inventaire des Gîtes en Card -->
        <div class="card_gr"> 
            <!-- PHP -->
            <!-- on boucle la var result -->
            <?php foreach($result as $gite): extract($gite)?>
            <!-- fin PHP -->
                <div class="div_card">
                    <div class="card" style="width: 16rem;">
                        <img src="<?=$img_pre?>" class="card-img-top" alt="img présentation gîte">
                        <div class="contenu_card card-body">
                            <h4 class="title_gite card-title"><?=$nom?></h4>
                            <div>
                                <p class="card-text"><?=$adresse?></p>
                                <p class="card-text"><?=$categorie?></p>
                                <p class="card-text"><?php require('../../inc/CRUD/dispo.php');?></p>
                            </div>
                            <div class="ico">
                                <a href="details_gite.php?id_gite=<?= $id_gite?>"><img class="rubberBand" src="../../assets/img/icone/voir.png" alt="Inspecter" width="25px" height="25px"></a>
                                <a href="modification_gite.php?id_gite=<?= $id_gite?>&amp;type=<?=$categorie?>"><img class="rubberBand" src="../../assets/img/icone/modif_ico.png" alt="Modif" width="25px" height="25px"></a>
                                <a href="../../inc/CRUD/supp.php?id_gite=<?= $id_gite?>"><img class="rubberBand" src="../../assets/img/icone/sup_ico.png" alt="supp" width="25px" height="25px"></a>
                            </div>
                        </div>   
                    </div>
                </div>
            <!-- PHP -->
            <!-- Fin de ma Foreach -->
            <?php endforeach?>
            <!-- Fin PHP -->
        </div>
        <!-- Fin de Mon Inventaire des Gîtes -->
    </main>
    <!-- Fin Main -->
    <footer class="bottom">
        <img class="logo " src="../../assets/img/Logo/logo.png" alt="Logo YS" width="100px">
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>