<?php
  include './config/config.php';

  if ($resAll = $connect->query("SELECT * FROM jabatan")) {

    while($row = $resAll->fetch_array(MYSQLI_ASSOC)) {
            $jabatanAll[] = $row;
    }
    echo "<script>
            var jabatan = ".json_encode($jabatanAll).";
          </script>";

  }

?>
