<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .exercises-list {
            list-style-type: none;
            padding: 0;
        }
        .exercises-list li {
            background-color: #f9f9f9;
            margin: 5px 0;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        .exercises-list li a {
            text-decoration: none;
            color: #007bff;
        }
        .exercise-content {
            background-color: #f9f9f9;
            padding: 15px;
            margin-top: 20px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        /* Effet de survol (hover) */
.exercises-list li a:hover {
    color: white;
    background-color: #007bff;
    transition: background-color 0.3s ease, color 0.3s ease;
}

/* Effet de l'élément actif (lorsqu'un exercice est sélectionné) */
.exercises-list li a.active {
    color: white;
    background-color: #007bff; /* Couleur de fond après clic */
    font-weight: bold;
}

    </style>
</head>
<body>
    <div class="container">
        <h1>Devoir PHP</h1>
        <h2>presente par Pape magatte lo;Ami tounkara et Mareme </h2>
        
        <!-- Liste des exercices -->
        <ul class="exercises-list">
            <li><a href="?exercice=1">Exercice 1 : palindrome</a></li>
            <li><a href="?exercice=2">Exercice 2 : expression conditionnelle</a></li>
            <li><a href="?exercice=3">Exercice 3 : tirages</a></li>
            <li><a href="?exercice=4">Exercice 4 : ppcm</a></li>
            <li><a href="?exercice=5">Exercice 5 : diametre;perimetre;surface</a></li>
            <li><a href="?exercice=6">Exercice 6 : diviseurs</a></li>
            <li><a href="?exercice=7">Exercice 7 : nombre parfait</a></li>
            <li><a href="?exercice=8">Exercice 8 : calcul de moyenne;maximum;minimum</a></li>
            <li><a href="?exercice=9">Exercice 9 : tableau multidimentionel</a></li>
            <li><a href="?exercice=10">Exercice 10 : chaines de caracteres</a></li>
            <li><a href="?exercice=11">Exercice 11 : nombres de jour restants</a></li>
            <li><a href="?exercice=12">Exercice 12 : formulaires</a></li>
            <li><a href="?exercice=13">Exercice 13 : script</a></li>
            <li><a href="?exercice=14">Exercice 14 : formulaire de ht et tva</a></li>
            <li><a href="?exercice=15">Exercice 15 : formulaires avec trois boutons</a></li>
            <li><a href="?exercice=16">Exercice 16 : fonction</a></li>
            <li><a href="?exercice=17">Exercice 17 : fonction sinus</a></li>
        </ul>

        <!-- Contenu de l'exercice sélectionné -->
        <div class="exercise-content">
            <?php
            // Récupérer le numéro de l'exercice à afficher
            if (isset($_GET['exercice'])) {
                $exercice = $_GET['exercice'];
                
                // Afficher le contenu de l'exercice en fonction du numéro
                switch ($exercice) {
                    case 1:
                            echo "<h2 >Exercice 1 : Palindrome</h2>";
                            
                            // Vérification si le formulaire a été soumis
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                // Récupérer le mot saisi par l'utilisateur
                                $mot = $_POST['mot'];
                        
                                // Supprimer les espaces et convertir en minuscules pour une comparaison uniforme
                                $mot = strtolower(str_replace(' ', '', $mot));
                        
                                // Vérifier si le mot est un palindrome
                                $inverseMot = strrev($mot); // Inverser le mot
                        
                                if ($mot == $inverseMot) {
                                    echo "<p>Le mot '$mot' est un palindrome.</p>";
                                } else {
                                    echo "<p>Le mot '$mot' n'est pas un palindrome.</p>";
                                }
                            }
                            
                            // Afficher le formulaire
                            echo '<form method="post" action="">
                                    <label for="mot">Entrez un mot :</label>
                                    <input type="text" id="mot" name="mot" required>
                                    <input type="submit" value="Vérifier">
                                  </form>';
                            break;
                        
                    case 2:
                        
                            echo "<h2>Exercice 2 : Expression conditionnelle</h2>";
                            echo '<form method="post" action="">
                                    <label for="number">Entrez un nombre :</label>
                                    <input type="number" id="number" name="number" required>
                                    <input type="submit" value="Vérifier">
                                  </form>';
                            
                            // Traitement du formulaire
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                $number = intval($_POST['number']); // Convertir en entier
                        
                                // Vérifier si le nombre est un multiple de 3 et de 5
                                if ($number % 3 == 0 && $number % 5 == 0) {
                                    echo "<p>Le nombre $number est un multiple de 3 et de 5.</p>";
                                } else {
                                    echo "<p>Le nombre $number n'est pas un multiple de 3 et de 5.</p>";
                                }
                            }
                            break;
                        
                    case 3:
                        
                            echo "<h2>Exercice 3 : Tirages Aléatoires</h2>";
                            echo '<form method="post" action="">
                                    <label for="number">Entrez un nombre de trois chiffres (100-999) :</label>
                                    <input type="number" id="number" name="number" min="100" max="999" required>
                                    <input type="submit" value="Lancer les tirages">
                                  </form>';
                        
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                $number = intval($_POST['number']); // Convertir en entier
                                if ($number < 100 || $number > 999) {
                                    echo "<p>Veuillez entrer un nombre valide (entre 100 et 999).</p>";
                                } else {
                                    // Tirage avec `while`
                                    $tirage = 0;
                                    $count = 0;
                                    echo "<h3>Avec l'instruction `while`</h3>";
                                    while ($tirage != $number) {
                                        $tirage = rand(100, 999); // Tirage aléatoire entre 100 et 999
                                        $count++;
                                    }
                                    echo "<p>Nombre trouvé : $tirage après $count tirages.</p>";
                        
                                    // Tirage avec `for`
                                    echo "<h3>Avec l'instruction `for`</h3>";
                                    $tirage = 0;
                                    for ($count = 1; $tirage != $number; $count++) {
                                        $tirage = rand(100, 999);
                                    }
                                    echo "<p>Nombre trouvé : $tirage après $count tirages.</p>";
                                }
                            }
                            break;
                        
                    case 4:
                        
                            echo "<h2>Exercice 4 : Calcul du PPCM</h2>";
                            echo '<form method="post" action="">
                                    <label for="number1">Entrez le premier entier :</label>
                                    <input type="number" id="number1" name="number1" required>
                                    <br>
                                    <label for="number2">Entrez le deuxième entier :</label>
                                    <input type="number" id="number2" name="number2" required>
                                    <br>
                                    <input type="submit" value="Calculer le PPCM">
                                  </form>';
                        
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                $number1 = abs(intval($_POST['number1'])); // Premier entier positif
                                $number2 = abs(intval($_POST['number2'])); // Deuxième entier positif
                        
                                if ($number1 == 0 || $number2 == 0) {
                                    echo "<p>Le PPCM de 0 avec un autre nombre est indéfini.</p>";
                                } else {
                                    // Calcul du PPCM en utilisant la formule : PPCM(a, b) = (|a * b|) / PGCD(a, b)
                                    function gcd($a, $b) {
                                        while ($b != 0) {
                                            $temp = $b;
                                            $b = $a % $b;
                                            $a = $temp;
                                        }
                                        return $a;
                                    }
                        
                                    $pgcd = gcd($number1, $number2);
                                    $ppcm = ($number1 * $number2) / $pgcd;
                        
                                    echo "<p>Le PPCM de $number1 et $number2 est : $ppcm.</p>";
                                }
                            }
                            break;
                            case 5:
                                echo "<h2>Exercice 5 : Calcul du diamètre, périmètre et surface d'un cercle</h2>";
                                echo '<form method="post" action="">
                                        <label for="radius">Entrez le rayon du cercle :</label>
                                        <input type="number" id="radius" name="radius" step="0.01" min="0" required>
                                        <br>
                                        <input type="submit" value="Calculer">
                                      </form>';
                            
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    $radius = floatval($_POST['radius']); // Convertir en flottant
                            
                                    if ($radius <= 0) {
                                        echo "<p>Le rayon doit être un nombre positif supérieur à zéro.</p>";
                                    } else {
                                        // Calculs
                                        $diameter = 2 * $radius;
                                        $perimeter = 2 * pi() * $radius; // Formule : 2πr
                                        $surface = pi() * pow($radius, 2); // Formule : πr²
                            
                                        // Affichage des résultats
                                        echo "<p>Pour un cercle de rayon $radius :</p>";
                                        echo "<ul>
                                                <li>Diamètre : $diameter</li>
                                                <li>Périmètre : " . round($perimeter, 2) . "</li>
                                                <li>Surface : " . round($surface, 2) . "</li>
                                              </ul>";
                                    }
                                }
                                break;
                                case 6:
                                    echo "<h2>Exercice 6 : Afficher les diviseurs d'un nombre</h2>";
                                    echo '<form method="post" action="">
                                            <label for="number">Entrez un nombre :</label>
                                            <input type="number" id="number" name="number" required>
                                            <br>
                                            <input type="submit" value="Afficher les diviseurs">
                                          </form>';
                                
                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                        $number = intval($_POST['number']); // Convertir en entier
                                
                                        if ($number == 0) {
                                            echo "<p>Le nombre 0 a une infinité de diviseurs.</p>";
                                        } else {
                                            echo "<p>Les diviseurs de $number sont :</p>";
                                            echo "<ul>";
                                            for ($i = 1; $i <= abs($number); $i++) {
                                                if ($number % $i == 0) {
                                                    echo "<li>$i</li>";
                                                }
                                            }
                                            echo "</ul>";
                                        }
                                    }
                                    break;
                                    case 7:
                                        echo "<h2>Exercice 7 : Tester si un nombre est parfait</h2>";
                                        echo '<form method="post" action="">
                                                <label for="number">Entrez un nombre :</label>
                                                <input type="number" id="number" name="number" min="1" required>
                                                <br>
                                                <input type="submit" value="Tester">
                                              </form>';
                                    
                                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                            $number = intval($_POST['number']); // Convertir en entier positif
                                    
                                            if ($number < 1) {
                                                echo "<p>Veuillez entrer un nombre positif supérieur ou égal à 1.</p>";
                                            } else {
                                                // Calcul de la somme des diviseurs propres
                                                $sum = 0;
                                                for ($i = 1; $i < $number; $i++) {
                                                    if ($number % $i == 0) {
                                                        $sum += $i;
                                                    }
                                                }
                                    
                                                // Test si le nombre est parfait
                                                if ($sum == $number) {
                                                    echo "<p>Le nombre $number est un nombre parfait.</p>";
                                                } else {
                                                    echo "<p>Le nombre $number n'est pas un nombre parfait.</p>";
                                                }
                                            }
                                        }
                                        break;
                                        case 8:
                                            echo "<h2>Exercice 8 : Calcul de la moyenne, du maximum et du minimum</h2>";
                                            echo '<form method="post" action="">
                                                    <label for="numbers">Entrez des nombres entiers séparés par des virgules :</label>
                                                    <input type="text" id="numbers" name="numbers" placeholder="Exemple : 5,12,-3,8" required>
                                                    <br>
                                                    <input type="submit" value="Calculer">
                                                  </form>';
                                        
                                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                $numbersInput = $_POST['numbers'];
                                        
                                                // Conversion de l'entrée en un tableau d'entiers
                                                $numbersArray = array_map('intval', explode(',', $numbersInput)); // Divise la chaîne et convertit chaque élément en entier
                                        
                                                if (count($numbersArray) == 0) {
                                                    echo "<p>Veuillez entrer au moins un nombre valide.</p>";
                                                } else {
                                                    // Calcul des statistiques
                                                    $average = array_sum($numbersArray) / count($numbersArray);
                                                    $max = max($numbersArray);
                                                    $min = min($numbersArray);
                                        
                                                    // Affichage des résultats
                                                    echo "<p>Pour les nombres : [" . implode(", ", $numbersArray) . "]</p>";
                                                    echo "<ul>
                                                            <li>Moyenne : " . round($average, 2) . "</li>
                                                            <li>Maximum : $max</li>
                                                            <li>Minimum : $min</li>
                                                          </ul>";
                                                }
                                            }
                                            break;
                                            case 9:
                                                echo "<h2>Exercice 9 : Tableau multidimensionnel associatif</h2>";
                                            
                                                // Déclaration du tableau multidimensionnel associatif
                                                $personnes = [
                                                    "Lo" => ["prenom" => "Papa", "ville" => "Dakar", "age" => 20],
                                                    "Sow" => ["prenom" => "Mareme", "ville" => "Dakar", "age" => 21],
                                                    "Tounkara" => ["prenom" => "Maman", "ville" => "Dakar", "age" => 21],
                                                    "Mboup" => ["prenom" => "Mouhammadou", "ville" => "Dakar", "age" => 32],
                                                ];
                                            
                                                // Affichage du tableau sous forme structurée
                                                echo "<table border='1' cellpadding='5' cellspacing='0'>
                                                        <thead>
                                                            <tr>
                                                                <th>Nom</th>
                                                                <th>Prénom</th>
                                                                <th>Ville</th>
                                                                <th>Âge</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>";
                                                
                                                foreach ($personnes as $nom => $details) {
                                                    echo "<tr>
                                                            <td>$nom</td>
                                                            <td>{$details['prenom']}</td>
                                                            <td>{$details['ville']}</td>
                                                            <td>{$details['age']}</td>
                                                          </tr>";
                                                }
                                            
                                                echo "  </tbody>
                                                      </table>";
                                                break;
                                                case 10:
                                                    echo "<h2>Exercice 10 : Compter les voyelles et les consonnes</h2>";
                                                    echo '<form method="post" action="">
                                                            <label for="string">Entrez une chaîne de caractères :</label>
                                                            <input type="text" id="string" name="string" required>
                                                            <br>
                                                            <input type="submit" value="Analyser">
                                                          </form>';
                                                
                                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                        $inputString = $_POST['string'];
                                                
                                                        // Initialisation des compteurs
                                                        $voyellesCount = 0;
                                                        $consonnesCount = 0;
                                                
                                                        // Définir les voyelles
                                                        $voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'à', 'é', 'è', 'ê', 'ï', 'î', 'ô', 'ù', 'ü'];
                                                
                                                        // Parcourir chaque caractère de la chaîne
                                                        $inputStringLower = strtolower($inputString); // Convertir en minuscule pour une comparaison uniforme
                                                        foreach (str_split($inputStringLower) as $char) {
                                                            if (ctype_alpha($char)) { // Vérifie si le caractère est une lettre
                                                                if (in_array($char, $voyelles)) {
                                                                    $voyellesCount++;
                                                                } else {
                                                                    $consonnesCount++;
                                                                }
                                                            }
                                                        }
                                                
                                                        // Affichage des résultats
                                                        echo "<p>Dans la chaîne : \"$inputString\"</p>";
                                                        echo "<ul>
                                                                <li>Nombre de voyelles : $voyellesCount</li>
                                                                <li>Nombre de consonnes : $consonnesCount</li>
                                                              </ul>";
                                                    }
                                                    break;
                                                    case 11:
                                                        echo "<h2>Exercice 11 : Nombre de jours restants jusqu'à la fin de l'année</h2>";
                                                        echo '<form method="post" action="">
                                                                <label for="date">Entrez une date (format : YYYY-MM-DD) :</label>
                                                                <input type="date" id="date" name="date" required>
                                                                <br>
                                                                <input type="submit" value="Calculer">
                                                              </form>';
                                                    
                                                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                            $inputDate = $_POST['date'];
                                                    
                                                            // Vérifier que la date saisie est valide
                                                            if (strtotime($inputDate)) {
                                                                // Convertir la date saisie et la date de fin d'année en objets DateTime
                                                                $dateSaisie = new DateTime($inputDate);
                                                                $finAnnee = new DateTime('12-31'); // Date de la fin de l'année (31 décembre)
                                                    
                                                                // Calculer la différence entre la date saisie et la fin de l'année
                                                                $interval = $dateSaisie->diff($finAnnee);
                                                    
                                                                // Afficher le nombre de jours restants
                                                                echo "<p>Il reste " . $interval->days . " jours jusqu'à la fin de l'année.</p>";
                                                            } else {
                                                                echo "<p>Veuillez entrer une date valide.</p>";
                                                            }
                                                        }
                                                        break;
                                                        case 12:
                                                            echo "<h2>Exercice 12 : Formulaire d'adresse client</h2>";
                                                            echo '<form method="post" action="traitement.php">
                                                                    <fieldset>
                                                                        <legend>Adresse client</legend>
                                                                        <label for="nom">Nom :</label>
                                                                        <input type="text" id="nom" name="nom" required><br><br>
                                                        
                                                                        <label for="prenom">Prénom :</label>
                                                                        <input type="text" id="prenom" name="prenom" required><br><br>
                                                        
                                                                        <label for="adresse">Adresse :</label>
                                                                        <input type="text" id="adresse" name="adresse" required><br><br>
                                                        
                                                                        <label for="ville">Ville :</label>
                                                                        <input type="text" id="ville" name="ville" required><br><br>
                                                        
                                                                        <label for="codePostal">Code Postal :</label>
                                                                        <input type="text" id="codePostal" name="codePostal" required><br><br>
                                                        
                                                                        <input type="submit" value="Envoyer">
                                                                    </fieldset>
                                                                </form>';
                                                            break;
                                                            case 13:
                                                                echo "<h2 style='text-align: center; color: #ff6347;'>Exercice 13 : Calcul de la moyenne, du maximum et du minimum</h2>";
                                                                echo '<form method="post" action="" style="max-width: 500px; margin: auto; padding: 20px; background: #f0f8ff; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                                                                        <fieldset style="border: 2px solid #ff6347; padding: 20px; border-radius: 10px;">
                                                                            <legend style="font-size: 1.5em; color: #ff6347;">Saisir un tableau d\'entiers</legend>
                                                                            
                                                                            <label for="numbers" style="color: #ff6347;">Entrez les nombres séparés par des virgules :</label>
                                                                            <input type="text" id="numbers" name="numbers" required placeholder="ex. 1, 2, 3, 4, 5" style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 5px; border: 1px solid #ff6347; background: #fff; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);"><br><br>
                                                            
                                                                            <input type="submit" value="Calculer" style="background-color: #ff6347; color: white; padding: 10px 20px; border-radius: 5px; border: none; cursor: pointer; font-size: 1.2em;">
                                                                        </fieldset>
                                                                    </form>';
                                                                break;
                                                                case 14:
                                                                    echo "<h2 style='text-align: center; color: #ff6347;'>Exercice 14 : Calcul du prix TTC et de la TVA</h2>";
                                                                    // Vérification si des données ont été soumises
                                                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                                        $prixHT = $_POST['prixHT'];
                                                                        $tauxTVA = $_POST['tauxTVA'];
                                                                
                                                                        // Calcul du montant de la TVA et du prix TTC
                                                                        $montantTVA = $prixHT * ($tauxTVA / 100);
                                                                        $prixTTC = $prixHT + $montantTVA;
                                                                    } else {
                                                                        $prixHT = '';
                                                                        $tauxTVA = '';
                                                                        $montantTVA = '';
                                                                        $prixTTC = '';
                                                                    }
                                                                
                                                                    echo '<form method="post" action="" style="max-width: 500px; margin: auto; padding: 20px; background: #f0f8ff; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                                                                            <fieldset style="border: 2px solid #ff6347; padding: 20px; border-radius: 10px;">
                                                                                <legend style="font-size: 1.5em; color: #ff6347;">Calcul du prix TTC et de la TVA</legend>
                                                                                
                                                                                <label for="prixHT" style="color: #ff6347;">Prix HT :</label>
                                                                                <input type="number" id="prixHT" name="prixHT" required value="' . $prixHT . '" placeholder="Entrez le prix HT" style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 5px; border: 1px solid #ff6347; background: #fff; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);"><br><br>
                                                                
                                                                                <label for="tauxTVA" style="color: #ff6347;">Taux de TVA (%) :</label>
                                                                                <input type="number" id="tauxTVA" name="tauxTVA" required value="' . $tauxTVA . '" placeholder="Entrez le taux de TVA" style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 5px; border: 1px solid #ff6347; background: #fff; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);"><br><br>
                                                                
                                                                                <input type="submit" value="Calculer" style="background-color: #ff6347; color: white; padding: 10px 20px; border-radius: 5px; border: none; cursor: pointer; font-size: 1.2em;">
                                                                            </fieldset>
                                                                        </form>';
                                                                
                                                                    // Affichage des résultats
                                                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                                        echo '<div style="text-align: center; margin-top: 20px;">
                                                                                <p style="font-size: 1.5em; color: #ff6347;">Montant de la TVA : ' . number_format($montantTVA, 2, ',', ' ') . ' €</p>
                                                                                <p style="font-size: 1.5em; color: #ff6347;">Prix TTC : ' . number_format($prixTTC, 2, ',', ' ') . ' €</p>
                                                                              </div>';
                                                                    }
                                                                    break;
                                                                    case 15:
                                                                        echo "<h2 style='text-align: center; color: #ff6347;'>Exercice 15 : Formulaire de choix d'opération immobilière</h2>";
                                                                        
                                                                        // Si un choix est fait, rediriger vers la page correspondante
                                                                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                                            $choix = $_POST['choix'];
                                                                            
                                                                            // Redirection en fonction du choix
                                                                            switch ($choix) {
                                                                                case 'vendre':
                                                                                    header('Location: vendre.php'); // Redirige vers la page pour vendre
                                                                                    exit();
                                                                                case 'acheter':
                                                                                    header('Location: acheter.php'); // Redirige vers la page pour acheter
                                                                                    exit();
                                                                                case 'louer':
                                                                                    header('Location: louer.php'); // Redirige vers la page pour louer
                                                                                    exit();
                                                                                default:
                                                                                    echo "<p style='color: red; text-align: center;'>Erreur: Choix non valide.</p>";
                                                                                    break;
                                                                            }
                                                                        }
                                                                    
                                                                        // Formulaire HTML
                                                                        echo '<form method="post" action="" style="max-width: 500px; margin: auto; padding: 20px; background: #f0f8ff; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                                                                                <fieldset style="border: 2px solid #ff6347; padding: 20px; border-radius: 10px;">
                                                                                    <legend style="font-size: 1.5em; color: #ff6347;">Choisissez l\'opération immobilière</legend>
                                                                    
                                                                                    <label for="choix" style="color: #ff6347; font-size: 1.2em;">Sélectionnez une option :</label><br><br>
                                                                    
                                                                                    <input type="radio" id="vendre" name="choix" value="vendre" required>
                                                                                    <label for="vendre" style="font-size: 1.2em; color: #ff6347;">Vendre</label><br>
                                                                    
                                                                                    <input type="radio" id="acheter" name="choix" value="acheter">
                                                                                    <label for="acheter" style="font-size: 1.2em; color: #ff6347;">Acheter</label><br>
                                                                    
                                                                                    <input type="radio" id="louer" name="choix" value="louer">
                                                                                    <label for="louer" style="font-size: 1.2em; color: #ff6347;">Louer</label><br><br>
                                                                    
                                                                                    <input type="submit" value="Soumettre" style="background-color: #ff6347; color: white; padding: 10px 20px; border-radius: 5px; border: none; cursor: pointer; font-size: 1.2em; width: 100%;">
                                                                                </fieldset>
                                                                            </form>';
                                                                        break;
                                                                        case 16:
                                                                            echo "<h2 style='text-align: center; color: #ff6347;'>Exercice 16 : Fonction de transformation de chaîne</h2>";
                                                                        
                                                                            // Fonction qui transforme chaque élément du tableau pour que le premier caractère soit en majuscule et les autres en minuscules
                                                                            function transformerMajuscule(&$tableau) {
                                                                                foreach ($tableau as &$element) {
                                                                                    $element = ucfirst(strtolower($element)); // Majuscule au premier caractère, le reste en minuscule
                                                                                }
                                                                            }
                                                                        
                                                                            // Exemple de tableau
                                                                            $noms = ["papa", "maman", "mAreme", "mBOUP"];
                                                                            
                                                                            // Appel de la fonction pour transformer les éléments du tableau
                                                                            transformerMajuscule($noms);
                                                                        
                                                                            // Afficher les résultats après transformation
                                                                            echo "<pre>";
                                                                            print_r($noms);
                                                                            echo "</pre>";
                                                                            break;
                                                                            case 17:
                                                                                echo "<h2 style='text-align: center; color: #ff6347;'>Exercice 17 : Fonction sinus avec différentes unités</h2>";
                                                                            
                                                                                // Fonction qui calcule le sinus d'un angle selon l'unité spécifiée
                                                                                function calculerSinus($angle, $unite = 'r') {
                                                                                    // Vérifier l'unité et ajuster l'angle si nécessaire
                                                                                    if ($unite == 'd') {
                                                                                        // Convertir les degrés en radians
                                                                                        $angle = deg2rad($angle);
                                                                                    } elseif ($unite == 'g') {
                                                                                        // Convertir les grades en radians
                                                                                        $angle = $angle * (M_PI / 200);
                                                                                    } elseif ($unite != 'r') {
                                                                                        // Si l'unité n'est pas valide, afficher un message d'erreur
                                                                                        echo "<p style='color: red; text-align: center;'>Erreur : Unité non valide. Utilisez 'r' pour radians, 'd' pour degrés, ou 'g' pour grades.</p>";
                                                                                        return;
                                                                                    }
                                                                            
                                                                                    // Retourner le sinus de l'angle en radians
                                                                                    return sin($angle);
                                                                                }
                                                                            
                                                                                // Exemple d'utilisation de la fonction
                                                                                $angle = 45; // Exemple d'angle
                                                                                echo "<p>Le sinus de l'angle de $angle° en radians est : " . calculerSinus($angle, 'd') . "</p>";
                                                                                echo "<p>Le sinus de l'angle de $angle degrés en radians est : " . calculerSinus($angle, 'd') . "</p>";
                                                                                break;
                                                                            
                                                                        
                                                                        
                                                                    
                     
                }
            } else {
                echo "<h2>Sélectionnez un exercice pour voir son contenu.</h2>";
            }
            ?>
        </div>
    </div>
</body>
</html>

