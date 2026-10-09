<?php
require 'includes/config.php';

$eten = false;
$foutmelding = '';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if ($id === false || $id === null || $id < 1) {
    $foutmelding = 'Ongeldige ID.';
} else {
    try {
        $query = "SELECT * FROM Eten WHERE ID = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $eten = $stmt->fetch();
    } catch (PDOException $e) {
        error_log($e->getMessage());
        $foutmelding = 'Het gerecht kon niet worden opgehaald.';
    }
}

include 'views/eten_detail_view.php';
