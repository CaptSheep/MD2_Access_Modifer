<?php
include_once "Users.php";
$user = new Users("Long","2","long@gmail.com");
$user->getInfo();
echo "<br>";
echo $user->isUser();
