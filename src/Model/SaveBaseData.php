<?php
$conn = new mysqli("localhost", "root", "", "TaskTest");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$country = $conn->query("SELECT * FROM Country");
$sportsman = $conn->query("SELECT * FROM Sportsman");
$typeSport = $conn->query("SELECT * FROM typeSport");

$change = $conn->query("SELECT  CountMedal.id as `id`, Country.country AS `countryName`, Sportsman.sportsman as `sportsmanName`, typeSport.typeSport as `typeSportName` , 
CountMedal.gold AS `gold`, CountMedal.silver AS `silver`, CountMedal.bronze AS `bronze`
FROM CountMedal 
LEFT JOIN Country  ON CountMedal.countryId = Country.id
LEFT JOIN Sportsman ON CountMedal.sportsmanId = Sportsman.id
LEFT JOIN typeSport ON CountMedal.typeSportId = typeSport.id");

$conn->close();
