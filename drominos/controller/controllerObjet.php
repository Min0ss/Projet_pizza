<?php
class controllerObjet {
    public static function displayAll() {
        $nomClasse = static::$classe;
        $title = "les ".$nomClasse."s";

        include("view/debut.php");
        include("view/menu.html");

        $tableau = $nomClasse::getAll();

        include("view/produit.php");
        include("view/fin.php");
    }

    public static function displayOne() {
        $nomClasse = static::$classe;
        $id = $_GET[static::$identifiant];
        $title = $nomClasse." ".$id;

        include("view/debut.php");
        include("view/menu.html");

        $element = $nomClasse::getOne($id);

        include("view/details.php");
        include("view/fin.php");
    }

    public static function delete() {
        $nomClasse = static::$classe;
        $id = $_GET[static::$identifiant];
        
        $nomClasse::delete($id);
        self::displayAll();
    }

    public static function displayCreationForm() {
        $champs = static::$champs;
        $nomClasse = static::$classe;
        $title = "création ".$nomClasse;

        include("view/debut.php");
        include("view/menu.html");
        include("view/formulaireCreation.php");
        include("view/fin.php");
    }

    public static function create() {
        $nomClasse = static::$classe;
        $champs = static::$champs;
        $donnees = [];

        foreach ($_GET as $cle => $val) {
            if (!in_array($cle, ["objet", "action"])) {
                $donnees[$cle] = $val;
            }
        }

        $nomClasse::create($donnees);
        self::displayAll();
    }
}
?>