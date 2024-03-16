<?php
require_once("model/objet.php");
class Produit extends objet
{
    protected static string $classe = "produit";
    protected static string $identifiant = "idProd";

    protected string $id_prod;
    protected string $nom_prod;
    protected float $prix_prod;
    protected int $qte_stock;
    protected int $qte_min;
    protected bool $est_boisson;
    protected ?string $image;

    public function __construct(string $idProd = null, string $nomProd = null, float $prixProd=null, int $qteStockProd=null, int $qteMinProd=null, bool $estBoisson = NULL, string $image = NULL)
    {
        if (!is_null($idProd)) {
            $this->id_prod = $idProd;
            $this->nom_prod = $nomProd;
            $this->prix_prod = $prixProd;
            $this->qte_stock = $qteStockProd;
            $this->qte_min = $qteMinProd;
            $this->est_boisson = $estBoisson;
            $this->image = "images/".$image.".png";
        }
    }

    public function __toString(){
        return "Id produit : $this->id_prod, Nom du produit : $this->nom_prod, Prix du produit : $this->prix_prod €, Quantite du produit : $this->qte_stock, Quantité minimale requise du produit : $this->qte_min";
    }
}