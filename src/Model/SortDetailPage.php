<?php
$conn = new mysqli("localhost", "root", "", "TaskTest");
if ($conn->connect_error) {
    die("Ошибка: " . $conn->connect_error);
}


    if (isset($_GET["medal"])) {
        if ($_GET["medal"] == "Золото") {
            $medal = "and CountMedal.gold = 1";
            $countryName = $_GET["country"];
        }
        if ($_GET["medal"] == "Серебро") {
            $medal = "and CountMedal.silver = 1";
            $countryName = $_GET["country"];
        }
        if ($_GET["medal"] == "Бронза") {
            $medal = "and CountMedal.bronze = 1";
            $countryName = $_GET["country"];
        }
        if ($_GET["medal"] == "allMed") {
            $medal = "";
            $countryName = $_GET["country"];
        }
    }
$changeDetailPage = $conn->query("SELECT  CountMedal.id as `id`, Country.country AS `countryName`, Sportsman.sportsman as `sportsmanName`, typeSport.typeSport as `typeSportName` , 
CountMedal.gold AS `gold`, CountMedal.silver AS `silver`, CountMedal.bronze AS `bronze`
FROM CountMedal 
LEFT JOIN Country  ON CountMedal.countryId = Country.id
LEFT JOIN Sportsman ON CountMedal.sportsmanId = Sportsman.id
LEFT JOIN typeSport ON CountMedal.typeSportId = typeSport.id
WHERE Country.country = '$countryName' $medal
order by gold desc, silver desc, bronze desc");

$conn->close();
