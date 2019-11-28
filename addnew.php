<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>insert data</title>
    <link rel="stylesheet" href="./CSS/master.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <h1>Add a product</h1>
    <?php require_once("includes/insert.php") ?>
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
      <input type="submit" name="submit" value="Add product"> <br>
        <a id="button" href="index.php" style="color:red;">Ga terug naar het overzicht</a>
      </div>
    </form>
  </body>
</html>
