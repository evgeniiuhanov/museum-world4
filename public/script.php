<?php

$host = "MySQL-8.0";
$user = "root";
$password = "123";
$database = "museums_db";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

$conn->set_charset("utf8");

function getMuseums($conn)
{
    $sql = "SELECT * FROM museums";

    $result = $conn->query($sql);

    $museums = [];

    while ($row = $result->fetch_assoc()) {
        $museums[] = $row;
    }

    return $museums;
}

function getMuseumByCode($conn, $code)
{
    $stmt = $conn->prepare("
        SELECT * FROM museums
        WHERE code = ?
    ");

    $stmt->bind_param("s", $code);

    $stmt->execute();

    $result = $stmt->get_result();

    return $result->fetch_assoc();
}

function saveOrder($conn, $name, $phone, $email, $museum)
{
    $stmt = $conn->prepare("
        INSERT INTO orders (name, phone, email, museum)
        VALUES (?, ?, ?, ?)
    ");

    $stmt->bind_param("ssss", $name, $phone, $email, $museum);

    return $stmt->execute();
}

?>