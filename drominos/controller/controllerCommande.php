<?php
require_once("model/commande.php");
require_once("controller/controllerObjet.php");

class controllerCommande extends controllerObjet {
    public static string $classe = "commande";
    protected static string $identifiant = "id_commande";
}

?>