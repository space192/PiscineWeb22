<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>OMNES Santé : Mon compte</title>
        <meta name="description" content="Mon compte Omnes Santé">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <link rel="stylesheet" href="Index.css">
        <link rel="stylesheet" href="Account.css">
        <link rel="icon" href="images/Decor/LogoOmnesSante2.ico">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/c6c9e611bb.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="Wrapper">
            <header id="Header">
                <?php include 'navBar.php'?>
                <div id="Darkmode"><button onclick="switchTheme()" title="Changer de thème de couleur">◐</button></div>
            </header>
            <section id="Milieu">
                <div class="Boites">
                    <div class="SousBoites" style="max-width: 600px;">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fas fa-user-check"></i> Connection</a>
                                <a class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="fas fa-user-plus"></i> Inscription</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="ex-with-icons-content">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="ex-with-icons-tab-1">
                                <form method="post" action="queryAccount.php">
                                    <br>
                                    <!-- Email input -->
                                    <div class="form mb-3">
                                        <input type="email" name="Mail" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Email address</label>
                                    </div>

                                    <!-- Password input -->
                                    <div class="form">
                                        <input type="password" name="pwd" class="form-control" id="floatingPasswordL" placeholder="Password">
                                        <label for="floatingPasswordL">Password</label>
                                    </div>
                                    <br>
                                    <input hidden name="query" value="4"/>
                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-light btn-block mb-4">Se connecter</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="ex-with-icons-tab-2">
                                <form method="post" action="queryAccount.php">
                                    <br>
                                    <div class="row">
                                        <div class="col-12 col-md-6 mb-4">
                                            <div class="form mb-3">
                                                <input type="text" name="Prenom" class="form-control" id="floatingInputPrenom" placeholder="Prénom">
                                                <label for="floatingInputPrenom">Prénom</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 mb-4">
                                            <div class="form mb-3">
                                                <input type="text" name="Nom" class="form-control" id="floatingInputNom" placeholder="Nom">
                                                <label for="floatingInputNom">Nom</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6 mb-4">
                                            <div class="form mb-3">
                                                <input type="number" name="Telephone" class="form-control" id="floatingInputTel" placeholder="Téléphone">
                                                <label for="floatingInputTel">Téléphone</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 mb-4">
                                            <div class="form mb-3">
                                                <input type="text" name="Pays" class="form-control" id="floatingInputPays" placeholder="Pays">
                                                <label for="floatingInputPays">Pays</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6 mb-4">
                                            <div class="form mb-3">
                                                <input type="text" name="Adresse_ligne1" class="form-control" id="floatingInputADL1" placeholder="Addresse ligne 1">
                                                <label for="floatingInputADL1">Addresse ligne 1</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 mb-4">
                                            <div class="form mb-3">
                                                <input type="text" name="Adresse_ligne2" class="form-control" id="floatingInputADL2" placeholder="Addresse ligne 2">
                                                <label for="floatingInputADL2">Addresse ligne 2</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6 mb-4">
                                            <div class="form mb-3">
                                                <input type="text" name="Ville" class="form-control" id="floatingInputVille" placeholder="Ville">
                                                <label for="floatingInputVille">Ville</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 mb-4">
                                            <div class="form mb-3">
                                                <input type="text" name="Code_postal" class="form-control" id="floatingInputCP" placeholder="Code postal">
                                                <label for="floatingInputCP">Code postal</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form mb-3">
                                        <input type="number" name="Carte_vital" class="form-control" id="floatingInputSecu" placeholder="Carte Vitale">
                                        <label for="floatingInputSecu">Numéro de sécurité sociale</label>
                                    </div>

                                    <!-- Email input -->
                                    <div class="form mb-3">
                                        <input type="email" name="Mail" class="form-control" id="floatingInputMail" placeholder="name@example.com">
                                        <label for="floatingInputMail">Email address</label>
                                    </div>

                                    <!-- Password input -->
                                    <div class="form">
                                        <input type="password" name="pwd" class="form-control" id="floatingPassword" placeholder="Password">
                                        <label for="floatingPassword">Password</label>
                                    </div>
                                    <br>
                                    <input hidden name="query" value="1"/>
                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-light btn-block mb-4">S'inscrire</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <script src="Index.js"></script>
        <script src="Account.js"></script>
    </body>
</html>