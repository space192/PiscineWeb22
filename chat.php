<link rel="stylesheet" href="chat.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<button type="button" data-toggle="modal" data-target="#staticBackdrop" id="BoutonChater">
    Converser <i class="fa-solid fa-message"></i>
</button>
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-right"> <i class="fa fa-close close" data-dismiss="modal"></i> </div>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Discussion avec NOMDUMEDECIN</h5>
                </div>
                <div class="modal-body">
                    <div>
                        <h6>Bienvenue, User</h6>
                        <div id="ChatBox">

                        </div>
                        <br>
                        <div id="ZoneMessage">
                            <form action="message.php" method="post">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Tapez votre message" aria-label="Message" aria-describedby="bouton-envoyer">
                                    <button class="btn btn-outline-secondary" type="button" id="bouton-envoyer">Envoyer <i class="fa-solid fa-paper-plane"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Quitter la conversation</button>
                </div>
            </div>
        </div>
    </div>
</div>