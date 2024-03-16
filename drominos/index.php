<?php
$objet = "produit";
$objets = ["produit"];

$action = "displayAll";
$actions = ["displayAll"/*, "displayOne", "delete", "displayCreationForm", "create"*/];
$requireId = [/*"displayOne", "delete"*/]; // actions nécessitant le passage d'un id dans l'url

$id = NULL;

// obtenir un identifiant ppour le panier
//! TODO: obtenir l'ID depuis la base
if (!isset($_GET["panier"])) {
    header("Location: https://projets.iut-orsay.fr/drominos/index.php?panier="."1");
}

if (isset($_GET["objet"]) && in_array($_GET["objet"], $objets)) {
    $objet = $_GET["objet"];
}

if (isset($_GET["action"]) && in_array($_GET["action"], $actions)) {
    $action = $_GET["action"];
}

$controller = "controller".ucfirst($objet); // ucfirst -> UpperCaseFirst
                                            // première lettre en majuscule
require_once("controller/$controller.php");
require_once("config/connexion.php");


connexion::connect();
match ($action) {
    "displayAll" => $controller::displayAll(),
    "displayOne" => $controller::displayOne($id),
    "delete" => $controller::delete($id),
    "displayCreationForm" => $controller::displayCreationForm(),
    "create" => $controller::create()
}
?>