<?php
// test de la request_method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Test de la méthode post
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $mot_de_passe = $_POST["mot_de_passe"];

    // Ajoutez ici votre logique de validation et de sécurité

    // Affiche les données (à des fins de démonstration)
    echo "Nom: " . $nom . "<br>";
    echo "Prénom: " . $prenom . "<br>";
    echo "Email: " . $email . "<br>";

    // Ajoutez ici la logique pour stocker les données dans votre base de données

    // Vous pouvez rediriger l'utilisateur vers une page de succès, par exemple
    // header("Location: page_de_succes.php");
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/user.css">
    <title>Formulaire de Création de Compte</title>
</head>
<body>
    <h2>Créer un compte</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" required><br>

        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="mot_de_passe">Mot de passe:</label>
        <input type="password" name="mot_de_passe" required><br>

        <input type="submit" value="Créer le compte">
    </form>
</body>
</html>
