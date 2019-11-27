<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>insert data</title>
    <link rel="stylesheet" href="./CSS/master.css">
  </head>
  <body id="addnew">
    <h1>Add a product</h1>
    <?php require_once("includes/insert.php") ?>

    <form method="post">
      <label for="product">Product:</label>
      <input type="text" name="product">
      <label for="prijs">Prijs:</label>
      <input type="number" name="prijs">
      <label for="locatie">Locatie:</label>
      <input type="text" name="locatie">
      <label for="omschrijving">Omschrijving:</label>
      <input type="text" name="omschrijving"> <br>





      <input type="submit" name="submit" value="Add product">
    </form>
  </body>
</html>
