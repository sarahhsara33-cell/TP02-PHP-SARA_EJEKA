<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Traitement POST</title>
</head>
<body>
    <h2>Résultat - Méthode POST</h2>
    <?php
    if (isset($_POST['nom'], $_POST['prenom'], $_POST['groupe']) && 
        trim($_POST['nom']) !== '' && 
        trim($_POST['prenom']) !== '') {
        
        $nom = htmlspecialchars($_POST['nom'], ENT_QUOTES, 'UTF-8');
        $prenom = htmlspecialchars($_POST['prenom'], ENT_QUOTES, 'UTF-8');
        $groupe = htmlspecialchars($_POST['groupe'], ENT_QUOTES, 'UTF-8');

        echo "<p>Bienvenue $prenom $nom, vous êtes dans le groupe $groupe.</p>";
    } else {
        echo "<p>Veuillez remplir tous les champs du formulaire.</p>";
    }
    ?>
    <p><a href="ex10_post.html">Retour au formulaire</a></p>
</body>

</html>