<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eten details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Eten details</h1>
<?php if ($foutmelding !== ''): ?>
    <p><?= htmlspecialchars($foutmelding, ENT_QUOTES, 'UTF-8') ?></p>
<?php elseif ($eten): ?>
    <ul>
        <li>
            <strong>Naam:</strong> <?= htmlspecialchars((string)$eten['naam'], ENT_QUOTES, 'UTF-8') ?><br>
            <strong>Beschrijving:</strong> <?= htmlspecialchars((string)$eten['beschrijving'], ENT_QUOTES, 'UTF-8') ?><br>
            <strong>Categorie:</strong> <?= htmlspecialchars((string)$eten['categorie'], ENT_QUOTES, 'UTF-8') ?><br>
            <strong>Prijs:</strong> €<?= htmlspecialchars((string)$eten['prijs'], ENT_QUOTES, 'UTF-8') ?><br>
            <strong>Calorieën:</strong> <?= htmlspecialchars((string)$eten['calories'], ENT_QUOTES, 'UTF-8') ?><br>
            <strong>Beschikbaar:</strong> <?= htmlspecialchars((string)$eten['beschikbaar'], ENT_QUOTES, 'UTF-8') ?>
        </li>
    </ul>
<?php else: ?>
    <p>Gerecht niet gevonden.</p>
<?php endif; ?>
<p><a href="eten.php">Terug naar overzicht</a></p>
</body>
</html>
