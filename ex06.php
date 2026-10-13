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
        case 2: echo "Janvier";break;
        case 3: echo "Janvier";break;
        case 4: echo "Janvier";break;
        case 5: echo "Janvier";break;
        case 6: echo "Janvier";break;
        case 7: echo "Janvier";break;
        case 8: echo "Janvier";break;
        case 9: echo "Janvier";break;
        case 10: echo "Janvier";break;
        case 11: echo "Janvier";break;
        case 12: echo "Janvier";break;
        default: echo "Numéro de mois invalide" ;

      }
    }
    echo "<br>Mois du serveur: ".$mois;
  ?>
</body>
</html>