<br><br>
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
            <button type="submit" class="BoutonEnvoi">Ajouter le profil</button>
        </form>
    </div>
    <br>
    <div class="SousBoites">
        <h3>Supprimer un professionnel de santé</h3>
        <table class="table">
            <thead>
                <tr>
                    <td>Prénom</td>
                    <td>Nom</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Octave</td>
                    <td>Ergébel</td>
                    <td><button>Supprimer</button></td>
                </tr>
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
                <tr>
                    <td>Octave</td>
                    <td>Ergébel</td>
                    <td>test@example.com</td>
                    <td><button>Promouvoir en administrateur</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>