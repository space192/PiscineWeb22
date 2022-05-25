<?php include 'queryAccount.php' ?>
<?php $result = getAccount() ?>
<link rel="stylesheet" href="MyAccount.css">
<div class="Boites">
    <h2>Modifier votre profil</h2>
    <div class="SousBoites">
        <?php
        if(isset($_GET["error"]))
        {
            if($_GET["error"] == '1')
            {
                echo('<div class="alert alert-danger" role="alert">
                Erreur l\'Adresse Mail est déjà utilisée !
              </div>
              ');
            }
        }
        ?>
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
                        <div class="Actuel">Nom actuel : <?php echo ($result["Nom"]); ?></div>
                        <div class="input-group mb-3">
                            <form method="post" action="queryAccount.php">
                                <input type="text" name="Nom" class="form-control" placeholder="Nom" aria-label="Nom" aria-describedby="button-addon2" required>
                                <button class="btn btn-outline-secondary" type="sumbit" id="ChangementNom">Changer le nom</button>
                                <input hidden name="query" value="5" />
                            </form>
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
                        <div class="Actuel">Prénom actuel : <?php echo ($result["Prenom"]); ?></div>
                        <div class="input-group mb-3">
                            <form method="post" action="queryAccount.php">
                                <input type="text" name="Prenom" class="form-control" placeholder="Prénom" aria-label="Prénom" aria-describedby="button-addon2" required>
                                <button class="btn btn-outline-secondary" type="sumbit" id="ChangementPrenom">Changer le prénom</button>
                                <input hidden name="query" value="5" />
                            </form>
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
                        <div class="Actuel">Numéro de carte vitale actuel : <?php echo ($result["Carte_vital"]); ?></div>
                        <div class="input-group mb-3">
                            <form method="post" action="queryAccount.php">
                                <input name="Carte_vital" class="form-control" placeholder="Nouveau numéro de sécurité sociale" aria-label="Sécurité Sociale" pattern="^[0-9]*$" minlength="15" maxlength="15" aria-describedby="button-addon2" required>
                                <button class="btn btn-outline-secondary" type="sumbit" id="ChangementCarteVitale">Changer le numéro</button>
                                <input hidden name="query" value="5" />
                            </form>
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
                        <div class="Actuel">Adresse actuelle : <?php echo ($result["Adresse_ligne1"]); if (isset($result["Adresse_ligne2"])) : echo (" " .$result["Adresse_ligne2"]); endif; ?></div>
                        <div class="input-group mb-3">
                            <form method="post" action="queryAccount.php">
                                <input type="text" name="Adresse_ligne1" class="form-control" placeholder="Adresse ligne 1" aria-label="AdresseL1" aria-describedby="button-addon2" required>
                                <input type="text" name="Adresse_ligne2" class="form-control" placeholder="Adresse ligne 2" aria-label="AdresseL2" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="sumbit" id="ChangementAdresse">Changer l'adresse</button>
                                <input hidden name="query" value="5" />
                            </form>
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
                        <div class="Actuel">Ville actuelle : <?php echo ($result["Ville"]); ?></div>
                        <div class="input-group mb-3">
                            <form method="post" action="queryAccount.php">
                                <input type="text" name="Ville" class="form-control" placeholder="Ville" aria-label="Ville" aria-describedby="button-addon2" required>
                                <button class="btn btn-outline-secondary" type="sumbit" id="ChangementVille">Changer la ville</button>
                                <input hidden name="query" value="5" />
                            </form>
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
                        <div class="Actuel">Code postal actuel : <?php echo ($result["Code_postal"]); ?></div>
                        <div class="input-group mb-3">
                            <form method="post" action="queryAccount.php">
                                <input type="text" name="Code_postal" class="form-control" placeholder="Code postal" aria-label="CodePostal" aria-describedby="button-addon2" pattern="^[0-9]*$" minlength="5" maxlength="5" required>
                                <button class="btn btn-outline-secondary" type="sumbit" id="ChangementCP">Changer le code postal</button>
                                <input hidden name="query" value="5" />
                            </form>
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
                        <div class="Actuel">Pays actuel : <?php echo ($result["Pays"]); ?></div>
                        <div class="input-group mb-3">
                            <form method="post" action="queryAccount.php">
                                <input type="text" name="Pays" class="form-control" placeholder="Pays" aria-label="Pays" aria-describedby="button-addon2" required>
                                <button class="btn btn-outline-secondary" type="sumbit" id="ChangementCP">Changer le Pays</button>
                                <input hidden name="query" value="5" />
                            </form>
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
                        <div class="Actuel">Numéro de téléphone actuel : <?php echo ("0" . $result["Telephone"]); ?></div>
                        <div class="input-group mb-3">
                            <form method="post" action="queryAccount.php">
                                <input name="Telephone" class="form-control" placeholder="Nouveau numéro de téléphone" aria-label="Telephone" pattern="^[0-9]*$" minlength="10" maxlength="10" aria-describedby="button-addon2" required>
                                <button class="btn btn-outline-secondary" type="sumbit" id="ChangementTelephone">Changer le numéro de téléphone</button>
                                <input hidden name="query" value="5" />
                            </form>
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
                        <div class="Actuel">Adresse email actuelle : <?php echo ($result["Mail"]); ?></div>
                        <div class="input-group mb-3">
                            <form method="post" action="queryAccount.php">
                                <input type="email" name="Mail" class="form-control" placeholder="Nouvelle adresse email" aria-label="Mail" aria-describedby="button-addon2" required>
                                <button class="btn btn-outline-secondary" type="sumbit" id="ChangementMail">Changer l'adresse mail'</button>
                                <input hidden name="query" value="5" />
                            </form>
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
                            <form method="post" action="queryAccount.php">
                                <input type="password" name="pwd" class="form-control" placeholder="Nouveau mot de passe" aria-label="Mdp" aria-describedby="button-addon2" required>
                                <button class="btn btn-outline-secondary" type="sumbit" id="ChangementMdp">Changer de mot de passe</button>
                                <input hidden name="query" value="5" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="SousBoites" id="Deco">
        <h3>Se déconecter</h3>
        <form method="post" action="disconnect.php">
            <button class="btn btn-danger">Se déconecter</button>
        </form>
    </div>
</div>