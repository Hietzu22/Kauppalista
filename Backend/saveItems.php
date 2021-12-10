<?php
session_start();

header("Content-type: application/json;charset=utf-8");

if (!isset($_SESSION['user_id'])) {
    $data = array(
        'error' => 'Et ole kirjautunut sisään'
    );
    echo json_encode($data);
    die();
}

if (!isset($_POST['items'])) {
    $data = array(
        'error' =>'POST-dataa ei saatavilla!'
    );
    echo json_encode($data);
    die();
}

$items = $_POST['items'];

include_once 'pdo-connect.php';

try {
    $stmt = $conn->prepare("INSERT INTO sometimes (itemname) VALUES (:itemname);");
    $stmt->bindParam(':itemname', $items);
    if ($stmt->execute() == false) {
        $data = array(
            'error' => 'Tallennus epäonnistui!'
        );
    } else {
        $data = array(
            'success' => 'Tallennettu!'
        );
    }
} catch (PDOException $e) {
    $data = array(
        'error' => 'Tallentaessa tapahtui virhe!'
    );
}


echo json_encode($data);