<?php
class objet {
    public function get($attribut) {
        return $this->$attribut;
    }

    public function set($attribut, $valeur) : void {
        $this->$attribut = $valeur;
    }

    public static function getAll() {
        $classeRecuperee = strtoupper(static::$classe);
        $requete = "SELECT * FROM $classeRecuperee;";
        $resultat = connexion::pdo()->query($requete);
        $resultat->setfetchmode(PDO::FETCH_CLASS, $classeRecuperee);
        $tableau = $resultat->fetchAll();
        return $tableau;
    }

    public static function getOne($id) {
        $classeRecuperee = static::$classe;
        $identifiant = static::$identifiant;

        $requetePreparee = "SELECT * FROM $classeRecuperee WHERE $identifiant = :id_tag;";

        $resultat = connexion::pdo()->prepare($requetePreparee);

        $tags = array("id_tag" => $id);

        try {
            $resultat->execute($tags);
            $resultat->setFetchmode(PDO::FETCH_CLASS, $classeRecuperee);

            $element = $resultat->fetch();
            return $element;
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function delete($id) {
        $classeRecuperee = static::$classe;
        $identifiant = static::$identifiant;

        $requetePreparee = "DELETE FROM $classeRecuperee WHERE $identifiant = :id_tag;";
    
        $resultat = connexion::pdo()->prepare($requetePreparee);

        $tags = ["id_tag" => $id];

        try {
            $resultat->execute($tags);
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function get_nom_id() {
        return static::$identifiant;
    }

    public static function create($donnees) {
        $classeRecuperee = static::$classe;

        // attributs et valeurs
        $attrs = "(";
        $valAttrs = "(";

        foreach ($donnees as $cle => $val) {
            $attrs = $attrs.$cle.", ";
            $valAttrs = $valAttrs.":".$cle.", ";
        }

        $attrs = rtrim($attrs, ", ").")"; //rtrim -> right trim, enlève le 2nd parametre de la fin du 1er s'il est trouvé
        $valAttrs = rtrim($valAttrs, ", ").")";

        // requete
        $requetePreparee = "INSERT INTO ".$classeRecuperee.$attrs." VALUES ".$valAttrs.";";

        $resultat = connexion::pdo()->prepare($requetePreparee);

        /*
        debug:
            echo $requetePreparee;
            echo "<pre>";
            var_dump($donnees);
            echo"</pre>";
        */
        try {
            $resultat->execute($donnees);
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getSelect() {
        $classeRecuperee = static::$classe;
        $identifiant = static::$identifiant;
        $tableauSelect = static::$tableauSelect;

        // a finir tp 10 ex 1 q. 2 b/
    }
}
?>