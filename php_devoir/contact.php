<?php
echo "<h2 style='text-align: center; color: #007bff;'>Contactez-nous</h2>";

echo "<div style='max-width: 800px; margin: auto; padding: 20px; background: #f9f9f9; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);'>";

// Afficher un message d'accueil
echo "<p style='font-size: 1.2em; color: #333;'>Si vous avez des questions, souhaitez obtenir plus d'informations sur nos biens immobiliers ou débuter votre recherche, n'hésitez pas à nous contacter via le formulaire ci-dessous.</p>";

// Formulaire de contact
echo "<form action='traitement_contact.php' method='POST'>";
echo "<div style='margin-bottom: 15px;'>";
echo "<label for='nom' style='font-size: 1.1em; color: #333;'>Nom :</label>";
echo "<input type='text' id='nom' name='nom' required style='width: 100%; padding: 10px; margin-top: 5px; border-radius: 5px; border: 1px solid #ccc;'>";
echo "</div>";

echo "<div style='margin-bottom: 15px;'>";
echo "<label for='prenom' style='font-size: 1.1em; color: #333;'>Prénom :</label>";
echo "<input type='text' id='prenom' name='prenom' required style='width: 100%; padding: 10px; margin-top: 5px; border-radius: 5px; border: 1px solid #ccc;'>";
echo "</div>";

echo "<div style='margin-bottom: 15px;'>";
echo "<label for='email' style='font-size: 1.1em; color: #333;'>Email :</label>";
echo "<input type='email' id='email' name='email' required style='width: 100%; padding: 10px; margin-top: 5px; border-radius: 5px; border: 1px solid #ccc;'>";
echo "</div>";

echo "<div style='margin-bottom: 15px;'>";
echo "<label for='message' style='font-size: 1.1em; color: #333;'>Message :</label>";
echo "<textarea id='message' name='message' rows='5' required style='width: 100%; padding: 10px; margin-top: 5px; border-radius: 5px; border: 1px solid #ccc;'></textarea>";
echo "</div>";

echo "<div style='text-align: center;'>";
echo "<input type='submit' value='Envoyer le message' style='background-color: #007bff; color: white; padding: 12px 25px; border-radius: 5px; border: none; cursor: pointer; font-size: 1.1em;'>";
echo "</div>";
echo "</form>";

echo "<p style='font-size: 1.2em; color: #333; text-align: center;'>Nous reviendrons vers vous dès que possible !</p>";

echo "</div>";
?>
