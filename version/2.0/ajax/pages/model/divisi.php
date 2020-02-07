<?php
  include_once './config/config.php';

  if ($resAll = $connect->query("SELECT * FROM divisi")) {
    while($row = $resAll->fetch_array(MYSQLI_ASSOC)) {
            $divisiAll[] = $row;
    }
    echo "<script>
            var divisi = ".json_encode($divisiAll).";
          </script>";
  }



?>
