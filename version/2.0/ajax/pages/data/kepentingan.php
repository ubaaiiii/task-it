<?php
  include_once '../config/config.php';

  if ($result = $connect->query("SELECT * FROM kepentingan")) {

    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $myArray[] = $row;
    }
    echo json_encode($myArray);
}

?>
