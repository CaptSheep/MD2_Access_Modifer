<?php
include_once "Manager/Manager.php";
include_once "Employee/Employees.php";
include_once "Data/data.php";

use Manager\Manager;
use Employee\Employees;
$arr = loadData();
?>
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
<table border="1">
    <thead>
    <tr>
        <td>STT</td>
        <td>Ho</td>
        <td>Ten</td>
        <td>DOB</td>
        <td>Address</td>
        <td>Position</td>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($arr as $key => $value) :
    ?>
    <tr>
        <td><?php echo $key ?></td>
        <td><?php echo $value->Ho ?></td>
        <td><?php echo $value->Ten ?></td>
        <td><?php echo $value->DOB ?></td>
        <td><?php echo $value->Address ?></td>
        <td><?php echo $value->Position ?></td>
    </tr>
    <?php
        endforeach;
    ?>
    </tbody>
</table>
<a href="index.php"> Quay lai trang Index</a>
</body>
</html>
