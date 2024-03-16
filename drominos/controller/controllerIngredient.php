<?php
require_once("model/ingredient.php");
require_once("controller/controllerObjet.php");

class controllerIngredient extends controllerObjet {
    public static string $classe = "ingredient";
    protected static string $identifiant = "id_ingr";

    protected static $champs = [
        "nom_ingr" => ["text", "nom de l'ingrédient"],
        "prix_ingr" => ["number", "prix de l'ingrédient"],
        "qte_stock" => ["number", "quantité du stock d'ingrédients' disponibles"],
        "qte_min" => ["number", "quantit minimale d'ingrédients' disponibles"],
    ];
}
?>