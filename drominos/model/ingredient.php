<?php
require_once("model/objet.php");
class Ingredient extends objet
{
    protected static string $classe = "ingredient";
    protected static string $identifiant = "idIngr";


    protected string $idIngr;
    protected string $nomIngr;
    protected float $prixIngr;
    protected int $qteStockIngr;
    protected int $qteMinIngr;

    public function __construct(string $idIngr = Null, string $nomIngr = null, float $prixIngr=null, int $qteStockIngr=null, int $qteMinIngr=null)
    {
        if (!is_null($idIngr)) {
            $this->idIngr = $idIngr;
            $this->nomIngr = $nomIngr;
            $this->prixIngr = $prixIngr;
            $this->qteStockIngr = $qteStockIngr;
            $this->qteMinIngr = $qteMinIngr;
        }
    }
    public function __toString(){
        return "Id Ingrédient : $this->idIngr, Nom de l'ingrédient : $this->nomIngr, Prix de l'ingrédient : $this->prixIngr €, Quantite de l'ingrédient : $this->qteStockIngr, Quantité minimale requise de l'ingrédient : $this->qteMinIngr";
    }
}