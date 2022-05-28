<link rel="stylesheet" href="chat.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<div class="modal fade" id=<?php echo('"staticBackdrop' . (isset($_SESSION["Medecin"]) ? $res["ID"] :$id) .'"')?> data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-right"> <i class="fa fa-close close" data-dismiss="modal"></i> </div>
                <div class="modal-header">
                    <?php
                    if(!isset($_SESSION["Medecin"]))
                    {
                        if(isset($_COOKIE["Prenom"]))
                        {
                            $tempP = $_COOKIE["Prenom"];
                        }
                        else if(isset($_SESSION["Prenom"]))
                        {
                            $tempP = $_SESSION["Prenom"];
                        }
                        if(isset($_COOKIE["ID"]))
                        {
                            $tempID = $_COOKIE["ID"];
                        }
                        else if(isset($_SESSION["ID"]))
                        {
                            $tempID = $_SESSION["ID"];
                        }
                    }
                    $fileName = "chat/log-" . $id . "-" . $tempID . ".html";
                    if (file_exists("$fileName") && filesize("$fileName") > 0) {
                        $contents = file_get_contents($fileName);
                    }
                    else
                    {
                        $myfile = fopen($fileName,"w");
                        fclose($myfile);
                    }
                    ?>
                    <h5 class="modal-title" id=<?php echo('"modal' . (isset($_SESSION["Medecin"]) ? $res["ID"] :$id) .'"')?>>Discussion avec <?php if(isset($_SESSION["Medecin"])) : echo("Mr. " . $res["Nom"]); else: echo("Dr. " . $elem["Nom"]); endif;?></h5>
                </div>
                <div class="modal-body">
                    <div>
                        <h6>Bienvenue, <?php echo($tempP) ;?></h6>
                        <div class="ChatBox" id=<?php echo('"ChatBox' . (isset($_SESSION["Medecin"]) ? $res["ID"] :$id) .'"')?>>
                        </div>
                        <br>
                        <div class="ZoneMessage">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id=<?php echo('"usermsg' . (isset($_SESSION["Medecin"]) ? $res["ID"] :$id) .'"')?> placeholder="Tapez votre message" aria-label="Message" aria-describedby="bouton-envoyer">
                                <button class="btn btn-outline-secondary" id=<?php echo('"boutton-envoyer' . (isset($_SESSION["Medecin"]) ? $res["ID"] :$id) .'"')?> type="button" class="bouton-envoyer">Envoyer <i class="fa-solid fa-paper-plane"></i></button>
                            </div>
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

<script type="text/javascript">
    // jQuery Document
    $(document).ready(function() {
        $(<?php echo('"#boutton-envoyer' . (isset($_SESSION["Medecin"]) ? $res["ID"] :$id) .'"')?>).click(function() {
            var clientmsg = $(<?php echo('"#usermsg' . (isset($_SESSION["Medecin"]) ? $res["ID"] :$id) .'"')?>).val();
            $.post("message.php", {
                text: clientmsg,
                filename : <?php echo('"'.$fileName .'"')?>,
                username : <?php echo('"' .$tempP . '"')?>
            });
            $(<?php echo('"#usermsg' . (isset($_SESSION["Medecin"]) ? $res["ID"] :$id) .'"')?>).val("");
            return false;
        });

        function loadLog() {
            var oldscrollHeight = $(<?php echo('"#ChatBox' . (isset($_SESSION["Medecin"]) ? $res["ID"] :$id) .'"')?>)[0].scrollHeight - 20; //Hauteur de défilement avant la requête
            $.ajax({
                url: <?php echo('"'.$fileName .'"')?>,
                cache: false,
                success: function(html) {
                    $(<?php echo('"#ChatBox' . (isset($_SESSION["Medecin"]) ? $res["ID"] :$id) .'"')?>).html(html); //Insérez le log de chat dans la #chatbox div
                    //Auto-scroll
                    var newscrollHeight = $(<?php echo('"#ChatBox' . (isset($_SESSION["Medecin"]) ? $res["ID"] :$id) .'"')?>)[0].scrollHeight - 20; //Hauteur de défilement apres la requête
                    if (newscrollHeight > oldscrollHeight) {
                        $(<?php echo('"#ChatBox' . (isset($_SESSION["Medecin"]) ? $res["ID"] :$id) .'"')?>).animate({
                            scrollTop: newscrollHeight
                        }, 'normal'); //Défilement automatique
                    }
                }
            });
        }
        $(<?php echo('"staticBackdrop' . (isset($_SESSION["Medecin"]) ? $res["ID"] :$id) .'"')?>).is(":visible")
        {
            setInterval(loadLog, 2500);
        }
    });
</script>