<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>OMNES Santé : Les RDV de vos professionnels de santé</title>
        <meta name="description" content="Prenez facilement rendez-vous avec vos professionnels de santé et communiquez avec eux en direct.">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <link rel="stylesheet" href="Homepage.css">
        <link rel="icon" href="images/Decor/LogoOmnesSante2.ico">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div id="Toutenhaut">
            <div id="Darkmode"><button onclick="switchTheme()" title="Changer de thème de couleur">◐</button></div>
        <?php include 'Caroussel.php'?>
        </div>
        <div id="Wrapper">
            <?php include 'navBar.php'?>
            <section id="Milieu">
                <div class="Boites">
                <h1>Informations de Santé publique</h1>
                    <br>
                    <div class="SousBoites">
                        <a class="twitter-timeline" data-lang="fr" data-width="700" data-height="800" data-dnt="true" data-theme="dark" href="https://twitter.com/Sante_Gouv?ref_src=twsrc%5Etfw">Tweets by Sante_Gouv</a> 
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                    <br>
                    <h1>Evolution Covid-19</h1>
                    <br>
                    <div class="SousBoites">
                        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                        <div class="elfsight-app-686ec0cf-49ae-4588-9233-c93b27af2f75"></div>
                    </div>
                    <br>
                    <h1>Evènement de la semaine</h1>
                    <p>Mettre une info bidon.</p>
                    <h1>Les spécialistes de santé Omnes Santé</h1>
                    <p>Carrousel supplémentaire ou simplement des fiches profil.</p>
                    <div class="SousBoites">
                        <div id="CarrouselSpecialistes" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <h2>Aïcha Fémal</h2>
                                    <img src="images/Specialistes/Aicha_Femal.jpg" class="d-block w-100" alt="Aïcha_Fémal">
                                </div>
                                <div class="carousel-item">
                                    <h2>Alain Tuission</h2>
                                    <img src="images/Specialistes/Alain_Tuission.jpg" class="d-block w-100" alt="Alain Tuission">
                                </div>
                                <div class="carousel-item">
                                    <h2>Alex Pyration</h2>
                                    <img src="images/Specialistes/Alex_Pyration.jpg" class="d-block w-100" alt="Alex_Pyration">
                                </div>
                                <div class="carousel-item">
                                    <h2>Dénis Chon</h2>
                                    <img src="images/Specialistes/Denis_Chon.jpg" class="d-block w-100" alt="Dénis_Chon">
                                </div>
                                <div class="carousel-item">
                                    <h2>Luc Ratiffe</h2>
                                    <img src="images/Specialistes/Luc_Ratiffe.jpg" class="d-block w-100" alt="Luc_Ratiffe">
                                </div>
                                <div class="carousel-item">
                                    <h2>Octave Ergébel</h2>
                                    <img src="images/Specialistes/Octave_Ergebel.jpg" class="d-block w-100" alt="Octave_Ergebel">
                                </div>
                                <div class="carousel-item">
                                    <h2>Yves Remor</h2>
                                    <img src="images/Specialistes/Yves_Remor.jpg" class="d-block w-100" alt="Yves_Remor">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#CarrouselSpecialistes" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#CarrouselSpecialistes" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include 'footer.php' ?>
        <script src="Homepage.js"></script>
    </body>
</html>