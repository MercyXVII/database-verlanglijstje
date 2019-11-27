<?php
  $sql = "SELECT * FROM songs";
  $result = $conn->query($sql);

  if ($result->num_rows > 0)
  {
    echo "<table>
      <tr>
        <th>Artist</th>
        <th>Title</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>";
    // outputs van elke row
    while ($row = $result->fetch_assoc())
    {
      echo "<tr>";
      echo '<td>'. $row['artist'] .'</td>';
      echo '<td>'. $row['title'] .'</td>';
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
