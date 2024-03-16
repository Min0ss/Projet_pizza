<!DOCTYPE html>
<html lang="fr">
    <head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../../css/paiement.css">
<title>Formulaire de Paiement</title>
</head>
    <body>
        <form action="traitement_paiement.php" method="post">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>
            <label for="email">E-mail :</label>
            <input type="email" id="email" name="email" required>
            <label for="carte_credit">Numéro de carte de crédit :</label>
            <input type="text" id="carte_credit" name="carte_credit" pattern="[0-9]{16}"
            placeholder="1234 5678 9012 3456" required>
            <label for="date_expiration">Date d'expiration (MM/AA) :</label>
            <input type="text" id="date_expiration" name="date_expiration"
            pattern="(0[1-9]|1[0-2])\/[0-9]{2}" placeholder="MM/AA" required>
            <label for="code_securite">Code de sécurité :</label>
            <input type="text" id="code_securite" name="code_securite" pattern="[0-9]{3}"
            placeholder="123" required>
            <button type="submit">Payer</button>
        </form>
    </body>
</html>