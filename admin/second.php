<!DOCTYPE html>
<html>
<body>
  <h1>Second Page</h1>
  <?php
    // Include the table data file
    include 'tabledata.php';

    // Output the table for the second page
    echo "<table>";
    echo "<tr><th>Name</th><th>Age</th><th>Country</th></tr>";
    foreach ($tableData as $row) {
      echo "<tr>";
      foreach ($row as $cell) {
        echo "<td>$cell</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
  ?>
</body>
</html>
