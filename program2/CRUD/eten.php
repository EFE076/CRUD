<?php
require 'includes/config.php';

$result = [];
$aantalRijen = 0;
$foutmelding = '';

try {
    $query = "SELECT * FROM Eten";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $aantalRijen = count($result);
} catch (PDOException $e) {
    error_log($e->getMessage());
    $foutmelding = 'De gerechten konden niet worden opgehaald.';
}

include 'views/eten_view.php';
