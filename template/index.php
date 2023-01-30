<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="template/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>Кинотеатр</title>
</head>
<body>
    

<?php

require_once "header.php";


$mainController= new \functions\mainController;
$mainController->getRoute();

?>

<?


require_once "footer.php";


?>
</body>
</html>

