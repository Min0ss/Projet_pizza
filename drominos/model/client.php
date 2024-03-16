<?php
require_once("model/objet.php");


class client extends objet {
    protected static string $classe = "client";
    protected static string $identifiant = "id_client";

    protected int $idClient;
    protected string $nomClient;
    protected string $prenomClient;
    protected string $adrClient;
    protected string $telClient;
    protected bool $reduction;
    protected string $mdp;

    public function __construct(string $idClient = NULL, string $nomClient = NULL, string $prenomClient = NULL, string $adrClient = NULL, string $telClient = NULL, bool $reduction = NULL, string $mdp = NULL){
        if (!is_null($idClient)) {
            $this->idClient = $idClient;
            $this->nomClient = $nomClient;
            $this->prenomClient = $prenomClient;
            $this->adrClient = $adrClient;
            $this->telClient = $telClient;
            $this->reduction = $reduction;
            $this->mdp = $mdp;
        }
    }

    public function __toString() {
        return "id Client :" . $this->idClient . "nom client" . $this-> nomClient . "prenom client" . $this->nomClient . "adresse client" . $this->adrClient . "telephone client" . $this->telClient . "une réduction ? " . $this->reduction;
    }
}
?>