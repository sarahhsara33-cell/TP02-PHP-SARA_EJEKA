
<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice3 - TP PHP</title>
</head>
<body>
  <h1>Exercice3</h1>
    <?php  
  const TAUX_TVA=20 ;
  const DEVISE= "MAD";
  const prix=60;
  const quantite=3;
  $tautTVA=20/100;
  $Total = prix * quantite;
  $TVA= $Total* $tautTVA ;
  $Ttc =$Total+$TVA ;
  echo "le Total HT: $Total<br>" ;
  echo "le montant de TVA: $TVA<br>" ;
  echo "le Total TTC: $Ttc<br>";
  $Ttc+=15 ;
  echo "le Total TTC apres l'ajout : $Ttc<br>";
  defined(TAUX_TVA);

  



?>

</body>
</html>
