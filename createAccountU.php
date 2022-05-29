<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="ex-with-icons-tab-2">
    <form method="post" action="queryAccount.php">
        <br>
        <div class="row">
            <div class="col-12 col-md-6 mb-4">
                <div class="form mb-3">
                    <input type="text" name="Prenom" class="form-control" id="floatingInputPrenom" placeholder="Prénom" required>
                    <label for="floatingInputPrenom">Prénom</label>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <div class="form mb-3">
                    <input type="text" name="Nom" class="form-control" id="floatingInputNom" placeholder="Nom" required>
                    <label for="floatingInputNom">Nom</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 mb-4">
                <div class="form mb-3">
                    <input maxlength="10" minlength="10" name="Telephone" class="form-control" id="floatingInputTel" placeholder="Téléphone" pattern='^[0-9]*$' required>
                    <label for="floatingInputTel">Téléphone</label>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <div class="form mb-3">
                    <input type="text" name="Pays" class="form-control" id="floatingInputPays" placeholder="Pays" required>
                    <label for="floatingInputPays">Pays</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 mb-4">
                <div class="form mb-3">
                    <input type="text" name="Adresse_ligne1" class="form-control" id="floatingInputADL1" placeholder="Addresse ligne 1" required>
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
                    <input type="text" name="Ville" class="form-control" id="floatingInputVille" placeholder="Ville" required>
                    <label for="floatingInputVille">Ville</label>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <div class="form mb-3">
                    <input type="text" name="Code_postal" class="form-control" id="floatingInputCP" placeholder="Code postal" pattern="^[0-9]*$" maxlength="5" minlength="5" required>
                    <label for="floatingInputCP">Code postal</label>
                </div>
            </div>
        </div>

        <div class="form mb-3">
            <input minlength="15" maxlength="15" pattern="^[0-9]*$" name="Carte_vital" class="form-control" id="floatingInputSecu" placeholder="Carte Vitale" required>
            <label for="floatingInputSecu">Numéro de sécurité sociale</label>
        </div>

        <!-- Email input -->
        <div class="form mb-3">
            <input type="email" name="Mail" class="form-control" id="floatingInputMail" placeholder="name@example.com" required>
            <label for="floatingInputMail">Email address</label>
        </div>

        <!-- Password input -->
        <div class="form">
            <input type="password" name="pwd" class="form-control" id="floatingPassword" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
        </div>
        <br>
        <input hidden name="query" value="1" />

        <div class="g-recaptcha" data-sitekey="6Ld-MiogAAAAAKHJaXqQAhIuJKm4yqOsfhmI5ymC"></div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-light btn-block mb-4">S'inscrire</button>
    </form>
</div>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>