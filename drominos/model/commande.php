<?php

require_once("model/objet.php");

class commande extends objet {
    protected static string $classe = "commande";
    protected static string $identifiant = "id_commande";

    protected int $idCommande;
    protected int $statutCommande;
    protected bool $enLigne;
    protected int $idClient;

    public function __construct(int $idCommande = NULL, int $statutCommande = NULL, bool $enLigne = NULL, int $idClient = NULL) {
        if (!is_null($idCommande)) {
            $this->idCommande = $idCommande;
            $this->statutCommande = $statutCommande;
            $this->enLigne = $enLigne;
            $this->idClient = $idClient;
        }
    }

    public function __toString() {
        return "Commande n°$idCommande (statut: $statutCommande, en ligne: $enLigne";
    }
}

?>