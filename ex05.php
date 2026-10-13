<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 5 - TP PHP</title>
</head>
<body>
  <h1>Exercice 5 - Tests multiples</h1>

  <?php
   
   $valeursTestees = [-1, 9, 10, 12, 14, 16, 21];

   foreach ($valeursTestees as $moyenne) {
       echo "<p>Valeur testée : <strong>$moyenne</strong> , Résultat : ";

       if ($moyenne < 0 || $moyenne > 20) {
           echo "Note invalide";
       } else {
           if ($moyenne < 10) {
               echo "Non validé";
           } elseif ($moyenne >= 10 && $moyenne < 12) {
               echo "Passable";
           } elseif ($moyenne >= 12 && $moyenne < 14) {
               echo "Assez bien";
           } elseif ($moyenne >= 14 && $moyenne < 16) {
               echo "Bien";
           } else {
               echo "Très bien";
           }
       }
       echo "</p>";
   }
  ?>
</body>
</html>