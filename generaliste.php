<?php


try {
    $mysqlConnection = new PDO(
        'mysql:host=fournierfamily.ovh;port=15621;dbname=OmnesSante;charset=utf8',
        'jps',
        'poojava'
    );
} catch (Exception $e) {
    die('Erreur :' . $e->getMessage());
}
$memberStatement = $mysqlConnection->prepare("SELECT * FROM Medecin WHERE  spe = 0;");
$memberStatement->execute();
$result = $memberStatement->fetchAll();

echo ('<div id="contenant">');
echo ('<div id="deroulant">');
foreach ($result as $elem) {

    $id = $elem["ID"];
    $memberStatement = $mysqlConnection->prepare("SELECT dispo FROM Plage_horraire WHERE ID_Medecin = $id  ");
    $memberStatement->execute();
    $plages = $memberStatement->fetch();
    echo ('<div id="card">
        <div id="options">
        <div id="profil">
        <div id="titre" >');
    echo ($elem["Prenom"] . " " . $elem["Nom"]);
    echo ('</div>');

    echo ('<div id="photo">');
    echo ('<img src="' . $elem["pp"] . '" id="image">');
    echo ('</div> ');
    
    echo('</div><div id="details">
         <button id="button"  onclick="showContact(');
    echo ($plages[0] . $id);
    echo (')">Prendre un rendez vous </button>
            <button id="button"  onclick="showChat()">Communiquez avec le médecin</button>
            <button id="button"  onclick="showContact()">Voir son CV</button>
            </div> </div><div id="general">
            <div id="information-contact">');

    echo ('Localisation :');
    echo ($elem["Localisation"]);
    echo ('<br>');
    echo ('Téléphone :');
    echo ($elem["Telephone"]);
    echo ('<br>');
    echo ('Mail :');
    echo ($elem["Mail"]);
    echo ('<br>');

    echo ('</div><table id="tableDispo"><thead><tr><th colspan="7">Disponibilitées</th></tr></thead>
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
        if (substr($plages[0], $i * 2, 1) == '1') {
            echo ('<td id="dispo">O</td> ');
        } else {
            echo ('<td id="nonDispo">N</td> ');
        }
    }
    echo ('  </tr><tr><td>Après-Midi</td>');
    for ($i = 0; $i < 6; $i++) {
        if (substr($plages[0], $i * 2 + 1, 1) == '1') {
            echo ('<td id="dispo">O</td> ');
        } else {
            echo ('<td id="nonDispo">N</td> ');
        }
    }
    echo ('</tr></tbody></table></div></div>
    ');
}
echo ('</div>');
echo ('</div>');
