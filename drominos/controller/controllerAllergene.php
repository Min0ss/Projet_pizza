<?php
require_once("model/allergene.php");
require_once("controller/controllerObjet.php");

class controllerAllergene extends controllerObjet {
    public static string $classe = "allergene";
    protected static string $identifiant = "idAllergene";

    protected static $champs = [
        "nomAllergene" => ["text", "nom de l'allergène"],
    ];
}
?>