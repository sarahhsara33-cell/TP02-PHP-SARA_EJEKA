<?php
$notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
];

$sommeNotes = 0;
$nombreEtudiants = count($notes);
$etudiantsValides = 0;

$meilleureNote = -1;
$meilleurEtudiant = "";

foreach ($notes as $nom => $note) {
    $sommeNotes += $note;
    
    if ($note >= 10) {
        $etudiantsValides++;
    }
    
    if ($note > $meilleureNote) {
        $meilleureNote = $note;
        $meilleurEtudiant = $nom;
    }
}

$moyenneClasse = $sommeNotes / $nombreEtudiants;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 6 - TP PHP</title>
    
</head>
<body>
    <h1>Exercice 9</h1>
    <h2>Liste des étudiants et de leurs notes</h2>
    <table>
        <thead>
            <tr>
                <th>Étudiant</th>
                <th>Note</th>
                <th>Statut</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($notes as $nom => $note): ?>
                <tr>
                    <td><?php echo $nom; ?></td>
                    <td><?php echo $note; ?></td>
                    <td>
                        <?php if ($note >= 10): ?>
                            <span class="valide">Validé</span>
                        <?php else: ?>
                            <span class="non-valide">Non validé</span>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h3>Statistiques de la classe</h3>
    <ul>
        <li><strong>Somme des notes :</strong> <?php echo $sommeNotes; ?></li>
        <li><strong>Moyenne de la classe :</strong> <?php echo $moyenneClasse; ?></li>
        <li><strong>Nombre d'étudiants ayant validé :</strong> <?php echo $etudiantsValides; ?></li>
        <li><strong>Meilleure note :</strong> <?php echo $meilleureNote; ?> (obtenue par <?php echo $meilleurEtudiant; ?>)</li>
    </ul>

</body>
</html>