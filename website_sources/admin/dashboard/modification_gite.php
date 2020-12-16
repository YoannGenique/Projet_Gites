<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Logo Chatel -->
    <link rel="icon" href="../../assets/img/Logo/chatel_logo.png">
    <!-- Titre de la page -->
    <title>Modification d'un Gîte</title>
    <!-- Link vers les styles -->
    <!-- Style Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Mon Style -->
    <link rel="stylesheet" href="../../assets/css/style_ajout_modif.css">
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
    <main>
        <!-- Menu -->
        <div class="menu">
            <div class="bu_retour">
                <a class="rubberBand bu btn btn-lg" href="index.php" role="button">Retour</a>
            </div>
            <h1>Modification d'un Gîte</h1>
            <div class="deco">
                <a  href="../../require/deconnection.php"><img class="rubberBand" src="../../assets/img/icone/deco_ico.png" alt="Deconnexion" width="50px"></a>
            </div>
        </div>
        <!-- Fin Menu -->
        <!-- Formulaire d'ajout d'un Gîte -->
        <form class="form_ajout" method="POST" action="" enctype="multipart/form-data" >
            <div class=" form_contain">
                    <!-- Nom Dispo -->
                    <div class="nom_dispo">
                        <div class="input_nom form-group">
                            <label for="Nom">Nom</label>
                            <input type="text" id="Nom" name="Nom" class="form-control">
                        </div>
                        <div class="input_dispo form-group">
                            <label for="disponibilite">Disponibilité</label><br>
                            <select class="select_dispo form-select form-select-lg" aria-label="disponibilite">
                                <option value="disponible" selected>Disponible</option>
                                <option value="indisponible">Indisponible</option>
                            </select>
                        </div>
                    </div>
                    <!-- Fin Nom Dispo -->
                    <!-- Adresse Prix -->
                    <div class="adresse_prix">
                        <div class="input_adresse form-group">
                            <label for='Adresse'>Adresse</label>
                            <input type="text" id='adresse' name='adresse' class="form-control">
                        </div>
                        <div class="input_prix form-group">
                            <label for="Prix">Prix</label>
                            <input type="text" id="Prix" name="Prix" class="form-control">
                        </div>
                    </div>
                    <!-- Fin Adresse Prix -->
                    <!-- Début du choix de catégorie en input type radio Catégorie -->
                    <div class="input_cate form-group">
                        <label for="Categorie">Catégorie:</label><br>
                        <div class="cate_gr">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Categorie" id="inlineRadio1" value="Chambre">
                                <label class="form-check-label" for="inlineRadio1">Chambre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Categorie" id="inlineRadio2" value="Appartement">
                                <label class="form-check-label" for="inlineRadio2">Appartement</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Categorie" id="inlineRadio3" value="Maison">
                                <label class="form-check-label" for="inlineRadio3">Maison</label>
                            </div>
                        </div>
                    </div>
                    <!-- Fin du choix de catégorie en input type radio Catégorie -->
                    <!-- NB de Couchage, Sdb, Pièce(si cocher maison ou appart) -->
                    <div class="nb">
                        <div class="form-group">
                                <label for="Couchages">NB de Couchages</label><br>
                                <select class="select_dispo form-select form-select-lg" aria-label="Couchages">
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                                <label for="Sdb">NB de Sdb</label><br>
                                <select class="select_dispo form-select form-select-lg" aria-label="Sdb">
                                <option value="0" selected>0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                                <label for="Piece">NB de Pièce</label><br>
                                <select class="select_dispo form-select form-select-lg" aria-label="Piece">
                                <option value="0" selected>0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <!-- Fin NB de Couchage, Sdb, Pièce(si cocher maison ou appart) -->
                    <!-- Equipements -->
                    <div class="input_equip form-group">
                        <label for="Equipements">Equipements:</label><br>
                        <div class="equip_space form-check">
                            <input class="form-check-input" type="checkbox" value="Wifi" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">Wifi</label>
                        </div>
                        <div class="equip_space form-check">
                            <input class="form-check-input" type="checkbox" value="Lave-Linge" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">Lave-Linge</label>
                        </div>
                        <div class="equip_space form-check">
                            <input class="form-check-input" type="checkbox" value="Jardin" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">Jardin</label>
                        </div> 
                        <div class="equip_space form-check">
                            <input class="form-check-input" type="checkbox" value="Piscine" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">Piscine</label>
                        </div> 
                    </div>
                    <!-- Fin Equipements -->
                    <!-- Photo de présentation card -->
                    <div class="form-group">
                        <label for="Photopre">Photo de présentation:</label>
                        <input type="file" id="Photopre" name="Photopre" class="input_pre">
                    </div>
                    <!-- Fin Photo de présentation card -->
                    <!-- Photo pour slider page détail -->
                    <div class="form-group">
                        <label for="Carrou">Photo Carroussel:</label><br>
                        <input type="file" id="Carrou1" name="Carrou1" class="input_sli">
                        <input type="file" id="Carrou2" name="Carrou2" class="input_sli">
                        <input type="file" id="Carrou3" name="Carrou3" class="input_sli">
                    </div>
                    <!-- Fin Photo pour slider page détail -->
                    <!-- Description -->
                    <div class="form-group">
                        <label for="Description">Description</label>
                        <textarea id="Description" name="Description" class="form-control" row="6"></textarea>
                    </div>
                    <!-- Fin Description -->
                    <div class="div_bu_form">
                        <button class=" rubberBand bu_form  btn btn-secondary btn-lg">Enregistrer</button>
                    </div>
            </div>
        </form>
        <!-- Fin Formulaire -->
    </main>
    <!-- Fin Main -->
    <footer class="bottom">
        <img class="logo " src="../../assets/img/Logo/logo.png" alt="Logo YS" width="100px">
    </footer>
</body>
</html>