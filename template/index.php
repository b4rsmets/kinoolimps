<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="template/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <title>Кинотеатр</title>
</head>
<body>
<div id="wrapper">



<?php

require_once "header.php";


$mainController= new \functions\mainController;
$mainController->getRoute();

?>

<?


require_once "footer.php";


?>
</div>
<script type="text/javascript" src="../js/slider.js"></script>
<script type="text/javascript" src="../js/filter.js"></script>
</body>
</html>

