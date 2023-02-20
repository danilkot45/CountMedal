<div class = "container mt-5" id = "mid">
  <div align-center>
  <h3 class = "d-flex justify-content-center mb-5"> Статистика медальных зачетов </h3>
  <div class=" d-flex  justify-content-center mb-5" align-center>
  <a href="src/View/blocks/AddMainData.php?ad=country" type="button" class="btn btn-info mr-4">Добавить страну</a>
  <a href="src/View/blocks/AddMainData.php?ad=sportsman" type="button" class="btn btn-info mr-4">Добавить спортсменов</a>
  <a href="src/View/blocks/AddMainData.php?ad=typeSport" type="button" class="btn btn-info mr-4">Добавить вид спорта</a>
  <a href="src/View/blocks/AddCountMedal.php?ad=change" type="button" class="btn btn-info mr-4">Добавить медаль</a>
  </div>
  <div class="container mt-3 w-80">
    <table class="table table-striped">
    <thead>
    <tr>
        <?php
require "src/Model/SortListMainPage.php";
$typeColumn = array('number' => '№', 'country' => 'Страна', 'gold' => 'Золото',
    'silver' => 'Серебро', 'bronze' => 'Бронза', 'allMed' => 'Общее количество медалей');
foreach ($typeColumn as $k => $v) {
    $typeSort = (isset($_GET["$k"]) && $_GET["$k"] != "DESC") ? "ASC" : "DESC";
    echo getHeaderForTable("$v", $typeSort, "$k");
}

echo ' </tr>
    </thead>
    <tbody>';

foreach ($changeMainPage as $row) {
    echo '
          <tr>
            <th scope="row">' . $row["number"] . '</th>
            <th scope="col">' . $row["countryName"] . '</th>
            <th scope="col"><a href="src/View/blocks/DetailMainPage.php?medal=Золото&country='.$row["countryName"].'">' . $row["gold"] . '</a></th>
            <th scope="col"><a href="src/View/blocks/DetailMainPage.php?medal=Серебро&country='.$row["countryName"].'">' . $row["silver"] . '</a></th>
            <th scope="col"><a href="src/View/blocks/DetailMainPage.php?medal=Бронза&country='.$row["countryName"].'">' . $row["bronze"] . '</a></th>
            <th scope="col"><a href="src/View/blocks/DetailMainPage.php?medal=allMed&country='.$row["countryName"].'">' . $row["allMed"] . '</a></th>
          </tr>';
}
echo '</tbody>
            </table>
            </div>';
?>
</div>
</div>