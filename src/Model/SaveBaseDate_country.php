<?php
$conn = new mysqli("localhost", "root", "", "TaskTest");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$country=$_POST["country"];
$sql = "INSERT INTO Country (country) VALUES ('".$country."')";
if($conn->query($sql)){
    echo "Данные успешно добавлены";
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
header('Location: ../View/blocks/AddMainData.php?ad=country');
