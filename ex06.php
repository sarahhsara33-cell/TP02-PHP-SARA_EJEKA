<!DOCTYPE html>
<html lang="fr">
<head>
  
  <meta charset="UTF-8">
  <title>Exercice 6 - TP PHP</title>

</head>
<body>
  <h1>Exercice 6 - Tests multiples</h1>

  <?php
     
     $mois=(int) date("m") ;
    $valeursTestees = [1, 3, 10, 12, 15];
     foreach ($valeursTestees as $numeroMois ) {
      echo "<p>Valeur testée : <strong>$numeroMois</strong> , Résultat : ";
      switch($numeroMois){
        case 1: echo "Janvier";break;
        case 2: echo "Fevrier";break;
        case 3: echo "Mars";break;
        case 4: echo "Avril";break;
        case 5: echo "Mai";break;
        case 6: echo "Juin";break;
        case 7: echo "juillet";break;
        case 8: echo "Aout";break;
        case 9: echo "Septembre";break;
        case 10: echo "Octobre";break;
        case 11: echo "Novembre";break;
        case 12: echo "Decembre";break;
        default: echo "Numéro de mois invalide" ;

      }
    }
    echo "<br>Mois du serveur: ".$mois;
  ?>
</body>
</html>