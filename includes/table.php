<?php
  $sql = "SELECT * FROM lijstje";
  $result = $conn->query($sql);

  if ($result->num_rows > 0)
  {
    echo "<table>
      <tr>
        <th>Product</th>
        <th>Prijs</th>
        <th>Locatie</th>
        <th>Omschrijving</th>
        <th>Webadres</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>";
    // outputs van elke row
    while ($row = $result->fetch_assoc())
    {
      echo "<tr>";
      echo '<td>'. $row['product'] .'</td>';
      echo '<td>'. $row['prijs'] .'</td>';
      echo '<td>'. $row['locatie'] .'</td>';
      echo '<td>'. $row['omschrijving'] .'</td>';
      echo '<td>'. $row['webadres'] .'</td>';
      echo '<td> <a href="update.php?id='.$row['id'].'">Edit</a></td>';
      echo '<td> <a href="delete.php?id='.$row['id'].'">Delete</a></td>';
      echo "</tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }


  $conn->close();
?>
