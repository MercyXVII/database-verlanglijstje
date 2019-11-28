<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert</title>
    <link rel="stylesheet" href="./CSS/master.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
   <body>

    <?php
      error_reporting(0);
      require_once("includes/config.php");

      $id = $_GET['id'];

      $sql = "SELECT * FROM lijstje WHERE id = $id";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();

      echo "<h1>Het geselecteerde product is: ".$row['product']."</h1>";
    ?>

  <div class="text-center">
    <form method="post">
      <label for="product">Product:</label>
      <input type="text" name="product" autocomplete="off">
      <label for="prijs">Prijs:</label>
      <input type="number" name="prijs" autocomplete="off">
      <label for="locatie">Locatie:</label>
      <input type="text" name="locatie" autocomplete="off">
      <label for="omschrijving">Omschrijving:</label>
      <input type="text" name="omschrijving" autocomplete="off">
      <label for="webadres">Webadres:</label>
      <input type="text" name="webadres" autocomplete="off"> <br>
      <input type="submit" name="submit"> <br>
    </form>
      <a id="button" href="index.php" style="color:red;">Ga terug naar het overzicht</a><br><br>
      <a id="button" href="addnew.php" style="color:red;">Insert New Product</a>
    </div>

    <?php
    $product = $_POST['product'];
    $prijs = $_POST['prijs'];
    $locatie = $_POST['locatie'];
    $omschrijving = $_POST['omschrijving'];
    $webadres = $_POST['webadres'];
    $query = "UPDATE lijstje SET product='$product', prijs='$prijs', locatie='$locatie', omschrijving='$omschrijving', webadres='$webadres' WHERE id='$id'";

    if(isset($_POST['submit'])){

      $required = ['product', 'prijs', 'locatie', 'omschrijving', 'webadres'];

      if(!empty($required)){
        $result = $conn->query($query);
        header("Location: index.php");
      } else {
        echo "All fields are required.";
      }

    }

     ?>

  </body>
</html>
