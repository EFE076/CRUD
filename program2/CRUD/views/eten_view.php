<?php
?>
    <h1>Agenda</h1>

<?php

if ($aantalRijen > 0) { ?>

    <ul>

        <?php foreach ($result as $rij) { ?>

            <li>

                <strong>Naam:</strong>
                <?= $rij['naam'] ?><br>
                <strong>Beschrijving:</strong>
                <?= $rij['beschrijving'] ?><br>
                <strong>Categorie:</strong>
                <?= $rij['categorie'] ?><br>
                <strong>Prijs:</strong>
                <?= $rij['prijs'] ?><br>
                <strong>calories:</strong>
                <?= $rij['calories'] ?><br>
                <strong>Beschikbaar:</strong>
                <?= $rij['beschikbaar'] ?><br>
                <a href="eten_bewerken.php?id=<?= $rij['ID'] ?>">Bewerken</a> |
                <a href="eten_verwijderen.php?id=<?= $rij['ID'] ?>">Verwijderen</a>

            </li>

            <hr>

        <?php } ?>

    </ul>

<?php } else { ?>

    <p>Geen resultaten gevonden</p>

<?php } ?>