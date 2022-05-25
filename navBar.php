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
                    <a href="laboratoire.php">Laboratoire</a>
                </div>
            </div>
            <button onclick="location.href='AffichageRDV.php'">Rendez-vous</button>
            <button onclick="location.href='Account.php'">Votre Compte</button>
        </div>
        <div id="BarreRecherche">
            <form id="search" method="post" action="querySearch.php">
                <div id="Recherche">
                    <i class="fa-solid fa-magnifying-glass"></i><input type="text" autocomplete="off" placeholder="Nom, spécialité, ..."/>
                    <button type="submit" id="SubmitRecherche">Rechercher</button>
                </div>
            </form>
        </div>
    </div>
</header>
