<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="ex-with-icons-tab-1">
    <form method="post" action="queryAccount.php">
        <br>
        <!-- Email input -->
        <div class="form-floating mb-3">
            <input type="email" name="Mail" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>

        <!-- Password input -->
        <div class="form-floating">
            <input type="password" name="pwd" class="form-control" id="floatingPasswordL" placeholder="Password">
            <label for="floatingPasswordL">Password</label>
        </div>
        <div style="margin-left : 35%;text-align : left;">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="souvenir">
                <label class="form-check-label" for="flexSwitchCheckChecked">Se souvenir de moi</label>
            </div>
        </div>
        <br>
        <input hidden name="query" value="4" />
        <!-- Submit button -->
        <button type="submit" class="btn btn-light btn-block mb-4">Se connecter</button>
    </form>
</div>