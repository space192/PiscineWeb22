<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>CV</title>
    <meta name="description" content="Mon compte Omnes Santé">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <link rel="stylesheet" href="Index.css">
    <link rel="icon" href="images/Decor/LogoOmnesSante2.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/c6c9e611bb.js" crossorigin="anonymous"></script>
    <?php include_once 'const.php' ?>
    <?php if(isset($_GET["ID"])){$xmldata = simplexml_load_file("XML/".$_GET["ID"].".xml");};?>
</head>

<body>
    <?php 
    function RemoveAccents($string) {
        // From http://theserverpages.com/php/manual/en/function.str-replace.php
        $string = htmlentities($string);
        return preg_replace("/&([a-z])[a-z]+;/i", "$1", $string);
    }?>
    <div id="Wrapper">
        <header id="Header">
            <?php include 'navBar.php' ?>
            <?php include 'NavBarStatique.php' ?>
            <div id="Darkmode"><button onclick="switchTheme()" title="Changer de thème de couleur">◐</button></div>
        </header>
        <section id="Milieu">
            <div class="Boites">
                <div class="SousBoites" style="max-width: 70%;">
                    <div style="display : flex; align-content : flex-start; min-width:50%; min-height:400px;">
                        <div style="flex : 0.55; display:flex; flex-direction : column; padding : 10px">
                            <div style="flex:1; width:100%; display:flex; padding : 5%">
                                <div style="flex : 1; border-radius : 5%;">
                                    <?php echo('<img src="images/Generalistes/'. strtolower(RemoveAccents($xmldata->etatCivil->prenom)) ." ". strtolower(RemoveAccents($xmldata->etatCivil->nom)) .'.jpg" style="max-height : 200px; max-width : 200px" />');?> 
                                </div>
                            </div>
                            <div style="flex:0.9; width:100%; padding-top : 10%">
                                <p><?php echo($xmldata->etatCivil->prenom . " ".$xmldata->etatCivil->nom);?></p>
                                <p><?php echo (date("Y") - $xmldata->etatCivil->age); ?> ans</p>
                            </div>
                        </div>
                        <div style="flex : 2.5; display:flex; padding:10px">
                            <div style="flex : 1;text-align : left; padding-left: 5%;">
                                <h1>Diplome</h1>
                                <ul>
                                    <?php
                                    foreach($xmldata->diplomes->diplome as $di)
                                    {
                                        echo("<li>". $di->libelle. " (" . $di->institution ." " . $di->annee . ")</li>");
                                    }
                                    ?>
                                </ul>
                                <h1>Experiences</h1>
                                <ul>
                                    <?php
                                    foreach($xmldata->experiences->experience as $exp)
                                    {
                                        echo("<li>". $exp->poste. " (" . $exp->entreprise ." " . $exp->debut . "-" . $exp->fin . ")</li>");
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    <?php include 'footer.php' ?>
    <style>
        li
        {
            color: var(--textBase);
        }
    </style>
    <script src="Index.js"></script>
</body>

</html>