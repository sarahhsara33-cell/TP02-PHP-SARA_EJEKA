<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Traitement GET</title>
</head>
<body>
    <h2>Résultat - Méthode GET</h2>
    <?php
    if (isset($_GET['nom'], $_GET['prenom'], $_GET['groupe']) && 
        trim($_GET['nom']) !== '' && 
        trim($_GET['prenom']) !== '') {
        
        $nom = htmlspecialchars($_GET['nom'], ENT_QUOTES, 'UTF-8');
        $prenom = htmlspecialchars($_GET['prenom'], ENT_QUOTES, 'UTF-8');
        $groupe = htmlspecialchars($_GET['groupe'], ENT_QUOTES, 'UTF-8');

        echo "<p>Bienvenue $prenom $nom, vous êtes dans le groupe $groupe.</p>";
    } else {
        echo "<p>Veuillez remplir tous les champs du formulaire.</p>";
    }
    ?>
    <p><a href="ex10_get.html">Retour au formulaire</a></p>
</body>

</html>