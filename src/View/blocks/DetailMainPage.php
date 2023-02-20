<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = " stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel = "stylesheet" href="../../../style.css">
    <title>Document</title>
</head>
<body>
    <?php
include "../../View/blocks/header.php";
    echo '<div class="container w-80 d-flex justify-content-end mb-5">
        <a href="/test/index.php" class = "btn btn-primary">Вернуться на главную страницу</a>
    </div>';
require "../../Model/SortDetailPage.php";
if (isset($_GET["medal"])) {
    $arrayMedal = array(
        'Золото' => 'Золотые',
        'Серебро' => 'Серебряные',
        'Бронза' => 'Бронзовые',
        'allMed' => 'Все');
    foreach ($arrayMedal as $k => $v) {
        if ($_GET["medal"] == $k) {
            echo '
            <div class = "container w-80">
            <h1 class="mb-5">' . $v . ' медали страны: ' . $_GET["country"] . '</h1>
            </div>';
        }
    }

    echo '<div class = "container w-80">
            <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">№</th>
                <th scope="col">Спортсмен</th>
                <th scope="col">Вид спорта</th>
                <th scope="col">Медаль</th>
              </tr>
            </thead>
            <tbody>';
    $i = 1;
    foreach ($changeDetailPage as $row) {
        echo '
                  <tr>
                    <th scope="row">' . $i . '</th>
                    <th scope="col">' . $row["sportsmanName"] . '</th>
                    <th scope="col">' . $row["typeSportName"] . '</th>';
                    if($row["gold"] ==1){
                       echo '<th scope="row"> Золото</th>';
                    }elseif($row["silver"] ==1){
                      echo  '<th scope="row">Серебро</th>';
                    }else{
                       echo '<th scope="row">Бронза</th>';
                    }
      echo '</tr>';
        $i++;
    }
    echo '</tbody>
              </table>
              </div>';
}
include "../../View/blocks/footer.php";
?>
</body>
</html>