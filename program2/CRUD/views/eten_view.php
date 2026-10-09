<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eten overzicht</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Eten overzicht</h1>
<?php if ($foutmelding !== ''): ?>
    <p><?= htmlspecialchars($foutmelding, ENT_QUOTES, 'UTF-8') ?></p>
<?php elseif ($aantalRijen > 0): ?>
    <ul>
        <?php foreach ($result as $rij): ?>
            <li>
                <strong>Naam:</strong> <?= htmlspecialchars((string)$rij['naam'], ENT_QUOTES, 'UTF-8') ?><br>
                <strong>Categorie:</strong> <?= htmlspecialchars((string)$rij['categorie'], ENT_QUOTES, 'UTF-8') ?><br>
                <strong>Prijs:</strong> €<?= htmlspecialchars((string)$rij['prijs'], ENT_QUOTES, 'UTF-8') ?><br>
                <a href="eten_detail.php?id=<?= urlencode((string)$rij['ID']) ?>">Details</a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Geen resultaten gevonden.</p>
<?php endif; ?>
</body>
</html>
