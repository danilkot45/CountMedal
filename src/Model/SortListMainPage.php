<?php
$conn = new mysqli("localhost", "root", "", "TaskTest");
if ($conn->connect_error) {
    die("Ошибка: " . $conn->connect_error);
}

$sort = "gold DESC, silver DESC, bronze DESC";
$arr = array('number','country','gold','silver','bronze','allMed');
for($i=0;$i<count($arr);$i++){
    if (isset($_GET["$arr[$i]"])) {
        if ($_GET["$arr[$i]"] == "ASC") {
            $sort = "$arr[$i] ASC";
        }
        if ($_GET["$arr[$i]"] == "DESC") {
            $sort = "$arr[$i] DESC";
        }
    }
};

$changeMainPage = $conn->query("SELECT ROW_NUMBER() OVER(ORDER BY gold DESC, silver DESC, bronze DESC ) AS `number`,
 CountMedal.id as `id`, Country.country AS `countryName`, Sportsman.sportsman as `sportsmanName`, 
typeSport.typeSport as `typeSportName` ,
sum(CountMedal.gold) AS `gold`, sum(CountMedal.silver) AS `silver`, sum(CountMedal.bronze) AS `bronze`,
(sum(CountMedal.gold)+sum(CountMedal.silver)+sum(CountMedal.bronze)) AS `allMed`
FROM CountMedal
INNER JOIN Country  ON CountMedal.countryId = Country.id
INNER JOIN Sportsman ON CountMedal.sportsmanId = Sportsman.id
INNER JOIN typeSport ON CountMedal.typeSportId = typeSport.id
GROUP BY countryName 
ORDER BY  $sort");

function getHeaderForTable ($field, $typeSort, $key) {
    if ($typeSort == 'ASC') {
        return "<th scope='col'><a href='index.php?".$key."=DESC'>" . $field . "</a></th>";
    }
    if ($typeSort == 'DESC') {
        return "<th scope='col'><a href='index.php?".$key."=ASC'>" . $field . "</a></th>";
    }
}
$conn->close();
