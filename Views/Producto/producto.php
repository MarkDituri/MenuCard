<?php
headerAdmin($data); 
//Slider traer Datos

$dato1 = $_GET['dato1'];
$arrCategories = $data['categories'];
$arrProduct = $data['products'];
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
    <h1><?= $dato1;?></h1>
</body>
</html>