<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name = "viewpoint" content = "width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel = " stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel = "stylesheet" href="style.css">
</head>
<body>
<?php
include "../blocks/header.php";
require "../../Model/SaveBaseData.php";
?>
<div class="container">
  <div class="d-flex justify-content-end mb-5">
    <a href="/test/index.php" class = "btn btn-primary">Вернуться на главную страницу</a>
  </div>
<form action="../../Model/SaveBaseData_medals.php" method="POST">
  <div class="form-group">
    <label for="exampleFormControlSelect">Медаль</label>
    <select class="form-control" id="exampleFormControlSelect" name="metall">
      <option value="1">Золото</option>
      <option value="2">Серебро</option>
      <option value="3">Бронза</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Выберите страну</label>
    <select class="form-control" id="exampleFormControlSelect1" name="country">
      <?php
        foreach ($country as $row) {
          echo '<option value="' . $row["id"] . '">' . $row["country"] . '</option>';
        }
      ?>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Выберите вид спорта</label>
    <select class="form-control" id="exampleFormControlSelect2" name="typeSport">
    <?php
      foreach ($typeSport as $row) {
          echo '<option value="' . $row["id"] . '">' . $row["typeSport"] . '</option>';
      }
    ?>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect3">Выберите спортсмена</label>
    <select class="custom-select " size="5" name="sportsmans[]" multiple >
    <?php
    $i = 1;
      foreach ($sportsman as $row) {
        if($i==1) echo '<option value="' . $row["id"] . '" selected>' . $row["sportsman"] . '</option>';
        if( $i >= 2){
          echo '<option value="' . $row["id"] . '">' . $row["sportsman"] . '</option>';
        }
        $i++;
      }
    ?>
    </select>
  </div>
    <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
  </div>
  <div class="container mt-3 w-50">
    <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">№</th>
        <th scope="col">Страна</th>
        <th scope="col">Спортсмен</th>
        <th scope="col">Вид спорта</th>
        <th scope="col">Золото</th>
        <th scope="col">Серебро</th>
        <th scope="col">Бронза</th>
        <th scope="col">Удаление</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $i = 1;
      foreach ($change as $row) {
        echo '
          <tr>
            <th scope="row">' . $i . '</th>
            <th scope="col">' . $row["countryName"] . '</th>
            <th scope="col">' . $row["sportsmanName"] . '</th>
            <th scope="col">' . $row["typeSportName"] . '</th>
            <th scope="col">' . $row["gold"] . '</th>
            <th scope="col">' . $row["silver"] . '</th>
            <th scope="col">' . $row["bronze"] . '</th>
            <th col="col">
            <td>
                <form action="../../Model/DeleteStr.php" method="post">
                    <input type="hidden" name="id" value="' . $row["id"] . '" />
                    <input type="submit" class="btn btn-danger" value="Удалить">
                </form>
            </td>
            </th>
          </tr>';
          $i++;
      }
echo '</tbody>
      </table>
      </div>';
?>
<?php include "../blocks/footer.php";?>
</body>
</html>