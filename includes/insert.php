<?php


  if (isset($_POST['submit']))
  {
    require_once("config.php");

    $artist = $_POST['artist'];
    $title = $_POST['title'];

    $query = "INSERT INTO songs (artist, title) VALUES ('$artist', '$title')";
    mysqli_query($conn, $query);

    if(!$query)
    {
      echo "Not inserted.";
    } else {
      echo "Inserted";
      header("Location: index.php");
    }

  }


 ?>
