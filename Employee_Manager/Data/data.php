<?php
function saveData($firstName , $lastName , $DOB , $add, $position)
{
    $info = [
        'firstName' => $firstName,
        'lastName' => $lastName,
        'DOB' => $DOB,
        "add" => $add,
        'position' => $position,
    ];
    $info = loadData();
    array_push($firstName, $lastName, $DOB, $add, $position);
    $dataJson = json_encode($info);
    file_put_contents("data.json",$dataJson);
}
 function loadData(){
     $info = file_get_contents("data.json");
     return json_decode("$info");
 }
