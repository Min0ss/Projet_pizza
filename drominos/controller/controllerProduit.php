<?php
require_once("model/produit.php");
require_once("controller/controllerObjet.php");

class controllerProduit extends controllerObjet {
    public static string $classe = "produit";
    protected static string $identifiant = "id_prod";

    protected static $champs = [
        "nom_prod" => ["text", "nom du produit"],
        "prix_prod" => ["number", "prix du produit"],
        "qte_stock" => ["number", "quantité du stock de produits disponibles"],
        "qte_min" => ["number", "quantit minimale de produits disponibles"],
    ];
}
?>