<?php

function showMainPage()
{
    require "src/View/blocks/header.php";
    require "src/View/blocks/mainpage.php";
    require "src/View/blocks/footer.php";
}

function showPageAdd($pageNumber)
{
    require "../../Model/SaveBaseData.php";
    echo '<div class="container">
        <div class="d-flex justify-content-end mb-5">
        <a href="/test/index.php" class = "btn btn-primary">Вернуться на главную страницу</a>
        </div>
        <form action="../../Model/SaveBaseDate_' . $pageNumber . '.php" method="POST">
        <div class="form-group">
          <label for="Input' . $pageNumber . '">Add ' . $pageNumber . '</label>
          <input type="text" class="form-control" id="Input' . $pageNumber . '" name="' . $pageNumber . '">
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
      </form>
        <div class="container mt-3 w-50">
        <table class="table table-striped">
         <thead>
          <tr>
           <th  colspan="2">№</th>
           <th colspan="2">' . $pageNumber . '</th>
           <th  colspan="2">delete</th>
          </tr>
         </thead>
         <tbody>';
        $i = 1;
        if ($pageNumber == "country") {
            foreach ($country as $row) {
                echo '<tr><th scope="row">' . $i . '</th>
            <th colspan="2" id="' . $row["id"] . '">' . $row["$pageNumber"] . '</th>
            <th colspan="2">
                <form action="../../Model/DeleteStr.php" method="post">
                    <input type="hidden" name="id" value="' . $row["id"] . '" />
                    <input type="hidden" name="name" value="' . $pageNumber . '" />
                    <input type="submit" class="btn btn-danger" value="Удалить">
                </form>
            </th></tr>';
                $i++;
            }
        } elseif ($pageNumber == "sportsman") {
            foreach ($sportsman as $row) {
                echo '<tr><th scope="row">' . $i . '</th>
            <th colspan="2" id="' . $row["id"] . '">' . $row["$pageNumber"] . '</th>
            <th colspan="2">
                <form action="../../Model/DeleteStr.php" method="post">
                    <input type="hidden" name="id" value="' . $row["id"] . '" />
                    <input type="hidden" name="name" value="' . $pageNumber . '" />
                    <input type="submit" class="btn btn-danger" value="Удалить">
                </form>
            </th></tr>';
                $i++;
            }
        }else{

            foreach ($typeSport as $row) {
                echo '<tr><th scope="row">' . $i . '</th>
            <th colspan="2" id="' . $row["id"] . '">' . $row["$pageNumber"] . '</th>
            <th colspan="2">
                <form action="../../Model/DeleteStr.php" method="post">
                    <input type="hidden" name="id" value="' . $row["id"] . '" />
                    <input type="hidden" name="name" value="' . $pageNumber . '" />
                    <input type="submit" class="btn btn-danger" value="Удалить">
                </form>
            </th></tr>';
                $i++;
            }
        }
        echo '</tbody>
      </table>
      </div>
    </div>';
    }

