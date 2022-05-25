<br><br>
<?php include_once 'queryAdmin.php'?>
<div class="Boites">
    <h2>Gestion des professionnels de santé</h2>
    <div class="SousBoites">
        <h3>Ajouter un professionnel de santé</h3>
        <form method="post" action="">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Prénom</span>
                <input type="text" class="form-control" placeholder="Prénom" aria-label="Prenom" aria-describedby="basic-addon1" required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nom</span>
                <input type="text" class="form-control" placeholder="Nom" aria-label="Nom" aria-describedby="basic-addon1"  required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Localisation</span>
                <input type="text" class="form-control" placeholder="Localisation" aria-label="Localisation" aria-describedby="basic-addon1"  required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Téléphone</span>
                <input type="text" class="form-control" placeholder="Téléphone" aria-label="Téléphone" aria-describedby="basic-addon1" maxlength="10" minlength="10" pattern='^[0-9]*$' required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Email</span>
                <input type="text" class="form-control" placeholder="prenom.nom" aria-label="Adresse email" aria-describedby="basic-addon2" required>
                <span class="input-group-text" id="basic-addon2">@fournierfamily.ovh</span>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Digicode</span>
                <input type="number" class="form-control" placeholder="Digicode" aria-label="Digicode" aria-describedby="basic-addon1" maxlength="4" required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Photo de profil</span>
                <input type="file" class="form-control" placeholder="Photo de profil" aria-label="Photo de profil" aria-describedby="basic-addon1"  required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Spécialité</span>
                <select class="form-select" aria-label="Default select example" required>
                    <option selected>Sélectionnez une spécialité</option>
                    <option value="0">Généraliste</option>
                    <option value="1">Addictologue</option>
                    <option value="2">Andrologue</option>
                    <option value="3">Cardiologue</option>
                    <option value="4">Dermatologue</option>
                    <option value="5">Gastro-Hépato-Entérologue</option>
                    <option value="6">Gynécologue</option>
                    <option value="7">Infirmière de Santé au Travail</option>
                    <option value="8">Ostéopathe</option>
                </select>
            </div>
            <br>
            <h4>Diplômes</h4>
            <div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Libellé</span>
                    <input type="text" class="form-control" placeholder="Libellé" aria-label="Libellé" aria-describedby="basic-addon1"  required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Année</span>
                    <input type="number" class="form-control" placeholder="Année d'obtention" aria-label="Annee" aria-describedby="basic-addon1" maxlength="4" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Institution</span>
                    <input type="text" class="form-control" placeholder="Institution" aria-label="Institution" aria-describedby="basic-addon1"  required>
                </div>
            </div>
            <div id="PlusMoins">
                <button>-</button><button>+</button>
            </div>
            <br>
            <h4>Expériences</h4>
            <div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Début</span>
                    <input type="number" class="form-control" placeholder="Année de début" aria-label="Debut" aria-describedby="basic-addon1" maxlength="4" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Fin</span>
                    <input type="number" class="form-control" placeholder="Année de fin" aria-label="Fin" aria-describedby="basic-addon1" maxlength="4" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Entreprise</span>
                    <input type="text" class="form-control" placeholder="Entreprise" aria-label="Entreprise" aria-describedby="basic-addon1"  required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Poste</span>
                    <input type="text" class="form-control" placeholder="Poste occupé" aria-label="Poste" aria-describedby="basic-addon1"  required>
                </div>
            </div>
            <div id="PlusMoins">
                <button>-</button><button>+</button>
            </div>
            <button type="submit" class="BoutonEnvoi">Ajouter le profil</button>
        </form>
    </div>
    <br>
    <div class="SousBoites">
        <h3>Supprimer un professionnel de santé</h3>
        <?php $result = getMed();?>
        <?php $result2 = getUsers();?>
        <table class="table">
            <thead>
                <tr>
                    <td>Prénom</td>
                    <td>Nom</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $res):?>
                    <tr>
                        <td><?php echo($res["Prenom"]);?></td>
                        <td><?php echo($res["Nom"]);?></td>
                        <td><form method="post" action="queryAdmin.php"><button name="ID" value=<?php echo('"'.$res["ID"].'"');?>>Supprimer</button><input hidden name="query" value="1"/></form></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
    <br>
</div>
<br>
<div class="Boites">
    <h2>Gestion des administrateurs</h2>
    <div class="SousBoites">
        <h3>Ajouter un administrateur</h3>
        <table class="table">
            <thead>
                <tr>
                    <td>Prénom</td>
                    <td>Nom</td>
                    <td>Email</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result2 as $res):?>
                    <tr>
                        <td><?php echo($res["Prenom"])?></td>
                        <td><?php echo($res["Nom"])?></td>
                        <td><?php echo($res["Mail"])?></td>
                        <td><form method="post" action="queryAdmin.php"><button name="ID" value=<?php echo('"'.$res["ID"].'"');?>>Promouvoir en administrateur</button><input hidden name="query" value="2"/></form></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>