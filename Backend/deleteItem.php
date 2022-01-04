<?php

if (!isset($_GET['id'])){
    header('Location: ../index.php');
}

$item_id = $_GET['id'];

include_once 'pdo-connect.php';

try {
    $stmt = $conn->prepare("DELETE FROM items WHERE id = :itemid");
    $stmt->bindParam(':itemid', $item_id);

    if ($stmt->execute() == false) {
        $data = array(
            'error' => 'Poistaminen epäonnistui!'
        );
    } else {
        $data = array(
            'success' => 'Poistaminen onnistui!'
        );
    }

} catch (PDOException $e) {
    $data = array(
        'error' => 'Poistaessa tapahtui virhe!'
    );
}

header("Content-type: application/json;charset=utf-8");
echo json_encode($data);