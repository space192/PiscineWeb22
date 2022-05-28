<?php
include_once 'const.php';
session_destroy();
if(isset($_COOKIE["LOGGED_USER"]))
{
    setcookie("LOGGED_USER", "", time()-(60*60*24*7));
    unset($_COOKIE["LOGGED_USER"]);
    setcookie("LOGGED_USER", null, -1, '/');
}
if(isset($_COOKIE["Prenom"]))
{
    setcookie("Prenom", "", time()-(60*60*24*7));
    unset($_COOKIE["Prenom"]);
    setcookie("Prenom", null, -1, '/');
}
if(isset($_COOKIE["ID"]))
{
    setcookie("ID", "", time()-(60*60*24*7));
    unset($_COOKIE["ID"]);
    setcookie("ID", null, -1, '/');
}
if(isset($_COOKIE["ADMIN"]))
{
    setcookie("ADMIN", "", time()-(60*60*24*7));
    unset($_COOKIE["ADMIN"]);
    setcookie("ADMIN", null, -1, '/');
}
header('Location: Account.php');
die;
?>