<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement des données de l'adresse client</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            color: #333;
        }
        h2 {
            text-align: center;
            color: #ff6347;
            text-shadow: 1px 1px 5px rgba(0,0,0,0.2);
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 2px solid #ff6347;
        }
        th {
            background-color: #ff6347;
            color: white;
        }
        td {
            background-color: #ffe4e1;
        }
        tr:hover td {
            background-color: #f7b7b7;
        }
        .message {
            text-align: center;
            color: #ff6347;
            font-size: 1.2em;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <h2>Informations de l'adresse client</h2>

    <?php
    // Vérification si les données ont été envoyées via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupération des données envoyées par le formulaire
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $adresse = htmlspecialchars($_POST['adresse']);
        $ville = htmlspecialchars($_POST['ville']);
        $codePostal = htmlspecialchars($_POST['codePostal']);

        // Affichage des données dans un tableau
        echo "<table>
                <tr><th>Nom</th><td>$nom</td></tr>
                <tr><th>Prénom</th><td>$prenom</td></tr>
                <tr><th>Adresse</th><td>$adresse</td></tr>
                <tr><th>Ville</th><td>$ville</td></tr>
                <tr><th>Code Postal</th><td>$codePostal</td></tr>
              </table>";
    } else {
        echo "<p class='message'>Aucune donnée reçue. Veuillez remplir le formulaire.</p>";
    }
    ?>
</body>
</html>
