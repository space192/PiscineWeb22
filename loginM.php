<div class="tab-pane fade" id="nav-doctor" role="tabpanel" aria-labelledby="ex-with-icons-tab-1">
    <form method="post" action="queryAccount.php">
        <br>
        <div class="row">
            <div class="col-12 col-md-6 mb-4">
                <div class="form-floating mb-3">
                    <input type="text" name="Prenom" class="form-control" id="floatingInputPrenom" placeholder="Prénom">
                    <label for="floatingInputPrenom">Prénom</label>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <div class="form-floating mb-3">
                    <input type="text" name="Nom" class="form-control" id="floatingInputNom" placeholder="Nom">
                    <label for="floatingInputNom">Nom</label>
                </div>
            </div>
        </div>
        <div class="form-floating mb-3">
            <input type="email" name="Mail" class="form-control" id="floatingInputMail" placeholder="name@example.com">
            <label for="floatingInputMail">Email address</label>
        </div>
        <input hidden name="query" value="3" />
        <!-- Submit button -->
        <button type="submit" class="btn btn-light btn-block mb-4">Se connecter</button>
    </form>
</div>