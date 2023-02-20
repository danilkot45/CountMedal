<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name = "viewpoint" content = "width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel = " stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel = "stylesheet" href="../../../style.css">
</head>
<body>
<?php
    include "../blocks/header.php";
    include "../../Controller/PageController.php";
    showPageAdd($_GET['ad']);
    include "../blocks/footer.php";
    ?>
</body>
</html>
