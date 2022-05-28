<?php
include_once 'const.php';
if(isset($_COOKIE["LOGGED_USER"]))
{
    $to = $_COOKIE["LOGGED_USER"];
}
else if(isset($_SESSION["LOGGED"]))
{
    $to = $_SESSION["LOGGED"];
}
$subject = "RDV confirmé le " . $_POST["date"] . " à " . $_POST["heure"];
$message = "Votre rendez-vous est confirmé. En cas d'imprévu, pensez à le déplacer ou l'annuler le plus tôt possible.\nCordialement,\nL’équipe OMNES Santé";
echo($to);
echo("<br/>");
echo($subject);
echo("<br/>");
echo($message);
//mail($to,$subject,$message);
//header('Location: reserver.php');
//die;
?>