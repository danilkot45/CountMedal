<?php
if (isset($_POST["id"])) {
    $conn = new mysqli("localhost", "root", "", "TaskTest");
    if ($conn->connect_error) {
        die("Ошибка: " . $conn->connect_error);
    }
    $personalid = $conn->real_escape_string($_POST["id"]);

    if ($_POST["name"] == "country") {
        $sql = "DELETE FROM Country WHERE id = '$personalid'";
        $deleteMedalCountry = "DELETE FROM CountMedal WHERE countryId = '$personalid'";  
        $conn->query($deleteMedalCountry);  
        if ($conn->query($sql)) {
            header("Location: ../View/blocks/AddMainData.php?ad=country");
        } else {
            echo "Ошибка: " . $conn->error;
        }
    } elseif ($_POST["name"] == "sportsman") {
        $sql = "DELETE FROM Sportsman WHERE id = '$personalid'";
        $deleteMedalSportsman = "DELETE FROM CountMedal WHERE sportsmanId = '$personalid'"; 
        $conn->query($deleteMedalSportsman); 
        if ($conn->query($sql)) {
            header("Location: ../View/blocks/AddMainData.php?ad=sportsman");
        } else {
            echo "Ошибка: " . $conn->error;
        }
    } elseif($_POST["name"] == "typeSport"){
        $sql = "DELETE FROM typeSport WHERE id = '$personalid'";
        $deleteMedaltypeSport = "DELETE FROM CountMedal WHERE typeSportId = '$personalid'"; 
        $conn->query($deleteMedaltypeSport);
        if ($conn->query($sql)) {
            header("Location: ../View/blocks/AddMainData.php?ad=typeSport");
        } else {
            echo "Ошибка: " . $conn->error;
        }
    }else{
        $sql = "DELETE FROM CountMedal WHERE id = '$personalid'";
        if ($conn->query($sql)) {
            header("Location: ../View/blocks/AddCountMedal.php?ad=change");
        } else {
            echo "Ошибка: " . $conn->error;
        }
    }

    $conn->close();
}
