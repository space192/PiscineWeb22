<?php
function card($elem)
{
    $id = $elem["ID"];
    echo ('<div id="card">
        <div class="options">
        <div class="profil">
        <div class="titre" >');
    echo ($elem["Prenom"] . " " . $elem["Nom"]);
    echo ('</div>');

    echo ('<div class="photo">');
    echo ('<img src="' . $elem["pp"] . '" class="image">');
    echo ('</div> ');
    
    echo('</div><div class="details">');
    if (isset($_SESSION["LOGGED"]) || isset($_COOKIE["LOGGED_USER"]))
    {
        echo('<button class="button"  onclick="showContact(' . $elem["dispo"] . $id . ')">Prendre un rendez vous </button>');
        echo('<button class="button" type="button" data-toggle="modal" data-target="#staticBackdrop'.$id .'">Communiquez avec le médecin</button>');
        include 'chat.php';
    }
    
    
    echo ('<button class="button"' . 'onclick="location.href=' . "'CV.php?ID=" . $id . "'" . '"' . '>Voir son CV</button>
            </div> </div><div class="general">
            <div class="information-contact">');

    echo ('Localisation : ');
    echo ($elem["Localisation"]);
    echo ('<br>');
    echo ('Téléphone : ');
    echo ("0" . $elem["Telephone"]);
    echo ('<br>');
    echo ('Mail : ');
    echo ($elem["Mail"]);
    echo ('<br>');

    echo ('</div><table class="tableDispo"><thead><tr><th colspan="7">Disponibilitées</th></tr></thead>
         <tbody>
             <tr>
                <td colspan=""></td>
                 <td colspan="">L</td>
                 <td colspan="">M</td>
                 <td colspan="">M</td>
                 <td colspan="">J</td>
                 <td colspan="">V</td>
                 <td colspan="">S</td>
             </tr>
             <tr><td>Matin</td>');
    for ($i = 0; $i < 6; $i++) {
        if (substr($elem["dispo"], $i * 2, 1) == '1') {
            echo ('<td class="dispo">O</td> ');
        } else {
            echo ('<td class="nonDispo">N</td> ');
        }
    }
    echo ('  </tr><tr><td>Après-Midi</td>');
    for ($i = 0; $i < 6; $i++) {
        if (substr($elem["dispo"], $i * 2 + 1, 1) == '1') {
            echo ('<td class="dispo">O</td> ');
        } else {
            echo ('<td class="nonDispo">N</td> ');
        }
    }
    echo ('</tr></tbody></table></div></div>
    ');
}
?>