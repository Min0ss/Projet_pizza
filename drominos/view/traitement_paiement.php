<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $carte_credit = $_POST["carte_credit"];
    $date_expiration = $_POST["date_expiration"];
    $code_securite = $_POST["code_securite"];

    echo "<h2>Confirmation de paiement</h2>";
    echo "<p>Merci, $nom, pour votre paiement.</p>";
    echo "<p>Un reçu a été envoyé à $email.</p>";

} else {
    header("Location: index.html");
    exit();
}
?>
