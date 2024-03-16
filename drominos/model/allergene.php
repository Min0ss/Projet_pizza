<?php

require_once("objet.php");

class allergene {
    protected static string $classe = "allergene";
    protected static string $identifiant = "login";

    protected int $idAllergene;
    protected string $nomAllergene;

    public function __construct(int $idAllergene = NULL, string $nomAllergene = NULL) {
        if (!is_null($idAllergene)) {
            $this-> idAllergene = $idAllergene;
            $this-> nomAllergene = $nomAllergene;
        }
    }

    public function __toString(){
        return "identifiant allergerne" . $this->idAllergene . " (" . $this->nomAllergene  . ")";
    }
}

?>