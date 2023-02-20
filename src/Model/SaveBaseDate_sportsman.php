<?php
$conn = new mysqli("localhost", "root", "", "TaskTest");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sportsman=$_POST["sportsman"];
$sql = "INSERT INTO Sportsman (sportsman) VALUES ('".$sportsman."')";
if($conn->query($sql)){
    echo "Данные успешно добавлены";
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
header('Location: ../View/blocks/AddMainData.php?ad=sportsman');
