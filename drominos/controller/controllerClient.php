<?php
require_once("model/client.php");
require_once("controller/controllerObjet.php");

class controllerClient extends controllerObjet {
    public static string $classe = "client";
    protected static string $identifiant = "id_client";

    protected static $champs = [
        "nom_client" => ["text", "nom"],
        "prenom_client" => ["text", "prénom"],
        "adr_client" => ["text", "adresse"],
        "tel_client" => ["text", "téléphone"],
        "reduction" => ["number", "réduction"], // a voir
        "mdp" => ["password", "mot de passe"]
    ];
}

?>