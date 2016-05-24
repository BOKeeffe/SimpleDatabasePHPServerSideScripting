<html>
<body>

<?php
	// Make a MySQL Connection
	mysql_connect("localhost", "root", "root") or die(mysql_error());
	mysql_select_db("test_create_DB") or die(mysql_error());
	// Get all the data from the "example" table
	$result = mysql_query("SELECT * FROM example")
	or die(mysql_error());

	echo "<table border='1'>";
	echo "<tr> <th>Forname</th> <th>Surname</th> <th>Age</th> </tr>";
	// keeps getting the next row until there are no more to get
	while($row = mysql_fetch_array( $result )) {
		// Print out the contents of each row into a table
		
	    // Print out the contents of each row into a table
		echo "</td><td>";
		echo $row['forename'];
		echo "</td><td>";
		echo $row['surname'];
		echo "</td><td>"; 
		echo $row['age'];
		echo "</td></tr>";

	}
	echo "</table>";



	// HTML link back to the main menu page
	echo '<h3><a href="http://localhost/Assign1.html">Return to Main Menu</a> <br></h3>';
?>

</body>
</html>
