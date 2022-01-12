<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="firstName" placeholder="Dien ho cua ban ">
    <input type="text" name="lastName" placeholder="Dien ten cua ban ">
    <input type="text" name="DOB" placeholder="Dien ngay sinh cua ban ">
    <input type="text" name="address" placeholder="Dien dia chi cua ban ">
    <input type="text" name="position" placeholder="Dien vi tri cua ban ">
    <input type="submit" name="submit" value="Gui thong tin">

</form>
</body>
</html>
<?php
include_once "Data/data.json";
if ($_SERVER['REQUEST_METHOD'] == "POST")
    $firstName = $_REQUEST["firstName"];
    $lastName = $_REQUEST["lastName"];
    $DOB = $_REQUEST["DOB"];
    $address = $_REQUEST["address"];
    $position = $_REQUEST["position"];
    saveData($firstName,$lastName,$DOB,$address,$position);
    header("location : show.php");
?>
