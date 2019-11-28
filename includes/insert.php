<?php


  if (isset($_POST['submit']))
  {
    require_once("config.php");

    $product = $_POST['product'];
    $prijs = $_POST['prijs'];
    $locatie = $_POST['locatie'];
    $omschrijving = $_POST['omschrijving'];
    $webadres = $_POST['webadres'];

    $query = "INSERT INTO lijstje (product, prijs, locatie, omschrijving, webadres) VALUES ('$product', '$prijs', '$locatie', '$omschrijving', '$webadres')";
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
