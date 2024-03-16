<!-- getAll sur controller.php -->
<div id="allPizza">
    <h2>Nos Pizzas</h2>
    <?php
        foreach($tableau as $pizza) {
            if ($pizza->get("est_pizza")) {
                echo "<div class='pizza'>";

                echo "<img length=50px, width=50px src='images/".$pizza->get("image").".png' />";
                echo "<div class='espacePizza'>";
                echo $pizza->get("nom_pizza")." ";
                echo $pizza->get("prix_pizza")."€";
                echo "<a href=index.php?action=addProduit&id_prod=".$pizza->get("id_recette")."&panier=".$_GET["panier"]."> <img class=buyIcon src='images/acheter.png' /> </a>";
                echo "</div>";

                echo "</div>";
            }
        }
    ?>
    </div>