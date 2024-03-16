<?php
require_once("model/adherent.php");
require_once("controller/controllerObjet.php");

class controllerAdherent extends controllerObjet {
    public static string $classe = "adherent";
    protected static string $identifiant = "login";

    protected static $champs = [
        "login" => ["text", "identifiant"],
        "mdp" => ["password", "mot de passe"],
        "nomAdherent" => ["text", "nom"],
        "prenomAdherent" => ["text", "prénom"],
        "email" => ["email", "email"],
        "telephone" => ["text", "téléphone"]
    ];
}
?>