<!-- getAll sur controllerProduit.php -->
<div id="allProducts">
    <h2>Nos boissons</h2>
    <div id="allBoissons">
    <?php
        foreach($tableau as $produit) {
            if ($produit->get("est_boisson")) {
                echo "<div class='boissons'>";

                echo "<img length=50px, width=50px src='images/".$produit->get("image").".png' />";
                echo "<div class='espaceProduit'>";
                echo $produit->get("nom_prod")." ";
                echo $produit->get("prix_prod")."€";
                echo "<a href=index.php?action=addProduit&id_prod=".$produit->get("id_prod")."&panier=".$_GET["panier"]."> <img class=buyIcon src='images/acheter.png' /> </a>";
                echo "</div>";

                echo "</div>";
            }
        }
    ?>
    </div>

    <h2>Nos desserts</h2>
    <div id="allDesserts">
    <?php
        foreach($tableau as $produit) {
            if (!$produit->get("est_boisson")) {
                echo "<div class='desserts'>";

                echo "<img length=50px, width=50px src='images/".$produit->get("image").".png' />";
                echo "<div class='espaceProduit'>";
                echo $produit->get("nom_prod")." ";
                echo $produit->get("prix_prod")."€";
                echo "<a href=index.php?action=addProduit&id_prod=".$produit->get("id_prod")."&panier=".$_GET["panier"]."> <img class=buyIcon src='images/acheter.png' /> </a>";
                echo "</div>";

                echo "</div>";
            }
        }
    ?>
    </div>
</div>