<?php

require_once("objet.php");

class recette {
    protected static string $classe = "recette";
    protected static string $identifiant = "id_recette";

    protected int $id_recette;
    protected string $nom_recette;
    protected float $prix_recette;

    public function __construct(int $id_recette = NULL, string $nom_recette = NULL, float $prix_recette = NULL){
    if (!is_null($id_recette)) {
        $this->id_recette = $id_recette;
        $this->nom_recette = $nom_recette;
        $this->prix_recette = $prix_recette;
    }
}

    public function __toString(){
        return "identifiant recette" . $this->id_recette . " (" . $this->nom_recette . " " . $this->prix_recette . ")";
    }
}

?>