
<?php include_once 'const.php' ?>
<script src="https://kit.fontawesome.com/c6c9e611bb.js" crossorigin="anonymous"></script>
<header style="z-index :10;">
    <div id="BarrePrincipale">
        <a href="index.php"><img src="images/Decor/LogoOmnesSante2.png" alt="Omnes Santé" width="50px" height="50px"></a>
        <div id="Navigation">
            <button onclick="location.href='index.php'">Accueil</button>
            <div id="MenuDeroulant">
                <button onclick="menuDeroulant()" class="boutounDeroulant">Tout Parcourir</button>
                <div id="Options" class="contenu">
                    <a href='Medecins.php'>Médecin généraliste</a>
                    <a href="MedecinsS.php">Médecin spécialiste</a>
                    <a href="Laboratoire.php?IDL=1">Laboratoire</a>
                </div>
            </div>

            <?php if (isset($_SESSION["LOGGED"]) || isset($_COOKIE["LOGGED_USER"])) : ?>
                <button onclick="location.href='AffichageRDV.php'">Rendez-vous</button>
                <button onclick="location.href='Account.php'">Mon Compte</button>
            <?php else :?>
                <button onclick="location.href='Account.php'">Se Connecter</button>
            <?php endif;?>
        </div>
        <div id="BarreRecherche">
            <form id="search" method="post" action="querySearch.php">
                <div id="Recherche">
                    <i class="fa-solid fa-magnifying-glass" style="color: var(--eceText);"></i><input type="text" name="search" autocomplete="off" placeholder=" Nom, spécialité, ..."/>
                    <button type="submit" id="SubmitRecherche">Rechercher</button>
                </div>
            </form>
        </div>
    </div>
</header>