<?php
$conn = new mysqli("localhost", "root", "", "TaskTest");
if ($conn->connect_error) {
    die("Ошибка: " . $conn->connect_error);
}
$typeSport = $_POST["typeSport"];
$sql = "INSERT INTO typeSport (typeSport) VALUES ('" . $typeSport . "')";
if ($conn->query($sql)) {
    echo "Данные успешно добавлены";
} else {
    echo "Ошибка: " . $conn->error;
}
$conn->close();
header('Location: ../View/blocks/AddMainData.php?ad=typeSport');
