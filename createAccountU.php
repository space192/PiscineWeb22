<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="ex-with-icons-tab-2">
    <form method="post" action="queryAccount.php">
        <br>
        <div class="row">
            <div class="col-12 col-md-6 mb-4">
                <div class="form mb-3">
                    <input type="text" name="Prenom" class="form-control" id="floatingInputPrenom" placeholder="Prénom">
                    <label for="floatingInputPrenom">Prénom</label>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <div class="form mb-3">
                    <input type="text" name="Nom" class="form-control" id="floatingInputNom" placeholder="Nom">
                    <label for="floatingInputNom">Nom</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 mb-4">
                <div class="form mb-3">
                    <input type="number" name="Telephone" class="form-control" id="floatingInputTel" placeholder="Téléphone">
                    <label for="floatingInputTel">Téléphone</label>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <div class="form mb-3">
                    <input type="text" name="Pays" class="form-control" id="floatingInputPays" placeholder="Pays">
                    <label for="floatingInputPays">Pays</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 mb-4">
                <div class="form mb-3">
                    <input type="text" name="Adresse_ligne1" class="form-control" id="floatingInputADL1" placeholder="Addresse ligne 1">
                    <label for="floatingInputADL1">Addresse ligne 1</label>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <div class="form mb-3">
                    <input type="text" name="Adresse_ligne2" class="form-control" id="floatingInputADL2" placeholder="Addresse ligne 2">
                    <label for="floatingInputADL2">Addresse ligne 2</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 mb-4">
                <div class="form mb-3">
                    <input type="text" name="Ville" class="form-control" id="floatingInputVille" placeholder="Ville">
                    <label for="floatingInputVille">Ville</label>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <div class="form mb-3">
                    <input type="text" name="Code_postal" class="form-control" id="floatingInputCP" placeholder="Code postal">
                    <label for="floatingInputCP">Code postal</label>
                </div>
            </div>
        </div>

        <div class="form mb-3">
            <input type="number" name="Carte_vital" class="form-control" id="floatingInputSecu" placeholder="Carte Vitale">
            <label for="floatingInputSecu">Numéro de sécurité sociale</label>
        </div>

        <!-- Email input -->
        <div class="form mb-3">
            <input type="email" name="Mail" class="form-control" id="floatingInputMail" placeholder="name@example.com">
            <label for="floatingInputMail">Email address</label>
        </div>

        <!-- Password input -->
        <div class="form">
            <input type="password" name="pwd" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <br>
        <input hidden name="query" value="1" />
        <!-- Submit button -->
        <button type="submit" class="btn btn-light btn-block mb-4">S'inscrire</button>
    </form>
</div>