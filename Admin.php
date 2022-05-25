<br><br>
<?php include_once 'queryAdmin.php'?>
<?php $result = getSpe();?>
<script src="Admin.js"></script>
<div class="Boites">
    <h2>Gestion des professionnels de santé</h2>
    <div class="SousBoites">
        <h3>Ajouter un professionnel de santé</h3>
        <form method="post" action="submitMedecin.php" enctype="multipart/form-data">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Prénom</span>
                <input type="text" id="pre" name="Prenom" class="form-control" placeholder="Prénom" aria-label="Prenom" aria-describedby="basic-addon1" oninput="SettextMail()" required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nom</span>
                <input type="text" id="nom" name="Nom" class="form-control" placeholder="Nom" aria-label="Nom" aria-describedby="basic-addon1" oninput="SettextMail()" required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Localisation</span>
                <input type="text" name="Localisation" class="form-control" placeholder="Localisation" aria-label="Localisation" aria-describedby="basic-addon1"  required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Date de naissance</span>
                <input type="date" name="naissance" class="form-control" aria-label="Date de Naissance" aria-describedby="basic-addon1"  required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Téléphone</span>
                <input type="text" name="Telephone" class="form-control" placeholder="Téléphone" aria-label="Téléphone" aria-describedby="basic-addon1" maxlength="10" minlength="10" pattern='^[0-9]*$' required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Email</span>
                <input type="text" class="form-control" placeholder="prenom.nom" id="mail" name="Mail" aria-label="Adresse email" aria-describedby="basic-addon2" readonly>
                <span class="input-group-text" id="basic-addon2">@fournierfamily.ovh</span>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Digicode</span>
                <input  class="form-control" placeholder="Digicode" aria-label="Digicode" aria-describedby="basic-addon1" pattern='^[0-9]*$' name="Digicode" minlength="4" maxlength="4" required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Photo de profil</span>
                <input type="file" class="form-control" name="pp" placeholder="Photo de profil" aria-label="Photo de profil" aria-describedby="basic-addon1"  required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Spécialité</span>
                <select class="form-select" name="spe" aria-label="Default select example" required>
                    <option disabled selected>Sélectionnez une spécialité</option>
                    <option value="0">Généraliste</option>
                    <?php foreach($result as $res):?>
                        <option value=<?php echo('"' .$res["ID_spe"]. '"');?>><?php echo($res["Nom_spe"]);?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <br>
            <h4>Diplômes</h4>
            <script>$(document).ready(function(){multipleDiplome();});</script>
            <div id="HTMLWrapperDiplome"></div>
            <div id="PlusMoins">
                <button type="button" onclick="decrementDiplome();multipleDiplome();">-</button><button type="button" onclick="incrementDiplome();multipleDiplome();">+</button>
            </div>
            <br>
            <h4>Expériences</h4>
            <script>$(document).ready(function(){multipleExperience();});</script>
            <div id="HTMLWrapper"></div>
            <div id="PlusMoins">
                <button type="button" onclick="decrementExp();multipleExperience();">-</button><button type="button" onclick="incrementExp();multipleExperience();">+</button>
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