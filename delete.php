<?php

  require_once("includes/config.php");

  if(isset($_GET['id'])) {

    $id = $_GET['id'];
    $sql = "DELETE FROM songs WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($sql) {
      header("Location: index.php");
    } else {
      echo "Action failed.";
    }

  }






 ?>
