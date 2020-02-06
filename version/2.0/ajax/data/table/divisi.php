<?php

include '../config/config.php';

while ($row = $connect->query("select * from divisi")->fetch_assoc()){
  $myArray[] = $row;
}

echo json_encode($myArray);
