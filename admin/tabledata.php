<?php
  // Define the table data as an array
  $tableData = array(
    array("John Doe", "25", "USA"),
    array("Jane Smith", "30", "Canada"),
    array("Bob Johnson", "28", "UK"),
	array("fuad", "27", "jordan"),
	
    // Add more rows as needed
    // ...
  );

  // Define the number of rows to display per page
  $rowsPerPage = 2;

  // Calculate the total number of pages
  $totalPages = ceil(count($tableData) / $rowsPerPage);
?>
