<?php
require 'includes/config.php';

$query = "SELECT * FROM Eten";
$stmt = $conn->prepare($query);
$stmt->execute();

$result = $stmt->fetchAll();

$aantalRijen = count($result);

include 'views/eten_view.php';
