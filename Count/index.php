<?php
include_once "Application.php";
echo " Total Object Count : " . Application::$count;
echo "<br>";
$app1 = new Application("App One");
echo "<br>";
echo " Total Object Count : " . Application::$count;
echo "<br>";
$app2 = new Application("App Two");
echo " Total Object Count :  " . Application::$count;
echo "<br>";
echo $app1;
echo "<br>";
echo $app2;