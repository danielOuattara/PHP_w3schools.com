<?php

include "./02_html_namespace.php";
include "./03_furniture_namespace.php";

$table = new Html\Table();
$table->title = "My table";
$table->numRows = 5;

$row = new Html\Row();
$row->numCells = 3;

$table_ikea = new Furniture\Table();
$table_ikea->title = "Goostrückrinva";
$table_ikea->feet = 6;
$table_ikea->color = "blue";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Hello HTML </p>
    <?php $table->message() ?>
    <?php $row->message() ?>


    <p>Hello IKEA </p>
    <?php $table_ikea->message() ?>


</body>

</html>