<?php
$conn = new mysqli("localhost", "root", "", "TaskTest");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}


$countryId=$_POST["country"];
$sportsmanId=$_POST["sportsmans"];
$typeSportId=$_POST["typeSport"];
$metallId=$_POST["metall"];
if($metallId == 1){
    foreach($sportsmanId as $v){
        $sql = "INSERT INTO CountMedal (countryId,sportsmanId,typeSportId,gold,silver,bronze) 
        VALUES ('".$countryId."','".$v."','".$typeSportId."',1,0,0)";
        if($conn->query($sql)){
            header('Location: ../View/blocks/AddCountMedal.php?ad=change');
        } else{
            echo "Ошибка: " . $conn->error;
        }
    }
}elseif($metallId == 2){
    foreach($sportsmanId as $v){
        $sql = "INSERT INTO CountMedal (countryId,sportsmanId,typeSportId,gold,silver,bronze) 
        VALUES ('".$countryId."','".$v."','".$typeSportId."',0,1,0)";
        if($conn->query($sql)){
            header('Location: ../View/blocks/AddCountMedal.php?ad=change');
        } else{
            echo "Ошибка: " . $conn->error;
        }
    }
}else{
    foreach($sportsmanId as $v){
        $sql = "INSERT INTO CountMedal (countryId,sportsmanId,typeSportId,gold,silver,bronze) 
        VALUES ('".$countryId."','".$v."','".$typeSportId."',0,0,1)";
        if($conn->query($sql)){
            header('Location: ../View/blocks/AddCountMedal.php?ad=change');
        } else{
            echo "Ошибка: " . $conn->error;
        }
    }
}

$conn->close();
