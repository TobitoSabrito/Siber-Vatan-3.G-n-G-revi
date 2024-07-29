<?php
header('Content-Type: application/json');


try {
    $conn = new PDO("mysql:host=db;dbname=yavuzlar","root","1");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die(json_encode(array('error' => "Connection failed: " . $e->getMessage())));
}

$sql = "SELECT * FROM messages";
$sonuc = $conn->prepare($sql);
$sonuc->execute();
$data = $sonuc->fetchAll(PDO::FETCH_ASSOC);
if (is_array($data) && count($data) > 0) {
    foreach ($data as $message) {
        echo json_encode($message['message']);
    }
} else {
    echo json_encode(array('message' => 'No messages found'));
}

$conn = null;