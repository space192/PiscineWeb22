<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>OMNES Santé : Mon compte</title>
        <meta name="description" content="Mon compte Omnes Santé">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <link rel="stylesheet" href="Index.css">
        <link rel="stylesheet" href="Account.css">
        <link rel="stylesheet" href="MyAccount.css">
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
                    <div class="SousBoites" style="max-width: 850px;">
                        <h3>Identité</h3>
                        <div class="accordion accordion-flush" id="accordionFlushIdentite">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Identite1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Identite1C" aria-expanded="false" aria-controls="Identite1C">
                                    Nom
                                </button>
                                </h2>
                                <div id="Identite1C" class="accordion-collapse collapse" aria-labelledby="Identite1" data-bs-parent="#accordionFlushIdentite">
                                <div class="accordion-body">
                                    <div class="Actuel" >Nom actuel : </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Nom" aria-label="Nom" aria-describedby="button-addon2">
                                        <button class="btn btn-outline-secondary" type="sumbit" id="ChangementNom">Changer le nom</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Identite2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Identite2C" aria-expanded="false" aria-controls="Identite2C">
                                    Prénom
                                </button>
                                </h2>
                                <div id="Identite2C" class="accordion-collapse collapse" aria-labelledby="Identite2" data-bs-parent="#accordionFlushIdentite">
                                <div class="accordion-body">
                                    <div class="Actuel" >Prénom actuel : </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Prénom" aria-label="Prénom" aria-describedby="button-addon2">
                                        <button class="btn btn-outline-secondary" type="sumbit" id="ChangementPrenom">Changer le prénom</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Identite3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Identite3C" aria-expanded="false" aria-controls="Identite3C">
                                Numéro de sécurité sociale
                                </button>
                                </h2>
                                <div id="Identite3C" class="accordion-collapse collapse" aria-labelledby="Identite3" data-bs-parent="#accordionFlushIdentite">
                                <div class="accordion-body">
                                    <div class="Actuel" >Numéro de carte vitale actuel : </div>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control" placeholder="Nouveau numéro de sécurité sociale" aria-label="Sécurité Sociale" aria-describedby="button-addon2">
                                        <button class="btn btn-outline-secondary" type="sumbit" id="ChangementCarteVitale">Changer le numéro</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="SousBoites" style="max-width: 850px;">
                        <h3>Domicile</h3>
                        <div class="accordion accordion-flush" id="accordionFlushDomicile">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Adresse
                                </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushDomicile">
                                <div class="accordion-body">
                                    <div class="Actuel" >Adresse actuelle : </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Adresse ligne 1" aria-label="AdresseL1" aria-describedby="button-addon2">
                                        <input type="text" class="form-control" placeholder="Adresse ligne 2" aria-label="AdresseL2" aria-describedby="button-addon2">
                                        <button class="btn btn-outline-secondary" type="sumbit" id="ChangementAdresse">Changer l'adresse</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Ville
                                </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushDomicile">
                                <div class="accordion-body">
                                    <div class="Actuel" >Ville actuelle : </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Ville" aria-label="Ville" aria-describedby="button-addon2">
                                        <button class="btn btn-outline-secondary" type="sumbit" id="ChangementVille">Changer la ville</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Code Postal
                                </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushDomicile">
                                <div class="accordion-body">
                                    <div class="Actuel" >Code postal actuel : </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Code postal" aria-label="CodePostal" aria-describedby="button-addon2">
                                        <button class="btn btn-outline-secondary" type="sumbit" id="ChangementCP">Changer le code postal</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    Pays
                                </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushDomicile">
                                <div class="accordion-body">
                                    <div class="Actuel" >Pays actuel : </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Pays" aria-label="Pays" aria-describedby="button-addon2">
                                        <button class="btn btn-outline-secondary" type="sumbit" id="ChangementCP">Changer le Pays</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="SousBoites" style="max-width: 850px;">
                        <h3>Contact</h3>
                        <div class="accordion accordion-flush" id="accordionFlushContact">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Contact1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Contact1C" aria-expanded="false" aria-controls="Contact1C">
                                    Téléphone
                                </button>
                                </h2>
                                <div id="Contact1C" class="accordion-collapse collapse" aria-labelledby="Contact1" data-bs-parent="#accordionFlushContact">
                                <div class="accordion-body">
                                    <div class="Actuel" >Numéro de téléphone actuel : </div>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control" placeholder="Nouveau numéro de téléphone" aria-label="Telephone" aria-describedby="button-addon2">
                                        <button class="btn btn-outline-secondary" type="sumbit" id="ChangementTelephone">Changer le numéro de téléphone</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="SousBoites" style="max-width: 850px;">
                        <h3>Connexion</h3>
                        <div class="accordion accordion-flush" id="accordionFlushConnexion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Connexion1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Connexion1C" aria-expanded="false" aria-controls="Connexion1C">
                                    Email
                                </button>
                                </h2>
                                <div id="Connexion1C" class="accordion-collapse collapse" aria-labelledby="Connexion1" data-bs-parent="#accordionFlushConnexion">
                                <div class="accordion-body">
                                    <div class="Actuel" >Adresse email actuelle : </div>
                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control" placeholder="Nouvelle adresse email" aria-label="Mail" aria-describedby="button-addon2">
                                        <button class="btn btn-outline-secondary" type="sumbit" id="ChangementMail">Changer l'adresse mail'</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Connexion2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Connexion2C" aria-expanded="false" aria-controls="Connexion2C">
                                    Mot de passe
                                </button>
                                </h2>
                                <div id="Connexion2C" class="accordion-collapse collapse" aria-labelledby="Connexion2" data-bs-parent="#accordionFlushConnexion">
                                <div class="accordion-body">
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" placeholder="Nouveau mot de passe" aria-label="Mdp" aria-describedby="button-addon2">
                                        <button class="btn btn-outline-secondary" type="sumbit" id="ChangementMdp">Changer de mot de passe</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="SousBoites" id="Deco">
                        <h3>Se déconecter</h3>
                        <button  class="btn btn-danger" >Se déconecter</button>
                    </div>
                </div>
            </section>
        </div>
        <script src="Index.js"></script>
        <script src="Account.js"></script>
    </body>
</html>